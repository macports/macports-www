  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/fr/includes/common.inc");
    /* include_once("$DOCUMENT_ROOT/fr/includes/functions.inc"); */
    print_header("Demander de l'aide", 'utf-8');
  ?>

    <div id="content">
      <h2 class="hdr">Demander de l'aide</h2>
	
	<p>Si vous êtes perdus, différents moyens pour trouver de l'aide
	s'offrent à vous.</p>

		<h5 class="subhdr">Documentation</h5>

		<p>Le <a href="http://darwinports.opendarwin.org/docs">Guide DarwinPorts</a> contient
		une section dédiée pour les utilisateurs de DarwinPorts,
		<a href="http://darwinports.opendarwin.org/docs/pt01.html">Part 1: Using DarwinPorts</a>.</p>

		<p>La FAQ de DarwinPorts bientôt disponible.</p>

	<p>La documentation du projet évolue constament, donc si vous apercevez une erreur
	quelconque, ou bien si vous avez des questions à propos de celle-ci, informez-nous !
	Cela nous aidera grandement.</p>

      <h5 class="subhdr">Listes de discussions</h5>

	<p>La <a href="http://www.opendarwin.org/mailman/listinfo/darwinports">liste de discussion
	darwinports</a> est accessible à toutes et à tous; c'est dans celle-ci que la plupart
	des discussions sur l'évolution du projet se passent. C'est également l'endroit
	idéal pour poser vos questions.</p>
	
	<p>Ceux ou celles qui sont intéressés aux commits effectués au CVS peuvent
	souscrire à la liste <a href="http://www.opendarwin.org/mailman/listinfo/cvs-darwinports-all">cvs-darwinports-all</a>.</p>

      <h5 class="subhdr">IRC</h5>
	
	<p>Pour les discussions en temps réel, le canal #opendarwin sur le
	réseau IRC <a href="http://freenode.net/">Freenode</a> est généralement
	utilisé.</p>

	<p>Bien que dans ce canal vous y trouverez l'aide recherchée, gardez s'il vous
	plaît à l'esprit que les personnes y étant ne sont pas obligées de vous aider, n'y
	de répondre à vos questions. N'en faites pas une histoire personnelle, posez alors
	votre question dans la <a href="http://www.opendarwin.org/mailman/listinfo/darwinports">
	liste de discussions darwinports</a>.</p>

    </div>
  </div>

<?php
  print_footer();
?>
