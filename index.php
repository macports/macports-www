  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/includes/common.inc");
    include_once("$DOCUMENT_ROOT/includes/functions.inc");
    print_header('DarwinPorts Home', 'iso-8859-1');
  ?>

    <div id="content">
      <h2 class="hdr">Introduction to DarwinPorts</h2>

      <p>The DarwinPorts Project's main goal is to provide an easy way to
	install various open-source software products on the Darwin OS 
	family (<a href="http://www.opendarwin.org/">OpenDarwin</a>,
	<a href="http://www.apple.com/macosx/">Mac OS X</a> and
	<a href="http://developer.apple.com/darwin/projects/darwin/">Darwin</a>)</p>

      <p>There are currently about 2500 completed and usable <a
	href="/ports/">ports</a>, with more being added on a regular basis.
	You can track recently added ports by subscribing to the <a
	href="http://www.opendarwin.org/mailman/listinfo/cvs-darwinports-all">cvs-darwinports-all</a>
	mailing list.</p>
	
      <p>For more information on obtaining and installing DarwinPorts,
	please see the <a href="/getdp/">Get DarwinPorts</a> section of the
	site.  Also be sure to check out <a href="/docs/">documentation</a>,
	and if you have questions or run into problems, you can <a
	href="/help/">get help</a>.</p>

      <p>Bug reports, feature requests, and new ports should be submitted to
	<a href="http://www.opendarwin.org/bugzilla/">Bugzilla</a>. Please consult
    the <a href="docs/ch01s05.html#user_bugs">Bug report documentation</a>
    to improve the processing of your bug report(s).</p>

      <div id="news">
	<h2 class="hdr">Project News</h2>

	<?php
	  print_headlines();
	?>

		<p>You can also browse our <a href="archives.php">news archives</a>.</p>
	
      </div>
    </div>
  </div>

<?php
  print_footer();
?>
