  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/includes/common.inc");
    include_once("$DOCUMENT_ROOT/includes/functions.inc");
    print_header('DarwinPorts Site Administration', 'iso-8859-1');
  ?>

    <div id="content">
      <h2 class="hdr">Site Administration</h2>

      <p>Use the links below to manage the headlines on the front page of
	the site:</p>

      <ul>
	<li><a href="/admin/headlines/add.php">Add headline</a></li>
	<li><a href="/admin/headlines/list.php">List all headlines</a></li>
	<li><a href="/admin/headlines/rss.php">Regenerate RSS feed</a></li>
      </ul>

      <p>If you need to edit an already-posted headline, find it in the <a
	href="/admin/headlines/list.php">list</a>, and choose edit.</p>
    </div>
  </div>

<?php
  print_footer();
?>
