  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/fr/includes/common.inc");
    /* include_once("$DOCUMENT_ROOT/fr/includes/functions.inc"); */
    print_header("Demander de l'aide", 'utf-8');
  ?>

    <div id="content">
		<h2 class="hdr">Demander de l'aide</h2>
	
	<p>Si vous êtes perdus, différents moyens pour trouver de l'aide s'offrent à vous.</p>

		<h5 class="subhdr">Documentation</h5>

	<p>Le <a href="http://www.darwinports.org/docs">Guide DarwinPorts</a> contient une 
	section dédiée pour les utilisateurs de DarwinPorts,
	<a href="http://www.darwinports.org/docs/pt01.html">Part 1: Using DarwinPorts</a>.</p>

	<p>La <a href="http://wiki.opendarwin.org/index.php/DarwinPorts:FAQ">FAQ</a> de DarwinPorts est maintenant 
	en ligne, grâce à l'effort procuré par les utilisateurs du <a href="http://wiki.opendarwin.org/index.php/
	DarwinPorts">Wiki</a>. Tout le monde ayant un compte Wiki et la connaissance nécessaire peut contribuer à 
	informer les autres utilisateurs.</p>

	<p>La documentation du projet évolue constament, donc si vous apercevez une erreur
	quelconque, ou bien si vous avez des questions à propos de celle-ci, informez-nous !
	Cela nous aidera grandement.</p>

		<h5 class="subhdr">Listes de discussions</h5>

	<p>La <a href="http://www.opendarwin.org/mailman/listinfo/darwinports">liste de discussion
	darwinports</a> est accessible à toutes et à tous; c'est dans celle-ci que la plupart
	des discussions sur l'évolution du projet se passent. C'est également l'endroit
	idéal pour poser vos questions. Concernant cette liste, veuillez noter qu'à cause 
	du spam les messages envoyés par des personnes non abonnées à cette liste devront être 
	approuvés avant d'être diffusés. Pour éviter cela, il est préférable de s'abonner à la 
	liste.</p>

	<p>Avant de poser votre question vous pouvez vérifier dans les 
	<a href="http://www.opendarwin.org/pipermail/darwinports/">archives de la liste</a> 
	si une solution n'a pas déjà été proposée; bien que cela ne soit pas obligatoire, cela 
	peut vous aider à trouver plus rapidement une solution à votre problème. Nous essayons 
	d'aider du mieux que nous pouvons mais si la question a déjà été posée, nos réponses 
	peuvent être très succinctes.</p>

	<p>Sinon le site <a href="http://gmane.org/">Gmane.org</a> permet de naviguer très aisément 
	dans les archives et permet d'y accéder via le protocole <a href="nntp://news.gmane.org/">
	NNTP</a>.</p>

	<p>Lorsque vous posez une question dans la liste de discussions, incluez toute information 
	qui pourrait aider à trouver une solution, comme le système utilisé, ainsi que sa version 
	(Mac OS X 10.3.2 par exemple), l'existence de logiciels tierce partie installés (dans 
	/usr/local par exemple) et tout message d'erreurs de DarwinPorts (utilisez les options -d 
	et -v de port(1) pour afficher les informations de déboguage). Il est plus facile de vous 
	aider une fois ces options utilisées.</p>

      <h5 class="subhdr">IRC</h5>
	
	<p>Pour les discussions en temps réel, le canal #darwinports sur le
	réseau IRC <a href="http://freenode.net/">Freenode</a> est généralement
	utilisé.</p>

	<p>Bien que dans ce canal vous y trouverez certainement l'aide recherchée, gardez s'il 
	vous plaît à l'esprit que les personnes y étant ne sont pas obligées de vous aider, n'y
	de répondre à vos questions. N'en faites pas une histoire personnelle, posez alors
	votre question dans la <a href="http://www.opendarwin.org/mailman/listinfo/darwinports">
	liste de discussions</a>.</p>

    </div>
  </div>

<?php
  print_footer();
?>
