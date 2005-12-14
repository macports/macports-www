  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/fr/includes/common.inc");
    include_once("$DOCUMENT_ROOT/fr/includes/functions.inc");
    include_once("$DOCUMENT_ROOT/includes/db.inc");
    print_header('Accueil DarwinPorts', 'utf-8');
  ?>

    <div id="content">
      <h2 class="hdr">Introduction à DarwinPorts</h2>
<?
                $result = mysql_query("SELECT count(*) from darwinports.portfiles");
                if ($result) {
                        $row = mysql_fetch_array($result);
                        $count = $row[0];
                } else {
                        $count = 0;
                }
?>
	<p>
	Le principal objectif du projet DarwinPorts est de fournir un moyen
	simple pour l'installation de divers logiciels open-source sur les systèmes
	basés sur <a href="http://developer.apple.com/darwin/projects/darwin/">Darwin</a>
	(<a href="http://www.apple.com/fr/macosx/">Mac OS X</a>, <a href="http://opendarwin
	.org/fr/">OpenDarwin</a>).
	</p>
	
	<p>
	Il y a actuellement <?= $count; ?> <a href="/fr/ports/">ports</a> opérationnels
	et disponibles, mais d'autres seront bientôt ajoutés régulièrement. Vous pouvez
	prendre connaissance des ports récemment ajoutés en souscrivant à la liste de
	discussion <a href="http://www.opendarwin.org/mailman/listinfo/cvs-darwinports-all">
	cvs-darwinports-all</a>.
	</p>

	<p>
	Pour plus d'information sur l'obtention et l'installation de DarwinPorts,
	lisez s'il vous plaît la section <a href="/fr/getdp/">Obtenir DarwinPorts</a>
	de ce site. Assurez-vous au préalable d'avoir consulté la <a href="/docs/">
	documentation</a>; si vous avez des questions ou bien des problèmes	liés à
	l'installation/utilisation, vous pouvez <a href="/fr/help/">demander de l'aide</a>.
	Le <a href="http://wiki.opendarwin.org/index.php/DarwinPorts">wiki de DarwinPorts</a> 
	est généralement d'une bonne aide ainsi que la <a href="http://wiki.opendarwin.org/index.php/
	DarwinPorts:FAQ">FAQ</a>.
	</p>

    <p>
	Le signalement d'un bug, les suggestions et les nouveaux ports devront être
	soumis à <a href="http://www.opendarwin.org/bugzilla/">Bugzilla</a>. Avant toute
	chose, consultez cette <a href="/docs/ch01s05.html#user_bugs">documentation</a>
	pour vous aider à rédiger au mieux votre requête.
	</p>

      <div id="news">
	<h2 class="hdr">Nouvelles concernant le projet</h2>

	<?php
	  print_headlines();
	?>
    <p>Vous pouvez également lire les <a href="archives.php">archives</a>.</p>
      </div>
    </div>
  </div>

<?php
  print_footer();
?>
