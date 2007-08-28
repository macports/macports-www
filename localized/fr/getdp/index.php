  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/fr/includes/common.inc");
    /* include_once("$DOCUMENT_ROOT/fr/includes/functions.inc"); */
    print_header('Obtenir DarwinPorts', 'utf-8');
  ?>

    <div id="content">
      <h2 class="hdr">Obtenir DarwinPorts</h2>

	<p>La version <? print "$dp_version"; ?> de DarwinPorts est disponible sous forme d'image disque pour
	<a href="/downloads/DarwinPorts-<? print "$dp_version"; ?>-10.4.dmg">Mac OS X 10.4 (PowerPC)</a> ou pour
	<a href="/downloads/DarwinPorts-<? print "$dp_version"; ?>-10.3.dmg">Mac OS X 10.3</a> contenant un installateur (.pkg)
	ou sous forme d'archive	<a href="/downloads/DarwinPorts-<? print "$dp_version"; ?>.tar.bz2">tar.bz2</a> ou
	<a href="/downloads/DarwinPorts-<? print "$dp_version"; ?>.tar.gz">tar.gz</a>. Les sommes de contrôle pour ces fichiers
	sont disponibles <a href="/downloads/DarwinPorts-<? print "$dp_version"; ?>.chk.txt">ici</a>.</p>

	<p>Pour voir la liste de tous les fichiers disponibles, regardez la 
	<a href="/fr/downloads/">liste</a> des téléchargements.</p>

	<p>Veuillez noter que pour installer et utiliser DarwinPorts sur Mac OS X, vous devez avoir 
	installé Xcode, dont vous pouvez vous procurez une copie sur le <a href="http://developer.apple.com/">
	site d'Apple</a> ou sur vos disques d'installation de Mac OS X.</p>

	<p>Si vous souhaitez utiliser DarwinPorts sur un système autre que Mac OS X,
	voici les dépendances nécessaires (un minimum de connaissance sur les outils
	de compilation comme gcc est requis) :
	<ul>
		<li>TCL (8.3 ou 8.4)</li>
		<li>curl</li>
		<li>OpenSSL ou libmd</li>
	</ul>
	</p>

	<h5 class="subhdr">L'installateur pour Mac OS X (.pkg)</h5>

	<p>Le moyen le plus simple pour installer DarwinPorts sur Mac OS X est de télécharger une image disque pour
	<a href="/downloads/DarwinPorts-<? print "$dp_version"; ?>-10.4.dmg">Mac OS X 10.4</a> ou
	<a href="/downloads/DarwinPorts-<? print "$dp_version"; ?>-10.3.dmg">Mac OS X 10.3</a> et
	de lancer "Installer.app" en double-cliquant sur le paquet (.pkg) et de suivre les instructions jusqu'à ce que 
	l'installation soit terminée. Cette procédure installera une copie entièrement fonctionnelle 
	de DarwinPorts sur votre système, immédiatement utilisable. Si besoin est, les fichiers de configuration
	de votre shell seront modifiés par l'installateur pour permettre l'utilisation de DarwinPorts.
	Après installation, ces changements seront valides pour les shells nouvellement ouverts.</p>

	<p>Bien que facultatif, il est recommandé de synchroniser votre toute nouvelle installation 
	avec les serveurs d'OpenDarwin afin de s'assurer d'avoir DarwinPorts bien à jour ainsi que 
	les Portfiles contenant les instructions nécessaires à l'installation des ports. Pour cette 
	opération, exécutez ces commandes :</p>

	<pre>sudo port -d selfupdate</pre>

	<p>Il est également recommandé d'exécuter régulièrement la commande précédente afin de 
	s'assurer d'être bien à jour. À présent vous devriez être prêt pour utiliser DarwinPorts !</p>

	<h5 class="subhdr">Installation depuis les sources</h5>
	
	<p>Si pour une raison ou une autre vous souhaitez installer DarwinPorts grâce aux sources, 
	toutefois avant de pouvoir installer un port avec DarwinPorts il y a quelques points que vous 
	devrez accomplir une fois les sources téléchargées. "<kbd>cd</kbd>" dans le répertoire où les sources 
	ont été téléchargées puis décompressez-les avec "<kbd>tar xjvf <a href="/downloads/DarwinPorts-<? print "$dp_version"; ?>.tar.bz2">
	DarwinPorts-<? print "$dp_version"; ?>.tar.bz2</a></kbd>" ou "<kbd>tar xzvf <a href="/downloads/DarwinPorts-<? print "$dp_version"; ?>.tar.gz">DarwinPorts
	-<? print "$dp_version"; ?>.tar.gz</a></kbd>" suivant le format de l'archive que vous avez choisi. 
	Une fois les sources décompressées, exécutez les commandes suivantes :</p>

      <pre>cd DarwinPorts-<? print "$dp_version"; ?> 
