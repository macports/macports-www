  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/includes/common.inc");
    /* include_once("$DOCUMENT_ROOT/includes/functions.inc"); */
    print_header('Get DarwinPorts', 'iso-8859-1');
  ?>

    <div id="content">
      <h2 class="hdr">Get DarwinPorts</h2>

      <p>If you would like to install DarwinPorts, it first needs to be 
	&ldquo;checked out&rdquo; of the OpenDarwin CVS repository.</p>

      <p>Please note that in order to install and run DarwinPorts on Mac OS X, you must
	have either the Mac OS X Developer Tools (for 10.2.x), or XCode (for
	10.3.x) installed.</p>

	  <p>If you want to use DarwinPorts on a platform other than Mac OS X, please be
	  aware of the following dependencies (we assume that you have basics such as
	  gcc):
	  <ul>
	  	<li>TCL (8.3 or 8.4)</li>
		<li>curl</li>
		<li>md5 (some systems have 'md5sum', you can safely symlink that to 'md5')</li>
	  </ul>

      <p>Use the following commands to check the project out of the CVS
	repository:</p>

      <pre>cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od login
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od co -P darwinports</pre>

      <p>When the server asks you for a password, simply press
	<kbd>return</kbd> on your keyboard&mdash;the password is empty.</p>

	  <p>If you do not want to bother with fetching from CVS, you can download
	  a nightly updated <a href="http://darwinports.opendarwin.org/darwinports-nightly-cvs-snapshot.tar.gz">
	  CVS-snapshot</a>. Once extracted, you can keep it up to date with the usual
	  CVS commands.</p>

      <p>If you'd simply like to view the CVS repository without checking it
	out, you can do so via <a
	href="http://www.opendarwin.org/cgi-bin/cvsweb.cgi/proj/darwinports/">CVSweb</a>.</p>

      <h5 class="subhdr">Installation</h5>

      <p>Once you have the project checked out of the CVS repository, there
	are a still a few things you will need to do before you can install
	a port.</p>
	
      <p>For installation instructions, please see the <tt>README</tt>
	file in the directory where you performed the CVS checkout.  There is
	also a <a href="http://darwinports.opendarwin.org/docs/ch01s03.html">chapter</a>
	in the <a href="http://darwinports.opendarwin.org/docs/">DarwinPorts Guide</a> that
	provides DarwinPorts installation and usage instructions.</p> 

      <p><a href="/help/">Help</a> is also available should you need it.</p>
    </div>
  </div>

<?php
  print_footer();
?>
