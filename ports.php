<?php
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	include_once("$DOCUMENT_ROOT/includes/common.inc");
	include_once("$DOCUMENT_ROOT/includes/db.inc");
	include_once("$DOCUMENT_ROOT/includes/email.inc");
	print_header('Available Ports', 'iso-8859-1');
	$by = isset($_GET['by']) ? $_GET['by'] : '';
	$substr = isset($_GET['substr']) ? $_GET['substr'] : '';
?>
	<center>
	<h1>DarwinPorts Portfiles</h1>
	</center>

	<p>
	This form allows you to search the current index of DarwinPorts software. <br />
	<i>Index last updated: </i>
	<?php
		$sql = "SELECT UNIX_TIMESTAMP(activity_time) FROM darwinports.log ORDER BY UNIX_TIMESTAMP(activity_time) DESC";
		$result = mysql_query($sql);
		if($result && $row = mysql_fetch_row($result)) {
				echo date("d-M-Y H:i:s", $row[0]);
		}
	?>
	</p>
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table>
		<tr>
			<th>Search by:</th>
			<td>
				<select name="by">
				<option value="name"<?php if ($by == "name") { echo " selected=\"selected\""; } ?>>Software Title</option>
				<option value="desc"<?php if ($by == "desc") { echo " selected=\"selected\""; } ?>>Description</option>
				<option value="cat"<?php if ($by == "cat") { echo " selected=\"selected\""; } ?>>Category</option>
				<option value="maintainer"<?php if ($by == "maintainer") { echo " selected=\"selected\""; } ?>>Maintainer</option>
				</select>
			</td>
			<td><input type="text" name="substr" size="40" /></td>
			<td><input type="submit" value="Search" /></td>
		</tr>
		<tr><td colspan="4"><hr size="1" noshade="noshade" /></td></tr>
		<tr>
<?php
		$result = mysql_query("SELECT count(*) from darwinports.portfiles");
		if ($result) {
			$row = mysql_fetch_array($result);
			$count = $row[0];
		} else {
			$count = 0;
		}
?>
			<td colspan="4" align="left"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?by=all">View All Software Titles (<?php echo $count; ?>)</a></td>
		</tr>
		<?php
			if (!$by || (!$substr && $by != "all")) {
		?>
		<tr><td colspan="4"><hr size="1" noshade="noshade" /></td></tr>
		<tr><th colspan="4" align="left">View By Category:</th></tr>
		<?php
				$query = "SELECT DISTINCT category FROM darwinports.categories ORDER BY category";
				$result = mysql_query($query);
				if($result) {
					while( $row = mysql_fetch_assoc($result) ) {
		?>
		<tr><td colspan="4"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?by=cat&amp;substr=<?php echo urlencode($row['category']); ?>"><?php echo htmlspecialchars($row['category']); ?></a></td></tr>
		<?php
					}
				}
			}
		?>
	</table>
	</form>

