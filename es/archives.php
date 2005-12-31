  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/es/includes/common.inc");
    include_once("$DOCUMENT_ROOT/es/includes/functions.inc");
    print_header('Archivo de Noticias de DarwinPorts', 'utf-8');
  ?>

    <div id="content">
	
		<h2 class="hdr">Archivo de Noticias</h2>
     <?php
		if (isset($_GET['id'])) {
			print_headline();
		} else {
			print_all_headlines_nonadmin();
		}
      ?>


      </div>
    </div>
  </div>

<?php
  print_footer();
?>
