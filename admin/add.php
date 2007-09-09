  <?php
    $MPWEB = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']);
    include_once("$MPWEB/includes/common.inc");
    include_once("$MPWEB/includes/news.inc");
    print_header('MacPorts | Add news', 'utf-8');
    /* $Id$ */
  ?>

    <div id="content">
      <h2 class="hdr">Add news</h2>

      <?php
	print_add_headline();
      ?>

      </div>
    </div>

<?php
  print_footer();
?>
