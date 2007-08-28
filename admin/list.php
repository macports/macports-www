  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/macports/includes/common.inc");
    include_once("$DOCUMENT_ROOT/macports/includes/news.inc");
    print_header('MacPorts | List all news', 'utf-8');
    /* $Id$ */
  ?>

    <div id="content">
      <h2 class="hdr">List all news</h2>

      <?php
	print_all_headlines();
      ?>

      </div>
    </div>

<?php
  print_footer();
?>
