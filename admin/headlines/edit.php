  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/includes/common.inc");
    include_once("$DOCUMENT_ROOT/includes/functions.inc");
    print_header('DarwinPorts | Edit news', 'iso-8859-1');
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
