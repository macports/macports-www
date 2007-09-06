  <?php
    /* $Id$ */
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/macports/includes/common.inc");
    include_once("$DOCUMENT_ROOT/macports/includes/news.inc");
    print_header('MacPorts -- News Archive', 'utf-8');
  ?>

		<h2 class="hdr">News Archive</h2>
     <?php
		if (isset($_GET['id'])) {
			print_headline();
		} else {
			print_all_headlines_nonadmin();
		}
      ?>



<?php
  print_footer();
?>
