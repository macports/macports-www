<?
	require_once("$DOCUMENT_ROOT/en/includes/od_lib.inc.php");
	require_once("$DOCUMENT_ROOT/includes/od_db.inc.php");

	od_print_header("DarwinPorts Portfiles", "en", "iso-8859-1", "", 0);
?>
	<center>
	<h1>DarwinPorts Portfiles</h1>
	</center>

	<p>
	This form allows you to search the current index of DarwinPorts software.
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
			<td colspan="4" align="left"><a href="<?= $PHP_SELF; ?>?by=all">View All Software Titles</a></td>
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
		$query = "SELECT name,description,maintainer FROM darwinports.portfiles p, darwinports.maintainers m, darwinports.categories c WHERE p.name=m.portfile AND p.name=c.portfile AND m.is_primary=1";
		if ($by == "name") {
			$query = $query . " AND p.name LIKE '%" . addslashes($substr) . "%'";
		}
		if ($by == "desc") {
			$query = $query . " AND p.description LIKE '%" . addslashes($substr) . "%'";
		}
		if ($by == "cat") {
			$query = $query . " AND c.category LIKE '%" . addslashes($substr) . "%'";
		}
		$query = $query . " ORDER BY name";
		$result = mysql_query($query);
		if($result) {
			while( $row = mysql_fetch_assoc($result) ) {
?>
	<dt><b><?= $row['name']; ?></b></dt>
	<dd>
	<?= $row['description']; ?><br />
	<i>Maintained by:</i> <a href="mailto:<?= $row['maintainer']; ?>"><?= $row['maintainer']; ?></a><br />
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
