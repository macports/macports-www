  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/includes/common.inc");
    /* include_once("$DOCUMENT_ROOT/includes/functions.inc"); */
    print_header('Get DarwinPorts', 'iso-8859-1');
  ?>

    <div id="content">
      <h2 class="hdr">Get DarwinPorts</h2>

	 <p>DarwinPorts version 1.2 is available in source form as either a
	 <a href="/downloads/DarwinPorts-1.2.tar.bz2">tar.bz2</a>
	 package or a <a href="/downloads/DarwinPorts-1.2.tar.gz">tar.gz</a> one,
	 and in binary form as a <a href="/downloads/DarwinPorts-1.2-10.4.dmg">dmg for Tiger</a>
	 or as <a href="/downloads/DarwinPorts-1.2-10.3.dmg">one for Panther</a>,
	 both containing a pkg installer. Checksums for all these are contained
	 <a href="/downloads/DarwinPorts-1.2.chk.txt">here</a>.</p>

	 <p>To get a files listing of all our available downloads checkout the
	 <a href="/downloads/">downloads section</a></p>

      <p>Please note that in order to install and run DarwinPorts on Mac OS X you must
	have Apple's Xcode installed, found at the <a href="http://developer.apple.com/">Apple Developer site</a>
	or on your Mac OS X installation CDs/DVD.</p>

	  <p>If you want to use DarwinPorts on a platform other than Mac OS X, please be
	  aware of the following requirements (we assume that you have basics such as
	  gcc):</p>
	  <ul>
	  	<li>TCL (8.3 or 8.4)</li>
		<li>curl</li>
		<li>OpenSSL or libmd</li>
	  </ul>

	<h5 class="subhdr">Mac OS X Package (.pkg) Installer</h5>

	<p>The easiest way to install DarwinPorts on a Mac OS X system is by downloading
	the <a href="/downloads/DarwinPorts-1.2-10.4.dmg">dmg for Tiger</a> or the
	<a href="/downloads/DarwinPorts-1.2-10.3.dmg">one for Panther</a> and running Installer.app
	on the pkg contained therein, following the on-screen instructions until completion.
	This procedure will place a fully functional and default DarwinPorts installation
	on your host system, completely ready for usage. If needed, your shell configuration
	files will be adapted by the installer to include the necessary settings to run
	DarwinPorts. You may need to open a new shell for these changes to take effect.</p>

	<p>Although not strictly necessary, it is still recommended that you synchronize your
	recent installation with OpenDarwin servers to ensure you have the latest release
	available of the DarwinPorts infrastructure and of the Portfiles containing the instructions
	necessary for the installation of ports. To accomplish this simply execute:</p>

	<pre>sudo port -d selfupdate</pre>

	<p>It is also recommended to run the above command on a regular basis to keep your
	installation always current. At this point you should be ready to enjoy	DarwinPorts!</p>

	<h5 class="subhdr">Source Installation</h5>

	<p>If on the other hand you decide to install from source, there are still a few
	things you will need to do once you've downloaded the tarball before you can
	install a port with the DarwinPorts system, namely installing DarwinPorts itself.
	&ldquo;<kbd>cd</kbd>&rdquo; into the directory where you downloaded the package
	and run &ldquo;<kbd>tar xjvf <a href="/downloads/DarwinPorts-1.2.tar.bz2">DarwinPorts-1.2.tar.bz2</a></kbd>&rdquo;
	or &ldquo;<kbd>tar xzvf <a href="/downloads/DarwinPorts-1.2.tar.gz">DarwinPorts-1.2.tar.gz</a></kbd>&rdquo;,
	depending on whether you downloaded the bz2 tarball or the gz one, respectively.
	This will unpack the DarwinPorts sources that you will proceed to build and install. To do
	so, execute the following:</p>

      <pre>cd DarwinPorts-1.2
./configure && make && sudo make install</pre>

	<p>Optionally:</p>

<pre>cd ../
rm -rf DarwinPorts-1.2.*</pre>

      <p>These steps need to be perfomed from an administrator account, for which &ldquo;<kbd>sudo</kbd>&rdquo;
      will ask the password upon installation. This procedure will install a pristine DarwinPorts
      system and, if the optional steps are taken, remove the as of now unnecessary DarwinPorts-1.2
      directory and corresponding tarball. To customize your installation you should read the output
      of &ldquo;<kbd>./configure --help | more</kbd>&rdquo; and pass the appropriate options to the
      configuration script in the steps detailed above.</p>
	
	<p>You will need to adapt your shell's configuration files to find the binaries installed by
	DarwinPorts. Lastly, you need to synchronize your recent installation with OpenDarwin servers:</p>

	<pre>sudo port -d selfupdate</pre>

	<p>Upon completion DarwinPorts will be ready to install ports. Again, it is recommended to run
	the above command on a regular basis to keep your installation current.</p>

      <p>Alternatively, you can refer to the <tt>README_RELEASE1</tt>
	file contained in the 1.2 release tarball for basic installation and usage instructions.</p>

	<h5 class="subhdr">Help</h5>

      <p><a href="/help/">Help</a> is also available should you need it.</p>

	<h5 class="subhdr">CVS Sources</h5>

     <p>If you are developer or a user with a taste for the bleeding edge and wish for the latest changes
     and feature additions, you may acquire the DarwinPorts sources through CVS.</p>

      <p>Use the following commands to check the project out of the OpenDarwin anonymous CVS
	repository:</p>

      <pre>cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od login
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od co -P darwinports</pre>

       <p>When the server asks you for a password, simply press
       <kbd>return</kbd> on your keyboard&mdash;the password is empty.</p>

	<p>If you do not want to bother with fetching from CVS, you can download
	a nightly updated <a href="/downloads/darwinports-nightly-cvs-snapshot.tar.gz">
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
