  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/it/includes/common.inc");
    /* include_once("$DOCUMENT_ROOT/includes/functions.inc"); */
    print_header('Ottenere DarwinPorts', 'iso-8859-1');
  ?>

    <div id="content">
      <h2 class="hdr">Ottenere DarwinPorts</h2>

      <p>Se vuoi installare DarwinPorts per prima cosa devi effettuare un 
	&ldquo;checkout&rdquo; del deposito CVS (in gergo repository CVS).</p>

      <p>Nel caso in cui vuoi installare ed eseguire DarwinPorts su Mac OS X 
	prima di tutto assicurati di aver gia&grave; installato i Mac OS X 
	Developer Tools (per 10.2.x) o XCode (per 10.3.x).</p>

	  <p>Se invece vuoi utilizzare DarwinPorts su una piattaforma differente 
	  da Mac OS X, assicurati di risolvere le seguenti dipendenze (un minimo 
	  di conoscenza delle utility per la compilazione come gcc e&grave; 
	  necessaria):
	  <ul>
	  	<li>TCL (8.3 o 8.4)</li>
		<li>curl</li>
		<li>OpenSSL o libmd</li>
	  </ul>

      <p>Esegui i seguenti comandi per prelevare i files e i sorgenti del 
	progetto dal deposito CVS:</p>

      <pre>cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od login
	cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od co -P darwinports</pre>

      <p>Quando il server ti chiedera&grave; una password premi semplicemente 
	il tasto <kbd>return</kbd> della tua tastiera &mdash; la password 
	e&grave; vuota.</p>

	  <p>Se non vuoi prelevare i files dal CVS puoi effettuare il download 
	  di una <a href="http://darwinports.opendarwin.org/darwinports-nightly-cvs-snapshot.tar.gz">
	  CVS-snapshot</a> (istantanea del CVS di questa notte). Una volta 
	  estratto il contenuto puoi mantenerlo aggiornato tramite gli usuali 
	  comandi CVS.</p>

      <p>Se vuoi semplicemente visualizzare i contenuti del deposito CVS puoi 
	farlo tramite <a href="http://www.opendarwin.org/cgi-bin/cvsweb.cgi/proj/darwinports/">
	CVSweb</a>.</p>

      <h5 class="subhdr">Installazione</h5>

      <p>Una volta che hai prelevato il progetto dal CVS ci sono solamente pochi 
	passi da compiere prima di poter installare un port.</p>
	
      <p>Per le istruzioni di installazione puoi fare riferimento al file 
	<tt>README.it</tt> presente nella directory principale recuperata 
	tramite CVS. C'e&grave; anche un <a href="http://darwinports.opendarwin.org/docs/ch01s03.html">
	capitolo</a> nella <a href="http://darwinports.opendarwin.org/docs/">
	Guida a DarwinPorts</a> (attualmente in inglese) che illustra 
	piu&grave; in dettaglio come installare e come utilizzare DarwinPorts.</p> 

      <p>Siamo sempre disponibili a darti un <a href="/it/help/">aiuto</a> qualora
	ne avessi bisogno.</p>
    </div>
  </div>

<?php
  print_footer();
?>
