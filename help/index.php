  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/includes/common.inc");
    /* include_once("$DOCUMENT_ROOT/includes/functions.inc"); */
    print_header('Get Help', 'iso-8859-1');
  ?>

	<div id="content">
		<h2 class="hdr">Get Help</h2>

		<p>If you get stuck while using DarwinPorts and have a problem you 
			can't figure out, we have a lot of resources to help you.</p>
	  
		<h5 class="subhdr">Documentation</h5>

		<p>The <a href="http://darwinports.opendarwin.org/docs">DarwinPorts 
			Guide</a> has a section for DarwinPorts users, 
			<a href="http://darwinports.opendarwin.org/docs/pt01.html">Part 
			1: Using DarwinPorts</a>.

		<p>The DarwinPorts FAQ will reappear soon.</p>

		<p>All of our documentation is a work in progress, so if you spot 
			an error, or have a quesiton about some part of the document, 
			let us know!  This will help us </p>
	
		<h5 class="subhdr">Mailing Lists</h5>

		<p>The 	
			<a href="http://www.opendarwin.org/mailman/listinfo/darwinports">darwinports 
			mailing list</a> is open to all.  It is the best place to ask 
			questions about DarwinPorts, for new users, developers, 
			everyone alike!  It is also where all discussion about 
			DarwinPorts takes place.  Please note that due to spam problems,
			the DarwinPorts mailing list requires posts from 
			non-subscribers to be approved.  It may be better to subscribe 
			to the list.</p>

		<p>You may check the 
			<a href="http://www.opendarwin.org/pipermail/darwinports/">darwinports 
			mailing list archives</a> before posting a question, although 
			it's not necessarily a requirement.  We try to be as helpful as 
			possible, but if it's a common question, our answers may be 
			fairly short.</p>

		<p>When you post a question to the mailing list, please included 
			any information you think might be relevent to the problem, 
			such as what operating system and version you're using (OS X 
			10.3.2, for example), whether you have any other third party 
			software installed /usr/local (for example), and any error 
			messages that DarwinPorts might give.  It's a lot easier for 
			us to help you if we have too much information than if we 
			don't have enough.</p>

		<h5 class="subhdr">IRC</h5>

		<p>For more real-time discussion, the #opendarwin channel on the <a
			href="http://freenode.net/">freenode IRC network</a> is generally
			where we hang out.</p>
	
		<p>Though it is generally helpful, please keep in mind that no one is
			obligated to help or even answer your question if you join the IRC
			channel.  Do not take it personally, simply ask your question
			on the
		   	<a href="http://www.opendarwin.org/mailman/listinfo/darwinports">darwinports
			mailing list</a> instead.</p>

	</div>
</div>

<?php
  print_footer();
?>
