<?php
    /* $Id$ */
    $MPWEB = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']);
    include_once("$MPWEB/includes/common.inc");
    print_header('MacPorts -- Download &amp; Installation', 'utf-8');
?>

<div id="content">

    <h2 class="hdr">Get MacPorts</h2>

    <p>MacPorts version <?php print "$mp_version_major"; ?> is available in binary form as a dmg disk image for <a
    href="<?php print $tiger_dmg; ?>"> Tiger (Universal)</a> or <a href="<?php print $panther_dmg; ?>"> Panther</a>,
    both containing a pkg installer, or in source form as either a <a href="<?php print $bz2_tarball ?>">tar.bz2</a>
    package or a <a href="<?php print $gz_tarball; ?>">tar.gz</a> one. Checksums for all these are contained in the
    <a href="<?php print $checksums; ?>">checksums file</a>.</p>

    <p>To get a files listing of all our available downloads checkout the <a href="<?php print $downloads; ?>">
    downloads section</a> of the site.</p>

    <p>Please note that in order to install and run MacPorts on Mac OS X you must have Apple's Developer Tools
    package installed, found at the <a href="http://developer.apple.com/tools/xcode/">Apple Developer site</a>
    or on your Mac OS installation CDs/DVD.</p>

    <p>If you want to use MacPorts on a platform other than Mac OS X, please be aware of the following requirements
    (we assume that you have basics such as GCC and X11):</p>

    <ul>
        <li><a href="http://www.tcl.tk/">Tcl</a> (8.3 or 8.4), with threads</li>
        <li><a href="http://gnustep.org/">GNUstep</a> (Base), for Foundation</li>
        <li><a href="http://rsync.samba.org/">rsync</a></li>
        <li><a href="http://curl.haxx.se/">cURL</a></li>
        <li><a href="http://www.openssl.org/">OpenSSL</a> or <a href="http://martin.hinner.info/libmd/">libmd</a></li>
    </ul>

    <h3 class="subhdr">Mac OS X Package (.pkg) Installer</h3>

    <p>The easiest way to install MacPorts on a Mac OS X system is by downloading the <a href="<?php print $tiger_dmg;
    ?>">dmg for Tiger</a> or the <a href="<?php print $panther_dmg; ?>"> one for Panther</a> and running Installer.app
    on the pkg contained therein by double clicking on them, following the on-screen instructions until completion. This
    procedure will place a fully functional and default MacPorts installation on your host system, ready for usage. If
    needed, your shell configuration files will be adapted by the installer to include the necessary settings to run
    MacPorts. You may need to open a new shell for these changes to take effect.</p>

    <p>Although not strictly necessary, it is still recommended that you synchronize your recent installation with our
    rsync server to ensure you have the latest release available of the MacPorts infrastructure and of the &ldquo;Portfiles&rdquo;
    containing the instructions employed in the building and installation of ports. To accomplish this simply execute:</p>

    <pre>sudo port -d selfupdate</pre>

    <p>It is also recommended to run the above command on a regular basis to keep your installation always current.
    At this point you should be ready to enjoy MacPorts!</p>

    <h3 class="subhdr">Source Installation</h3>

    <p>If on the other hand you decide to install from source, there are still a couple of things you will need to
    do once you've downloaded the tarball before you can install a port with the MacPorts system, namely compiling
    and installing MacPorts itself. &ldquo;<kbd>cd</kbd>&rdquo; into the directory where you downloaded the package
    and run &ldquo;<kbd>tar xjvf <a href="<?php print $bz2_tarball; ?>">MacPorts-<?php print "$mp_version_major"; ?>.tar.bz2
    </a></kbd>&rdquo; or &ldquo;<kbd>tar xzvf <a href="<?php print $gz_tarball; ?>">MacPorts-<?php print "$mp_version_major";
    ?>.tar.gz</a></kbd>&rdquo;, depending on whether you downloaded the bz2 tarball or the gz one, respectively.
    This will unpack the MacPorts sources that you will proceed to build and install. To do so, execute the following:</p>

<pre>cd MacPorts-<?php print $mp_version_major; ?>

./configure &amp;&amp; make &amp;&amp; sudo make install</pre>

    <p>Optionally:</p>

<pre>cd ../
rm -rf MacPorts-<?php print $mp_version_major; ?>*</pre>

    <p>These steps need to be perfomed from an administrator account, for which &ldquo;<kbd>sudo</kbd>&rdquo;
    will ask the password upon installation. This procedure will install a pristine MacPorts system and, if the
    optional steps are taken, remove the as of now unnecessary MacPorts-<?php print "$mp_version_major"; ?> source
    directory and corresponding tarball. To customize your installation you should read the output of
    &ldquo;<kbd>./configure --help | more</kbd>&rdquo; and pass the appropriate options for the settings you wish to
    tweak to the configuration script in the steps detailed above.</p>
	
    <p>You will need to adapt your shell's configuration files to find the binaries installed by MacPorts.
    Lastly, you need to synchronize your recent installation with the MacPorts rsync server:</p>

    <pre>sudo port -d selfupdate</pre>

    <p>Upon completion MacPorts will be ready to install ports. Again, it is recommended to run the above
    command on a regular basis to keep your installation current.</p>

    <h3 class="subhdr">Help</h3>

    <p>Help is also available through our <a href="<?php print $trac_url; ?>">Trac portal</a> should you need it.</p>

    <h3 class="subhdr">SVN Sources</h3>

    <p>If you are developer or a user with a taste for the bleeding edge and wish for the latest changes and
    feature additions, you may acquire the MacPorts sources through SVN.</p>

    <p>Use the following command to check the project out of the MacPorts anonymous subversion repository:</p>

<pre>svn co <?php print $svn_url . '/trunk'; ?></pre>

    <p>If you do not want to bother with fetching from SVN, you can download a nightly updated
    <a href="/macports/downloads/macports-nightly-svn-snapshot.tar.gz"> SVN-snapshot</a>. Once extracted,
    you can keep it up to date with the usual &ldquo;<kbd>svn update</kbd>&rdquo; commands.</p>

    <p>If you'd simply like to view the SVN repository without checking it out, you can do so via the
    <a href="http://trac.macports.org/projects/macports/browser">Trac browser</a>.</p>

</div>

<?php
  print_footer();
?>
