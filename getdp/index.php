  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/includes/common.inc");
    /* include_once("$DOCUMENT_ROOT/includes/functions.inc"); */
    print_header('Get DarwinPorts', 'iso-8859-1');
  ?>

    <div id="content">
      <h2 class="hdr">Get DarwinPorts</h2>

	<p>To install DarwinPorts you first need to download the 1.0 release
	package in either <a href="/downloads/DarwinPorts-1.0.tar.bz2">tar.bz2</a>
	format or <a href="/downloads/DarwinPorts-1.0.tar.gz">tar.gz</a>. Checksums
	for both packages are contained <a href="/downloads/DarwinPorts-1.0.chk.txt">here</a>.<p>

      <p>Please note that in order to install and run DarwinPorts on Mac OS X, you must
	have either the Mac OS X Developer Tools (for 10.2.x), or XCode (for
	10.3.x) installed.</p>

	  <p>If you want to use DarwinPorts on a platform other than Mac OS X, please be
	  aware of the following dependencies (we assume that you have basics such as
	  gcc):</p>
	  <ul>
	  	<li>TCL (8.3 or 8.4)</li>
		<li>curl</li>
		<li>OpenSSL or libmd</li>
	  </ul>

      <h5 class="subhdr">Installation</h5>

      <p>Once you have downloaded the 1.0 tarball, there are a still a few things
      you will need to do before you can install a port with the DarwinPorts system,
      namely installing DarwinPorts itself. &ldquo;<kbd>cd</kbd>&rdquo; into the directory where you downloaded
      the package and run &ldquo;<kbd>tar xjvf DarwinPorts-1.0.tar.bz2</kbd>&rdquo; or
      &ldquo;<kbd>tar xzvf DarwinPorts-1.0.tar.gz</kbd>&rdquo;, depending on whether you
      downloaded the bz2 tarball or the gz one, respectively. This will unpack the DarwinPorts
      sources that you will proceed to install. To do so, execute the following:</p>

      <pre>cd DarwinPorts-1.0
./configure && make && sudo make install</pre>

	<p>Optionally:</p>

<pre>cd ../
rm -rf DarwinPorts-1.0.*</pre>

      <p>These steps need to be perfomed from an administrator account, for which &ldquo;<kbd>sudo</kbd>&rdquo;
      will ask the password upon installation. This procedure will install a pristine DarwinPorts
      system and, if the optional steps are taken, remove the as of now unnecessary DarwinPorts-1.0
      directory and corresponding tarball. To customize your installation you should read the output
      of &ldquo;<kbd>./confugure --help | more</kbd>&rdquo; and pass the appropriate options to the
      configuration script in the steps detailed above.</p>
	
	<p>Lastly, you will need to synchronize your recent installation with the OpenDarwin servers
	and download the &ldquo;Portfiles&rdquo; containing the descriptions necessary for DarwinPorts
	to install ports on your system:</p>

	<pre>sudo port -d selfupdate</pre>

	<p>Upon completion DarwinPorts will be ready to install ports. It is recommended to run the above
	command on a regular basis to keep your installation synchronized with the latest changes to the
	Portfiles and the infrastructure itself.</p>

      <p>Alternatively, you can refer to the <tt>README_RELEASE1</tt>
	file contained in the 1.0 release tarball for basic installtion and usage instructions.</p>

      <p><a href="/help/">Help</a> is also available should you need it.</p>

	<h5 class="subhdr">CVS Sources</h5>

     <p>If you are developer or a user with a taste for the bleeding edge and wish for the latest changes
     and feature additions, you may acquire the DarwinPorts sources through CVS.</p>

      <p>Use the following commands to check the project out of the OpenDarwin CVS
	repository:</p>

      <pre>cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od login
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od co -P darwinports</pre>

       <p>When the server asks you for a password, simply press
       <kbd>return</kbd> on your keyboard&mdash;the password is empty.</p>
		    
	<p>If you do not want to bother with fetching from CVS, you can download
	a nightly updated <a href="http://darwinports.opendarwin.org/darwinports-nightly-cvs-snapshot.tar.gz">
	CVS-snapshot</a>. Once extracted, you can keep it up to date with the usual
	&ldquo;<kbd>cvs update</kbd>&rdquo; commands.</p>

      <p>If you'd simply like to view the CVS repository without checking it
	out, you can do so via <a
	href="http://www.opendarwin.org/cgi-bin/cvsweb.cgi/proj/darwinports/">CVSweb</a>.</p>

    </div>
  </div>

<?php
  print_footer();
?>
