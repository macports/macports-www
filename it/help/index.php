  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/it/includes/common.inc");
    /* include_once("$DOCUMENT_ROOT/includes/functions.inc"); */
    print_header('Richiedere Aiuto', 'utf-8');
  ?>

  <div id="content">

	<h2 class="hdr">Richiedere Aiuto</h2>

	<p>Per risolvere gli eventuali problemi che potresti incontrare
	durante l'utilizzo di DarwinPorts ti abbiamo messo a disposizione
	diverse risorse.</p>
	
	<h5 class="subhdr">Documentazione</h5>

	<p>Nella <a href="http://www.darwinports.org/docs">Guida a
	DarwinPorts</a> è presente un'intera sezione per l'utente:
	<a href="http://www.darwinports.org/docs/pt01.html">
	Parte 1: Utilizzo di DarwinPorts</a>.</p>

	<p>Le <a href="http://wiki.opendarwin.org/index.php/DarwinPorts:FAQ">
	DarwinPorts FAQ</a> sono tornate online e sono in continuo sviluppo,
	infatti ora sono parte integrante del nostro
	<a href="http://wiki.opendarwin.org/index.php/DarwinPorts">Wiki</a>,
	dove chiunque può registrarsi liberamente e contribuire alla stesura
	di articoli.</p>

	<p>Tutta la nostra documentazione è in continua evoluzione, di
	conseguenza se leggendo trovi un errore o hai dei dubbi circa alcune
	parti di un documento, ti preghiamo di farcelo sapere. Anche le più
	piccole segnalazioni ci saranno sicuramente utili.</p>

	<h5 class="subhdr">Mailing Lists</h5>

	<p>La mailing list (lista di discussione)
	<a href="http://www.opendarwin.org/mailman/listinfo/darwinports">
	darwinports</a> è aperta a tutti. È il miglior luogo per ricevere
	supporto e porre domande su DarwinPorts per tutti, sia per i nuovi
	utenti, sia per gli sviluppatori. È anche il posto dove si discute
	dell'evoluzione del progetto. A causa dello spam, se vuoi inviare un
	messaggio, ti preghiamo gentilmente di iscriverti alla lista.</p>

	<p>Prima di inviare una richiesta ti consigliamo di consultare l'
	<a href="http://www.opendarwin.org/pipermail/darwinports/">
	archivio della mailing list</a>, anche se ciò non è necessariamente
	un dovere. Cercheremo il più possibile di aiutarti, ma se le domande
	sono comuni le nostre risposte potrebbero essere abbastanza brevi.</p>

	<p>Ad ogni modo gli archivi della mailing list sono facilmente
	accessibili tramite <a href="http://gmane.org/">Gmane.org</a> e anche
	attraverso <a href="nntp://news.gmane.org/">NNTP</a>.</p>

	<p>Quando invii un messaggio alla mailing list ti invitiamo ad
	includere ogni informazione che pensi potrebbe essere rilevante ai fini
	risolutivi del problema, come quale sistema operativo stai usando
	(OS X 10.3.2, per esempio), se hai installato altro software di terze
	parti nella directory /usr/local e qualsiasi messaggio di errore hai
	ricevuto da DarwinPorts (specificando le flag -d e -v al comando
	port(1) attiverai le informazioni per il debugging). Ricordati che più
	informazioni darai e più sarà semplice per noi aiutarti.</p>

	<h5 class="subhdr">IRC</h5>

	<p>Generalmente per le discussioni in tempo reale siamo in ascolto sul
	canale #darwinports della <a href="http://freenode.net/">rete IRC
	freenode</a>.</p>
	
	<p>Anche se puoi richiedere aiuto, ricorda sempre che nessuno è
	obbligato a risponderti. Quindi, nel caso non ricevessi risposta, non
	c'è niente di personale; potrai semplicemente porre le tue domande
	scrivendo alla mailing list
	<a href="http://www.opendarwin.org/mailman/listinfo/darwinports">
	darwinports</a>.</p>

	</div>
</div>

<?php
  print_footer();
?>