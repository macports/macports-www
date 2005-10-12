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
$dossier = opendir ("./");

while ($fichier = readdir ($dossier)) {
	if ($fichier != "." && $fichier != "..") {
			$tableau = explode (".", $fichier);
			$nb_element_1 = count ($tableau) -1;
			if ($tableau[$nb_element_1] != "php") {
				echo '<a href="./download.php?file='.$fichier.'">'.$fichier.'</a><br />';
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
