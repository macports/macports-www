  <?php
    /* $Id$ */
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/macports/includes/common.inc");
    print_header('MacPorts -- Help', 'utf-8');
  ?>

	<div id="content">
		<h2 class="hdr">Get Help</h2>

		<p>If you get stuck while using MacPorts and have a problem you 
	        can't figure out, we have a lot of resources to help you.</p>
	  
		<h5 class="subhdr">Documentation</h5>

		<p>The <a href="http://geeklair.net/new_macports_guide/">MacPorts Guide</a> has a section dedicated to MacPorts
                installation issues, <a href="http://geeklair.net/new_macports_guide/#installing">Chapter 2. Installing MacPorts</a>
                and another one for general usage, <a href="http://geeklair.net/new_macports_guide/#using">Chapter 3: Using MacPorts</a>.</p>

		<p>The <a href="http://trac.macports.org/projects/macports/wiki/FAQ">MacPorts FAQ</a>
		is now an ongoing, user driven effort part of our <a href="http://trac.macports.org/projects/macports/wiki">Wiki</a>,
		where anyone with a <a href="http://www.macports.org/wp-register.php">Trac account</a>
		and MacPorts knowledge can contribute with information to help others.</p>

		<p>All of our documentation is a work in progress, so if you spot an error or have a quesiton about some part of the document, 
                let us know!  This will help us </p>
	
		<h5 class="subhdr">Mailing Lists</h5>

		<p>The <a href="http://lists.macosforge.org/mailman/listinfo/macports-users">General MacPorts mailing list</a> is open to all
                for supscription. It is the best place for existing and new users alike to ask questions about MacPorts and MacPorts
                installed software. Please note that due to spam problems the mailing list will reject posts from non-subscribers.</p>

                <p>It is recommended to check the <a href="http://lists.macosforge.org/pipermail/macports-users/">list archive</a> before posting
                a question, as some issues are aired fairly regularly and dealt with many times in a row. We try to be as helpful as possible,
                but if it's a common question our answers may be fairly short.</p>

		<p>When posting a question to the mailing list, please included	any information you think might be relevent to the problem, 
		such as  operating system and version you're using, Mac OS X 10.4.10 for example, whether you have any other third party 
		software installed, in <kbd>/usr/local</kbd> for instance, and any error messages that MacPorts might give you (use the
                <kbd>-v</kbd> or <kbd>-d port(1)</kbd>'s flags to turn on verbose or debugging information, it's a lot easier for us to
                help you once these are used).</p>

                <p>If you are a developer and need help with any part of the MacPorts internals, the <a href="http://lists.macosforge.org/mailman/listinfo/macports-dev">
                development list</a> is where you should direct your posts to, as this is where all discussion about MacPorts itself takes place.
                <a href="http://lists.macosforge.org/pipermail/macports-dev/">Archives</a> for this mailing list are also available.</p>

		<h5 class="subhdr">IRC</h5>

		<p>For more real-time discussion, the #MacPorts channel on the <a href="http://freenode.net/">Freenode IRC network</a> is generally
		where we hang out. Though it is generally helpful, please keep in mind that no one is obligated to help or even answer your question
                if you join IRC. Do not take it personally, simply ask your question on the <a href="http://lists.macosforge.org/mailman/listinfo/macports-users">
                users</a> or <a href="http://lists.macosforge.org/mailman/listinfo/macports-dev">development</a> mailing lists instead.</p>

	</div>
</div>

<?php
  print_footer();
?>
