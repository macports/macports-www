  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/includes/common.inc");
    include_once("$DOCUMENT_ROOT/includes/functions.inc");
    print_header('DarwinPorts | Add news', 'iso-8859-1');
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
