  <?php
    $MPWEB = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']);
    include_once("$MPWEB/includes/common.inc");
    include_once("$MPWEB/includes/news.inc");
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
