  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/fr/includes/common.inc");
    /* include_once("$DOCUMENT_ROOT/fr/includes/functions.inc"); */
    print_header('Récupérer DarwinPorts', 'utf-8');
  ?>

    <div id="content">
      <h2 class="hdr">Récupérer DarwinPorts</h2>
	
	<p>Si vous souhaitez installer DarwinPorts, alors la première chose
	à faire est un "checkout" du CVS d'OpenDarwin.</p>
	
	<p>Avant de commencer, notez que pour l'installation et l'utilisation
	de DarwinPorts sur Mac OS X vous devez avoir installé les outils
	développeurs Mac OS X (pour 10.2.x) ou bien Xcode (pour 10.3.x).</p>
	
	<p>Si vous souhaitez utiliser DarwinPorts sur un système autre que Mac OS X,
	voici les dépendances nécessaires (un minimum de connaissance sur les outils
	de compilation comme gcc est requis) :
	<ul>
		<li>TCL (8.3 ou 8.4)</li>
		<li>curl</li>
		<li>OpenSSL ou libmd</li>
	</ul>
	</p>
	
	<p>Utilisez ensuite les commandes suivantes pour récupérer le projet
	depuis le CVS :</p>

      <pre>cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od login
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od co -P darwinports</pre>
	
	<p>Lorsque le serveur vous demande le mot de passe, appuyez simplement sur la touche
	<kbd>entrée</kbd> de votre clavier &mdash; vu qu'il n'y a pas de mot de passe.</p>
	
	<p>Si vous ne voulez pas utiliser CVS pour récupérer DarwinPorts, vous pouvez télécharger
	un <a href="http://darwinports.opendarwin.org/darwinports-nightly-cvs-snapshot.tar.gz">
	snapshot du CVS</a>. Une fois extrait, vous pourrez le maintenir à jour avec les commandes
	CVS habituelles.</p>
	
	<p>Pour simplement voir le contenu du CVS sans en récupérer les sources,
	utilisez pour cela le <a
	href="http://www.opendarwin.org/cgi-bin/cvsweb.cgi/proj/darwinports/">CVSweb</a>.</p>

      <h5 class="subhdr">Installation</h5>
	
	<p>Une fois le projet récupéré depuis le CVS, il vous faut encore configurer
	quelques petites choses avant que vous ne puissiez commencer à installer des ports.</p>

	<p>Pour les instructions d'installation, référez-vous au fichier <tt>README.fr</tt>
	qui se situe dans le répertoire que vous venez de récupérer via CVS. Un
	<a href="http://darwinports.opendarwin.org/docs/ch01s03.html">chapitre</a> du
	<a href="http://darwinports.opendarwin.org/docs/">guide DarwinPorts</a> traitant de
	l'installation et de l'utilisation de DarwinPorts est également disponible.</p>

	  <p>De l'<a href="/fr/help/">aide</a> est également disponible au besoin.</p>
    </div>
  </div>

<?php
  print_footer();
?>
