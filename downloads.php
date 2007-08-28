  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/macports/includes/common.inc");
    print_header('MacPorts Downloads', 'utf-8');
  ?>

    <div id="content">
	
		<h2 class="hdr">Available Downloads</h2>
		<table>
<?php
$dir=".";

// Read files from the dirctory
$files = array();
$rep=opendir($dir);
while ($file = readdir($rep)) {
	if (   preg_match('/^(\..*)|(.*\.php)|(.*\.css)|(.*\.html)$/', $file)
		|| is_dir($file)
	   ) {
		continue;
	}
	
	// Add file to array, as key, with modtime as value
	$files[$file] = filemtime($file);
}
closedir($rep);

// Sort the array in reverse order by value (modtime)
arsort($files);

// Emit the files, with dates
foreach ($files as $f => $t) {
	echo "<tr>";
	echo "<td>".date("d-M-Y G:i", $t)."</td><td><a href=\"/macports/downloads/$f\">$f</a></td>\n";
	echo "</tr>";
}
?>
		</table>
    </div>
  </div>

<?php
  print_footer();
?>
