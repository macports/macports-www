  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/macports/includes/common.inc");
    include_once("$DOCUMENT_ROOT/macports/includes/news.inc");
    print_header('MacPorts Home', 'utf-8');
    /* $Id$ */
  ?>

    <div id="content">
      <h2 class="hdr">Introduction to MacPorts</h2>

      <p>The MacPorts Project's main goal is to provide an easy way to
	install various open-source software products on the <a
        href="http://www.apple.com/macosx/">Mac OS X</a> operating system.</p>

      <p>There are currently about <?= ports_count(); ?> completed and usable
	<a href="/macports/ports.php">ports</a>, with more being added on a regular basis.
	You can track recently added ports by subscribing to the <a
	href="http://lists.macosforge.org/mailman/listinfo/macports-changes">macports-changes</a>
	mailing list.</p>
	
      <p>For more information on obtaining and installing MacPorts,
	please see the <a href="/macports/getmp.php">Get MacPorts</a> section of this
	site.  Also be sure to check out the <a href="http://geeklair.net/new_macports_guide/">documentation</a>,
	and if you have questions or run into problems, you can get help at our <a
	href="/macports/help.php">help section</a>. The <a href="http://trac.macports.org/projects/macports/wiki">MacPorts Wiki</a>
	is also a good resource for general and miscellaneous help, specially the 
	ongoing <a href="http://trac.macports.org/projects/macports/wiki/FAQ">FAQ</a> effort.</p>

      <p>Bug reports, feature requests, and new ports should be submitted as
	<a href="http://trac.macports.org/projects/macports/newticket">new tickets</a> into our Trac system. Please consult
    the <a href="http://geeklair.net/new_macports_guide/#project.tickets"> documentation</a>
    to improve the processing of your ticket(s).</p>

    <p>For information on becoming an official member of the MacPorts project
    with write access to our subversion repository, please consult the
    <a href="http://geeklair.net/new_macports_guide/#project.membership">relevant documentation</a>
    detailing our membership requirements and resulting duties &amp; benefits
    from holding a MacPorts account.</p>

    <p><b>Current MacPorts <a href="/macports/getmp.php">release</a>: <? print "$mp_version"; ?></b></p>

      <div id="news">
	<h2 class="hdr">Project News</h2>

	<?php
	  print_headlines();
	?>

		<p>You can also browse our <a href="/macports/archives.php">news archives</a>.</p>
	
      </div>
    </div>
  </div>

<?php
  print_footer();
?>
