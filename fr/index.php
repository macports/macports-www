  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/fr/includes/common.inc");
    include_once("$DOCUMENT_ROOT/fr/includes/functions.inc");
    print_header('Accueil DarwinPorts', 'utf-8');
  ?>

    <div id="content">
      <h2 class="hdr">Introduction à DarwinPorts</h2>

	<p>Le principal objectif du projet DarwinPorts est de fournir un moyen
	simple pour l'installation de divers logiciels open-source sur des systèmes
	tel que Darwin, Mac OS X, FreeBSD ou Linux.</p>
	
	<p>Il n'y a actuellement qu'une centaine de <a href="/fr/ports/">ports</a>
	opérationnels et disponibles, mais d'autres seront bientôt ajoutés régulièrement.
	Vous pouvez prendre connaissance des ports récemment ajoutés en souscrivant
	à la liste de discussion <a
	href="http://www.opendarwin.org/mailman/listinfo/cvs-darwinports-all">cvs-darwinports-all</a>.</p>

	<p>Pour plus d'information sur l'obtention et l'installation de DarwinPorts,
	lisez s'il vous plaît la section <a href="/fr/getdp/">Récupérer DarwinPorts</a>
	de ce site. Assurez-vous au préalable d'avoir jeté un oeil sur la
	<a href="/docs/">documentation</a>; si vous avez des questions ou bien des problèmes
	liés à l'installation/utilisation, vous pouvez <a href="/fr/help/">demander de l'aide</a>.</p>

	  <p>Les rapports de bogues, demandes d'ajout de fonctionnalités et les
	nouveaux ports devront être soumis à <a href="http://www.opendarwin.org/bugzilla/">Bugzilla</a>.</p>

      <div id="news">
	<h2 class="hdr">Nouvelles concernant le project</h2>

	<?php
	  print_headlines();
	?>
      </div>
    </div>
  </div>

<?php
  print_footer();
?>
