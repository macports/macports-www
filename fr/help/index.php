  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/fr/includes/common.inc");
    /* include_once("$DOCUMENT_ROOT/fr/includes/functions.inc"); */
    print_header("Demander de l'aide", 'iso-8859-1');
  ?>

    <div id="content">
      <h2 class="hdr">Demander de l'aide</h2>
	
	<p>Si vous &ecirc;tes perdus, diff&eacute;rents moyens pour trouver de l'aide
	s'offrent &agrave; vous.</p>

      <h5 class="subhdr">Listes de discussions</h5>

	<p>La <a href="http://www.opendarwin.org/mailman/listinfo/darwinports">liste de discussion
	darwinports</a> est accessible &agrave; toutes et &agrave; tous; c'est dans celle-ci que la plupart
	des discussions sur l'&eacute;volution du projet se passent. C'est &eacute;galement l'endroit
	id&eacute;al pour poser vos questions.</p>
	
	<p>Ceux ou celles qui sont int&eacute;ress&eacute;s aux commits effectu&eacute;s au CVS peuvent
	souscrire &agrave; la liste <a href="http://www.opendarwin.org/mailman/listinfo/cvs-darwinports-all">cvs-darwinports-all</a>.</p>

      <h5 class="subhdr">IRC</h5>
	
	<p>Pour les discussions en temps r&eacute;el, le canal #opendarwin sur le
	r&eacute;seau IRC <a href="http://freenode.net/">Freenode</a> est g&eacute;n&eacute;ralement
	utilis&eacute;.</p>

	<p>Bien que dans ce canal vous y trouverez l'aide recherch&eacute;e, gardez s'il vous
	pla&icirc;t &agrave; l'esprit que les personnes y &eacute;tant ne sont pas oblig&eacute;es de vous aider, n'y
	de r&eacute;pondre &agrave; vos questions. N'en faites pas une histoire personnelle, posez alors
	votre question dans la <a href="http://www.opendarwin.org/mailman/listinfo/darwinports">
	liste de discussions darwinports</a>.</p>

    </div>
  </div>

<?php
  print_footer();
?>
