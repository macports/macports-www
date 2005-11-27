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
$dossier = opendir ("$DOCUMENT_ROOT/downloads");

while ($fichier = readdir ($dossier)) {
	if (!is_dir('./'.$fichier)) {
			$tableau = explode (".", $fichier);
			$nb_element_1 = count ($tableau) -1;
			if ($tableau[$nb_element_1] != "php") {
				echo '<a href="/downloads/'.$fichier.'">'.$fichier.'</a><br />';
			}
		}
}
closedir ($dossier);
?>
		</p>
    </div>
  </div>

<?php
  print_footer();
?>
