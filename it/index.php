  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/it/includes/common.inc");
    include_once("$DOCUMENT_ROOT/it/includes/functions.inc");
    print_header('Home di DarwinPorts', 'iso-8859-1');
  ?>

    <div id="content">
      <h2 class="hdr">Introduzione a DarwinPorts</h2>

      <p>L'obiettivo principale del progetto DarwinPorts e&grave; di fornire
	un metodo semplice per l'installazione di vario software open-source
	su sistemi Darwin, Mac OS X, FreeBSD o Linux.</p>

      <p>Attualmente ci sono poche centinaia di <a href="/it/ports/">ports</a>
	disponibili, ma regolarmente ne vengono aggiunti altri. Puoi tenere 
	traccia dei ports recentemente aggiunti iscrivendoti alla lista di 
	discussione <a href="http://www.opendarwin.org/mailman/listinfo/cvs-darwinports-all">
	cvs-darwinports-all</a>.</p>
	
      <p>Maggiori informazioni su come ottenere e su come installare 
	DarwinPorts sono disponibili nella sezione <a href="/it/getdp/">Ottenere 
	DarwinPorts</a> di questo sito. Inoltre ti raccomandiamo di consultare
	la <a href="/docs/">documentazione</a> disponibile e se hai domande o 
	incorri in un problema puoi sempre <a href="/it/help/">richiedere aiuto</a>.</p>

      <p>Segnalazioni di bug, richieste di nuove funzionalita&grave; e di nuovi 
	ports devono essere inviate tramite <a href="http://www.opendarwin.org/bugzilla/">
	Bugzilla</a>.</p>

      <div id="news">
	<h2 class="hdr">Notizie del progetto</h2>

	<?php
	  print_headlines();
	?>

		<p>Puoi anche visualizzare l'<a href="archives.php">archivio delle notizie</a>.</p>
	
      </div>
    </div>
  </div>

<?php
  print_footer();
?>
