  <?php
    /* $Id$ */
    $MPWEB = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']);
    include_once("$MPWEB/includes/common.inc");
    include_once("$MPWEB/includes/news.inc");
    print_header('MacPorts -- News Archive', 'utf-8');
  ?>

    <div id="content">
		<h2 class="hdr">News Archive</h2>
     <?php
		if (isset($_GET['id'])) {
			print_headline();
		} else {
			print_all_headlines_nonadmin();
		}
      ?>


    </div>
<?php
  print_footer();
?>
