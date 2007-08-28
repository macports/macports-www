  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/macports/includes/common.inc");
    include_once("$DOCUMENT_ROOT/macports/includes/news.inc");
    print_header('MacPorts | Edit news', 'utf-8');
    /* $Id$ */
  ?>

    <div id="content">
      <h2 class="hdr">Edit news</h2>

      <?php
	print_edit_headline($_GET['id']);
      ?>

      </div>
    </div>

<?php
  print_footer();
?>
