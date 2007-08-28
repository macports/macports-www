  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/fr/includes/common.inc");
    include_once("$DOCUMENT_ROOT/fr/includes/functions.inc");
    print_header('Distributions de DarwinPorts', 'utf-8');
  ?>

    <div id="content">
	
		<h2 class="hdr">Téléchargements disponibles</h2>
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
