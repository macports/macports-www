<?
	require_once("$DOCUMENT_ROOT/en/includes/od_lib.inc.php");
	require_once("$DOCUMENT_ROOT/includes/od_db.inc.php");

	od_print_header("DarwinPorts Portfiles", "en", "iso-8859-1", "", 0);
?>
	<center>
	<h1>DarwinPorts Portfiles</h1>
	</center>

	<p>
	This form allows you to search the current index of DarwinPorts software. <br />
	<i>Index last updated: </i>
	<?
		$sql = "SELECT UNIX_TIMESTAMP(activity_time) FROM darwinports.log ORDER BY UNIX_TIMESTAMP(activity_time) DESC";
		$result = mysql_query($sql);
		if($result && $row = mysql_fetch_row($result)) {
				echo date("d-M-Y H:i:s", $row[0]);
		}
	?>
	</p>
	
	<form action="<?= $PHP_SELF; ?>">
	<table>
		<tr>
			<th>Search by:</th>
			<td>
				<select name="by">
				<option value="name"<? if ($by == "name") { echo " selected=\"selected\""; } ?>>Software Title</option>
				<option value="desc"<? if ($by == "desc") { echo " selected=\"selected\""; } ?>>Description</option>
				<option value="cat"<? if ($by == "cateogry") { echo " selected=\"selected\""; } ?>>Category</option>
				</select>
			</td>
			<td><input type="text" name="substr" size="40" /></td>
			<td><input type="submit" name="Search" /></td>
		</tr>
		<tr><td colspan="4"><hr size="1" noshade="noshade" /></td></tr>
		<tr>
<?
		$result = mysql_query("SELECT count(*) from darwinports.portfiles");
		if ($result) {
			$row = mysql_fetch_array($result);
			$count = $row[0];
		} else {
			$count = 0;
		}
?>
			<td colspan="4" align="left"><a href="<?= $PHP_SELF; ?>?by=all">View All Software Titles (<?= $count; ?>)</a></td>
		</tr>
		<?
			if (!$by || (!$substr && $by != "all")) {
		?>
		<tr><td colspan="4"><hr size="1" noshade="noshade" /></td></tr>
		<tr><th colspan="4" align="left">View By Category:</th></tr>
		<?
				$query = "SELECT DISTINCT category FROM darwinports.categories ORDER BY category";
				$result = mysql_query($query);
				if($result) {
					while( $row = mysql_fetch_assoc($result) ) {
		?>
		<tr><td colspan="4"><a href="<?= $PHP_SELF; ?>?by=cat&substr=<?= $row['category']; ?>"><?= $row['category']; ?></a></td></tr>
		<?
					}
				}
			}
		?>
	</table>
	</form>

	<dl>
<?
	if ($by && ($substr || $by == "all")) {
		$query = "SELECT DISTINCT name,path,version,description,maintainer FROM darwinports.portfiles p, darwinports.maintainers m, darwinports.categories c WHERE p.name=m.portfile AND p.name=c.portfile AND m.is_primary=1";
		if ($by == "name") {
			$query = $query . " AND p.name LIKE '%" . addslashes($substr) . "%'";
		}
		if ($by == "desc") {
			$query = $query . " AND p.description LIKE '%" . addslashes($substr) . "%'";
		}
		if ($by == "cat") {
			$query = $query . " AND c.category='" . addslashes($substr) . "'";
		}
		$query = $query . " ORDER BY name";
		$result = mysql_query($query);
		if($result) {
			while( $row = mysql_fetch_assoc($result) ) {
?>
	<dt><b><a href="http://www.opendarwin.org/projects/darwinports/darwinports/dports/<?= $row['path']; ?>/Portfile"><?= $row['name']; ?></a></b> <?= $row['version']; ?></dt>
	<dd>
	<?= $row['description']; ?><br />
	<i>Maintained by:</i> <a href="mailto:<?= $row['maintainer']; ?>"><?= $row['maintainer']; ?></a><br />
	<i>Categories:</i> 
	<?
				$nquery = "SELECT category FROM darwinports.categories WHERE portfile='" . $row['name'] . "' ORDER BY is_primary DESC, category";
				$nresult = mysql_query($nquery);
				if ($nresult) {
					$primary = 1;
					while ( $nrow = mysql_fetch_assoc($nresult) ) {
						if ($primary) { echo "<b>"; }
					?>
						<a href="<?= $PHP_SELF; ?>?by=cat&substr=<?= $nrow['category']; ?>"><?= $nrow['category']; ?></a>
					<?
						if ($primary) { echo "</b>"; }
						$primary = 0;
					}
				}
	?>
	<br />
	</dd>
	<br />
<?	
			} 
		} else {
			echo "An Error Occurred. (501)";
		}
	}
?>
	</dl>
<?
	od_print_footer("en"); 
?>
