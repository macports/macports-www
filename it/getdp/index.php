  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/it/includes/common.inc");
    /* include_once("$DOCUMENT_ROOT/includes/functions.inc"); */
    print_header('Ottenere DarwinPorts', 'utf-8');
  ?>

    <div id="content">
      <h2 class="hdr">Ottenere DarwinPorts</h2>

      <p>DarwinPorts 1.1 è disponibile in codice sorgente tramite i formati
	<a href="/downloads/DarwinPorts-1.1.tar.bz2">tar.bz2</a>
	e <a href="/downloads/DarwinPorts-1.1.tar.gz">tar.gz</a>. I
	checksums dei files sopra elencati sono contenuti in
	<a href="/downloads/DarwinPorts-1.0.chk.txt">questo file</a>.</p>

      <p>I binari di DarwinPorts 1.1 invece sono disponibili attraverso il
	formato <a href="/downloads/DarwinPorts-1.0.dmg">dmg</a> (Disk Image),
	contenente un installer pkg.</p>

      <p>Nella <a href="/downloads/">sezione downloads</a> puoi trovare la
	lista completa di tutti i files scaricabili.</p>

      <p>Ti ricordiamo che, qualora volessi installare ed eseguire DarwinPorts
	su Mac OS X, devi assicurarti prima di tutto di aver già installato i
	Mac OS X Developer Tools (per 10.2.x) o XCode (per 10.3.x e 10.4.x).</p>

      <p>Se invece vuoi utilizzare DarwinPorts su una piattaforma differente
	da Mac OS X, assicurati di risolvere le seguenti dipendenze:
	  <ul>
		<li>TCL (8.3 o 8.4)</li>
		<li>curl</li>
		<li>OpenSSL o libmd</li>
	  </ul>

      <h5 class="subhdr">Installazione da Package Installer (.pkg)</h5>

      <p>Il modo più semplice per installare DarwinPorts su piattaforma Mac OS
	X è scaricare e montare il file
	<a href="/downloads/DarwinPorts-1.1.dmg">dmg</a> e successivamente
	lanciare l'applicazione Installer.app contenuta nell'immagine, seguendo
	le istruzioni che appariranno sullo schermo. Al termine di questa
	procedura DarwinPorts sarà perfettamente installato nel sistema e
	pronto all'uso.</p>

      <p>Per utilizzare al meglio DarwinPorts dovrai modificare il file
	personale di configurazione della shell, in modo tale da poter lanciare
	i binari installati da qualunque directory. Ti invitiamo a leggere il
	file README.it comtenuto all'interno del file dmg per portare a termine
	questa piccola modifica.</p>

      <p>Anche se non strettamente necessario, è sempre buona regola
	sincronizzare la recente installazione con i server di OpenDarwin, così
	da essere certi di avere l'ultima versione disponibile, sia
	dell'infrastruttura DarwinPorts, sia di tutti i Portfiles, che
	contengono tutte le istruzioni necessarie per l'installazione dei
	ports. Per eseguire tale operazione basta eseguire:</p>

      <pre>sudo port -d selfupdate</pre>

      <p>È caldamente consigliato lanciare questo comando periodicamente
	in modo da mantenere l'infrastruttura sempre aggiornata. A questo
	punto dovresti essere pronto ad utilizzare DarwinPorts!</p>

      <h5 class="subhdr">Installazione da sorgenti</h5>

      <p>Anche l'installazione da sorgenti richiede pochi e piccoli passi.
	Una volta scaricato il tarball, da shell, posizionati nella directory
	contentente il pacchetto ed esegui
	“<kbd>tar xjvf <a href="/downloads/DarwinPorts-1.1.tar.bz2">
	DarwinPorts-1.1.tar.bz2</a></kbd>” se hai scelto il tarball bz2, oppure
	“<kbd>tar xzvf <a href="/downloads/DarwinPorts-1.1.tar.gz">
	DarwinPorts-1.1.tar.gz</a></kbd>” se invece hai scelto il tarball gz.
	Quest'ultimo comando estrarrà i sorgenti di DarwinPorts in una nuova
	subdirectory. Per compilare ed installare DarwinPorts basta eseguire i
	seguenti comandi:</p>

<pre>cd DarwinPorts-1.1
./configure && make && sudo make install</pre>

      <p>Comandi opzionali:</p>

<pre>cd ../
rm -rf DarwinPorts-1.1.*</pre>

      <p>Per effettuare l'installazione sono necessari i privilegi di
	amministratore, infatti “<kbd>sudo</kbd>” ti chiederà la password
	per completare il processo. Questa procedura installerà il sistema
	DarwinPorts e, eseguendo anche i comandi opzionali, rimuoverà tutti
	gli elementi non più necessari, ossia la directory DarwinPorts-1.1 ed
	il tarball corrispondente. Leggendo l'output di
	“<kbd>./configure --help | more</kbd>” puoi personalizzare
	l'installazione e passare le opzioni appropriate allo script di
	configurazione durante la procedura appena descritta.</p>
	
      <p>Dovrai inoltre modificare il file personale di configurazione della
	shell per trovare i binari installati da DarwinPorts. Infine, dovrai
	sincronizzare la tua recente installazione con i i server di
	OpenDarwin:</p>
	

<pre>sudo port -d selfupdate</pre>

      <p>Appena terminato il processo DarwinPorts sarà pronto ad installare i
	ports. Come già detto, è vivamente consigliato lanciare quest'ultimo
	comando periodicamente per tenere sempre aggiornata la propria
	installazione.</p>

      <p>Alternativamente puoi fare riferimento al file
	<tt>README_RELEASE1.it</tt> presente nel tarball di release 1.1 per
	tutto ciò che riguarda l'installazione base e le istruzioni all'uso.</p>

      <h5 class="subhdr">Aiuto</h5>
      <p>Siamo sempre disponibili ad offrirti <a href="/it/help/">aiuto</a>
	qualora ne avessi bisogno.</p>

      <h5 class="subhdr">Ottenere i sorgenti dal CVS</h5>
      <p>Se sei un developer o un utente esperto che vuole provare le
	ultimissime funzionalità introdotte, puoi acquisire i sorgenti tramite
	CVS.</p>

      <p>I seguenti comandi effettuano il checkout del progetto dal CVS
	repository di OpenDarwin:</p>

<pre>cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od login
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od co -P darwinports</pre>

      <p>Quando il server ti chiederà la password, premi semplicemente
	il tasto <kbd>return</kbd> della tastiera - la password è vuota.</p>

      <p>Se non vuoi prelevare i files dal CVS puoi procedere con il download
	di una
	<a href="http://darwinports.opendarwin.org/darwinports-nightly-cvs-snapshot.tar.gz">
	CVS-snapshot</a> (istantanea del CVS di questa notte). Una volta
	estratto il tutto puoi mantenerlo aggiornato tramite l'usuale
	comando “<kbd>cvs update</kbd>”.</p>

      <p>Se vuoi semplicemente visualizzare il repository CVS senza fare il
	checkout puoi utilizzare 
	<a href="http://www.opendarwin.org/cgi-bin/cvsweb.cgi/proj/darwinports/">
	CVSweb</a>.</p>

    </div>
  </div>

<?php
  print_footer();
?>
