  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/includes/common.inc");
    include_once("$DOCUMENT_ROOT/includes/functions.inc");
    print_header('Accueil DarwinPorts', 'iso-8859-1');
  ?>

    <div id="content">
      <h2 class="hdr">Introduction &agrave; DarwinPorts</h2>

	<p>Le principal objectif du projet DarwinPorts est de fournir un moyen
	simple pour l'installation de divers logiciels open-source sur des syst&egrave;mes
	tel que Darwin, Mac OS X, FreeBSD ou Linux.</p>
	
	<p>Il n'y a actuellement qu'une centaine de <a href="/fr/ports/">ports</a>
	op&eacute;rationnels et disponibles, mais d'autres seront bient&ocirc;t ajout&eacute;s r&eacute;guli&egrave;rement.
	Vous pouvez prendre connaissance des ports r&eacute;cemment ajout&eacute;s en souscrivant
	&agrave; la liste de discussion <a
	href="http://www.opendarwin.org/mailman/listinfo/cvs-darwinports-all">cvs-darwinports-all</a>
	ou en utilisant notre <a href="/dp_commits.xml">feed RSS sur les commits r&eacute;cents</a>.</p>

	<p>Pour plus d'information sur l'obtention et l'installation de DarwinPorts,
	lisez s'il vous pla&icirc;t la section <a href="/fr/getdp/">R&eacute;cup&eacute;rer DarwinPorts</a>
	de ce site. Assurez-vous au pr&eacute;alable d'avoir jet&eacute; un oeil sur la
	<a href="/docs/">documentation</a>; si vous avez des questions ou bien des probl&egrave;mes
	li&eacute;s &agrave; l'installation/utilisation, vous pouvez vous <a
	href="/help/">demander de l'aide</a>.</p>

	  <p>Les rapports de bogues, demandes d'ajout de fonctionnalit&eacute;s et les
	nouveaux ports devront &ecirc;tre soumis &agrave; <a href="http://www.opendarwin.org/bugzilla/">Bugzilla</a>.</p>

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
