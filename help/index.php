  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/includes/common.inc");
    /* include_once("$DOCUMENT_ROOT/includes/functions.inc"); */
    print_header('Get Help', 'iso-8859-1');
  ?>

    <div id="content">
      <h2 class="hdr">Get Help</h2>

      <p>If you get stuck, there are a few different ways you can find
	help.</p>

      <h5 class="subhdr">Mailing Lists</h5>

      <p>The <a href="http://www.opendarwin.org/mailman/listinfo/darwinports">darwinports
	mailing list</a> is open to all and is where most architectural and
	feature discussions are held.  It is also the place to ask questions
	if you have any.</p>

      <p>Those interested in seeing the commits to the CVS repository can
	also subscribe to the <a href="http://www.opendarwin.org/mailman/listinfo/cvs-darwinports-all">cvs-darwinports-all</a>
	mailing list.</p>

      <h5 class="subhdr">IRC</h5>

      <p>For more real-time discussion, the #opendarwin channel on the <a
	href="http://freenode.net/">freenode IRC network</a> is generally
	where we hang out.</p>
	
      <p>Though it is generally helpful, please keep in mind that no one is
	obligated to help or even answer your question if you join the IRC
	channel.  Do not take it personally, simply ask your question
	on the <a href="http://www.opendarwin.org/mailman/listinfo/darwinports">darwinports
	mailing list</a> instead.</p>

    </div>
  </div>

<?php
  print_footer();
?>
