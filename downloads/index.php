  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/includes/common.inc");
    include_once("$DOCUMENT_ROOT/includes/functions.inc");
    print_header('DarwinPorts Downloads', 'iso-8859-1');
  ?>

    <div id="content">
	
		<h2 class="hdr">Available Downloads</h2>
		<p>
<?php
$dir=".";

// Read files from the dirctory
$files = array();
$rep=opendir($dir);
while ($file = readdir($rep)) {
	if (   preg_match('/^(\..*)|(.*\.php)$/', $file)
		|| is_dir($file)
	   )
		continue;
		
	// Add file to array, keyed by mod time of the file
	$files[filemtime($file)] = $file;
}
closedir($rep);

// Sort the array in reverse order by key, which is mod time of the file
krsort($files);

// Emit the files, with dates
foreach ($files as $t => $f) {
	echo date("d-M-Y G:i", $t)." <a href=\"/downloads/$f\">$f</a><br />\n";
}
?>
		</p>
    </div>
  </div>

<?php
  print_footer();
?>