<?php
	if ($by && ($substr || $by == "all")) {
		$fields = "name, path, version, description";
		$query = "1";
		$tables = "darwinports.portfiles p";
		if ($by == "name") {
			$query .= " AND p.name LIKE '%" . mysql_real_escape_string($substr) . "%'";
		}
		if ($by == "library") {
			$query .= " AND p.name='" . mysql_real_escape_string($substr) . "'";
		}
		if ($by == "desc") {
			$query .= " AND p.description LIKE '%" . mysql_real_escape_string($substr) . "%'";
		}
		if ($by == "cat") {
			$tables .= ", darwinports.categories c";
			$query .= " AND c.portfile=p.name AND c.category='" . mysql_real_escape_string($substr) . "'";
		}
		if ($by == "variant") {
			$tables .= ", darwinports.variants v";
			$query .= " AND v.portfile=p.name AND v.variant='" . mysql_real_escape_string($substr) . "'";
		}
		if ($by == "platform") {
			$tables .= ", darwinports.platforms pl";
			$query .= " AND pl.portfile=p.name AND pl.platform ='" . mysql_real_escape_string($substr) . "'";
		}
		if ($by == "maintainer") {
			$tables .= ", darwinports.maintainers m";
			$query .= " AND m.portfile=p.name AND m.maintainer LIKE '%" . mysql_real_escape_string($substr) . "%'";
		}
		$query = "SELECT DISTINCT $fields FROM $tables WHERE $query ORDER BY name";
		$result = mysql_query($query);
		if($result) {
?>
	<p>
	<i><?php echo mysql_num_rows($result) . ' ' . (mysql_num_rows($result) == 1 ? 'Portfile' : 'Portfiles') . ' Selected'; ?></i>
	</p>
	<dl>
<?php
			while( $row = mysql_fetch_assoc($result) ) {
?>
	<dt><b><a href="http://www.darwinports.org/darwinports/dports/<?php echo $row['path']; ?>/Portfile"><?php echo htmlspecialchars($row['name']); ?></a></b> <?php echo htmlspecialchars($row['version']); ?></dt>
	<dd>
	<?php echo htmlspecialchars($row['description']); ?><br />
	<?php
// MAINTAINERS
				$nquery = "SELECT maintainer FROM darwinports.maintainers WHERE portfile='" . mysql_real_escape_string($row['name']) . "' ORDER BY is_primary DESC, maintainer";
				$nresult = mysql_query($nquery);
				if ($nresult) {
?>
	<i>Maintained by:</i>
<?php
					$primary = 1;
					while ( $nrow = mysql_fetch_array($nresult) ) {
						if ($primary) { echo "<b>"; }
						$addr = obfuscate_email($nrow[0]);
						print $addr;
						if ($primary) { echo "</b>"; }
						$primary = 0;
					}
				}

// CATEGORIES
				$nquery = "SELECT category FROM darwinports.categories WHERE portfile='" . mysql_real_escape_string($row['name']) . "' ORDER BY is_primary DESC, category";
				$nresult = mysql_query($nquery);
				if ($nresult) {
?>
	<br />
	<i>Categories:</i>
<?php
					$primary = 1;
					while ( $nrow = mysql_fetch_assoc($nresult) ) {
						if ($primary) { echo "<b>"; }
					?>
						<a href="<?php echo $_SERVER['PHP_SELF']; ?>?by=cat&amp;substr=<?php echo urlencode($nrow['category']); ?>"><?php echo htmlspecialchars($nrow['category']); ?></a>
					<?php
						if ($primary) { echo "</b>"; }
						$primary = 0;
					}
				}

// PLATFORMS
				$nquery = "SELECT platform FROM darwinports.platforms WHERE portfile='" . mysql_real_escape_string($row['name']) . "' ORDER BY platform";
				$nresult = mysql_query($nquery);
				if ($nresult && mysql_num_rows($nresult) > 0) {
?>
	<br />
	<i>Platforms:</i>
<?php
					while ( $nrow = mysql_fetch_array($nresult) ) {
						$platform = $nrow[0];
					?>
						<a href="<?php echo $_SERVER['PHP_SELF']; ?>?by=platform&amp;substr=<?php echo urlencode($platform); ?>"><?php echo htmlspecialchars($platform); ?></a>
					<?php
					}
				}

// DEPENDENCIES
				$nquery = "SELECT library FROM darwinports.dependencies WHERE portfile='" . mysql_real_escape_string($row['name']) . "' ORDER BY library";
				$nresult = mysql_query($nquery);
				if ($nresult && mysql_num_rows($nresult) > 0) {
?>
	<br />
	<i>Dependencies:</i>
<?php
					while ( $nrow = mysql_fetch_array($nresult) ) {
						// lib:libpng.3:libpng -> libpng
						$library = eregi_replace("^([^:]*:[^:]*:|[^:]*:)", "", $nrow[0]);
					?>
						<a href="<?php echo $_SERVER['PHP_SELF']; ?>?by=library&amp;substr=<?php echo urlencode($library); ?>"><?php echo htmlspecialchars($library); ?></a>
					<?php
					}
				}
/*
// VARIANTS
				$nquery = "SELECT variant FROM darwinports.variants WHERE portfile='" . mysql_real_escape_string($row['name']) . "' ORDER BY variant";
				$nresult = mysql_query($nquery);
				if ($nresult && mysql_num_rows($nresult) > 0) {
?>
	<br />
	<i>Variants:</i>
<?php
					while ( $nrow = mysql_fetch_array($nresult) ) {
						$variant = $nrow[0];
					?>
						<a href="<?php echo $_SERVER['PHP_SELF']; ?>?by=variant&amp;substr=<?php echo urlencode($variant); ?>"><?php echo htmlspecialchars($variant); ?></a>
					<?php
					}
				}
*/
	?>
	<br />
	</dd>
	<br />
<?php
			} 
		} else {
			echo "An Error Occurred. (501)";
		}
	}
?>
	</dl>
	</div>
<?php
	print_footer();
?>
