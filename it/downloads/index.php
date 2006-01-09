  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/it/includes/common.inc");
    include_once("$DOCUMENT_ROOT/it/includes/functions.inc");
    print_header('Distribuzioni di DarwinPorts', 'utf-8');
  ?>

    <div id="content">
	
		<h2 class="hdr">Downloads disponibili</h2>
		<p>
<?php
$chemin="$DOCUMENT_ROOT/downloads";
$rep=opendir($chemin);
chdir($chemin);
while($file = readdir($rep)) {
	if($file != '..' && $file !='.' && (!eregi('php$', $file))) {
		if(!is_dir($file)) {
			echo "<a href=\"/downloads/$file\">$file</a>";
			echo "<br>";
		}
	}
}
closedir($rep);
?>
		</p>
    </div>
  </div>

<?php
  print_footer();
?>
