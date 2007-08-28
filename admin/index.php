  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/macports/includes/common.inc");
    print_header('MacPorts Site Administration', 'utf-8');
    /* $Id$ */
  ?>

    <div id="content">
      <h2 class="hdr">Site Administration</h2>

      <p>Use the links below to manage the headlines on the front page of
	the site:</p>

      <ul>
	<li><a href="/macports/admin/add.php">Add headline</a></li>
	<li><a href="/macports/admin/list.php">List all headlines</a></li>
	<li><a href="/macports/admin/rss.php">Regenerate RSS feed</a></li>
      </ul>

      <p>If you need to edit an already-posted headline, find it in the <a
	href="/macports/admin/list.php">list</a>, and choose edit.</p>
    </div>
  </div>

<?php
  print_footer();
?>
