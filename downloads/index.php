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
$chemin=".";
$rep=opendir($chemin);
chdir($chemin);
while ($file = readdir($rep)) {
	if($file != '..' && $file !='.' && $file !='index.php'){
		if (!is_dir($file)){
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