./configure && make && sudo make install</pre>

	<p>Puis optionnellement :</p>

	<pre>cd ../
rm -rf DarwinPorts-<? print "$dp_version"; ?>.*</pre>
	
	<p>Ces commandes doivent être exécutées par un administrateur, dont "<kbd>sudo</kbd>" demandera son 
	mot de passe pour l'installation. Cette procédure installera DarwinPorts, ainsi les sources et le 
	répertoire DarwinPorts-<? print "$dp_version"; ?> pourront être effacés. Pour personnaliser votre installation vous devrez 
	consulter le résultat de la commande "<kbd>./configure --help | more</kbd>" puis utiliser les 
	options appropriées.</p>

	<p>Vous devrez adapter vos fichiers de configuration du shell pour trouver les binaires installés par 
	DarwinPorts. Puis finalement synchroniser votre installation avec les serveurs d'OpenDarwin :

	<pre>sudo port -d selfupdate</pre>

	<p>Une fois l'installation terminée, DarwinPorts est prêt à être utilisé. Il est également 
	recommandé d'exécuter régulièrement la commande précédente afin de s'assurer d'être bien à jour.</p>

	<p>De plus, vous pouvez lire le fichier <tt>README_RELEASE1.fr</tt> disponible dans l'archive de 
	la version <? print "$dp_version"; ?> concernant une installation basique et des instructions d'utilisation.</p>

	<h5 class="subhdr">Aide</h5>

	<p>De l'<a href="/fr/help/">aide</a> est également disponible au besoin.</p>

	<h5 class="subhdr">Sources CVS</h5>

	<p>Si vous êtes un développeur ou un utilisateur désireux de goûter aux joies des versions de développement 
	et souhaiter obtenir les dernières fonctions, vous pouvez récupérer les sources de DarwinPorts via CVS.</p>

	<p>Utilisez les commandes suivantes pour récupérer le projet depuis le dépôt CVS d'OpenDarwin :</p>

      <pre>cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od login
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od co -P darwinports</pre>

	<p>Lorsque le serveur vous demande un mot de passe, tapez seulement sur la touche <kbd>entrée</kbd> car 
	il n'y a pas de mot de passe.</p>

	<p>Si vous ne voulez pas télécharger les sources depuis le CVS, vous pouvez télécharger une 
	<a href="/downloads/darwinports-nightly-cvs-snapshot.tar.gz">archive</a> 
	créée quotidiennement. Une fois décompressée, vous pouvez maintenir cette installation avec les 
	commandes "<kbd>cvs update</kbd>" usuelles.</p>

	<p>Si vous souhaitez juste voir le dépôt CVS sans nécessairement le récupérer, vous pouvez regarder le 
	<a href="http://www.opendarwin.org/cgi-bin/cvsweb.cgi/proj/darwinports/">CVSweb</a>.</p>

    </div>
  </div>

<?php
  print_footer();
?>
