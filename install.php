<?php
    /* -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:filetype=php:et:sw=4:ts=4:sts=4 */
    /* $Id$ */
    /* Copyright (c) 2004, OpenDarwin. */
    /* Copyright (c) 2004-2007, The MacPorts Project. */
    $MPWEB = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']);
    include_once("$MPWEB/includes/common.inc");
    print_header('The MacPorts Project -- Download &amp; Installation', 'utf-8');
?>


<div id="content">

    <h2 class="hdr">Installing MacPorts</h2>

    <p>MacPorts version <?php print $macports_version_major; ?> is available in various formats for download and installation:
    </p>

    <ul>
        <li>&#8220;dmg&#8221; disk images for <a href="<?php print $leopard_dmg; ?>">Leopard (Universal)</a>, <a
        href="<?php print $tiger_dmg; ?>">Tiger (Universal)</a> and <a href="<?php print $panther_dmg; ?>">Panther (PowerPC)
        </a> as a legacy platform, containing pkg installers for use with the Mac OS X Installer. By far the simplest installation
        procedure that most users should <a href="#pkg">follow</a> after meeting the requirements listed <a href="#requirements">
        below</a>.</li>
        <li>In <a href="#source">source form</a> as either a <a href="<?php print $bz2_tarball ?>">tar.bz2</a> package or a
        <a href="<?php print $gz_tarball; ?>">tar.gz</a> one for manual compilation, if you intend to customize your installation
        in any way.</li>
        <li><a href="#svn">SVN checkout</a> of the unpackaged sources, if you wish to follow MacPorts development.</li>
        <li>The <a href="#selfupdate">selfupdate</a> target of the <kbd>port(1)</kbd> command, for users who already have
        MacPorts installed and wish to upgrade to a newer release.</li>
    </ul>

    <p>Checksums for our packaged <a href="<?php print $downloads; ?>">downloads</a> are contained in the corresponding <a
    href="<?php print $checksums; ?>">checksums file</a>.</p>


    <div id="requirements">

        <p>Please note that in order to install and run MacPorts on Mac OS X, your system must have installations of the following
        components:</p>

        <ol>
            <li>Apple's <a href="https://connect.apple.com/cgi-bin/WebObjects/MemberSite.woa/wa/getSoftware?bundleID=19897">
            Xcode 3.0</a> Developer Tools for the Leopard platform or 2.4.1 for Tiger, found at the <a href="http://developer.apple.com/tools/xcode/">
            Apple Developer Connection</a> site or on your Mac OS X installation CDs/DVD.</li>
            <li>The X11 windowing environment (A.K.A. &#8220;X11 User&#8221;) and its related SDK package (&#8220;X11SDK&#8221;)
            for ports that depend on the functionality they provide to compile and run.
                <ul>
                    <li>the &#8220;X11 User&#8221; package is an optional installation on your system CDs/DVD for Panther and
                    Tiger, enabled through the &#8220;Customize&#8221; button of the installer, whereas it is included by default
                    on Leopard.</li>
                    <li>the &#8220;X11 SDK&#8221; package from the Xcode installer will be automatically selected if &#8220;X11
                    User&#8221; is already installed, so be sure to install that first.</li>
                </ul>
            </li>
        </ol>

    </div>


    <h3 class="subhdr" id="pkg">Mac OS X Package (.pkg) Installer</h3>

    <p>The easiest way to install MacPorts on a Mac OS X system is by downloading the dmg for <a href="<?php print $leopard_dmg;
    ?>">Leopard (Universal)</a>, <a href="<?php print $tiger_dmg; ?>">Tiger (Universal)</a> or <a href="<?php print $panther_dmg;
    ?>">Panther (PowerPC)</a>, respectively, and running the system's Installer by double-clicking on the pkg contained therein,
    following the on-screen instructions until completion.</p>

    <p>This procedure will place a fully-functional and default MacPorts installation on your host system, ready for usage.
    If needed your shell configuration files will be <a href="<?php print $guide_url . '#installing.shell'; ?>">adapted by
    the installer</a> to include the necessary settings to run MacPorts and the programs it installs, but you may need to
    open a new shell for these changes to take effect.</p>

    <p>The MacPorts &#8220;<kbd>selfupdate</kbd>&#8221; command will also be run for you by the installer to ensure you have our
    latest available release and the latest revisions to the &#8220;Portfiles&#8221; that contain the instructions employed
    in the building and installation of ports. After installation is done, it is recommended that you run this step manually
    on a regular basis to to keep your MacPorts system always current:</p>
    
    <pre>sudo port -v selfupdate</pre>

    <p>At this point you should be ready to enjoy MacPorts!</p>

    <p>Type &#8220;<kbd>man port</kbd>&#8221; at the command line prompt and/or browse over to our <a href="<?php print
    $guide_url; ?>">Guide</a> to find out more information about using MacPorts. <a href="#help">Help</a> is also available.
    </p>


    <h3 class="subhdr" id="source">Source Installation</h3>

    <p>If on the other hand you decide to install MacPorts from source, there are still a couple of things you will need to do
    after downloading the tarball before you can start installing ports, namely compiling and installing MacPorts itself:</p>


    <ol>
        <li>&#8220;<kbd>cd</kbd>&#8221; into the directory where you downloaded the package and run &#8220;<kbd>tar xjvf
        <a href="<?php print $bz2_tarball; ?>">MacPorts-<?php print $macports_version_major; ?>.tar.bz2</a></kbd>&#8221; or
        &#8220;<kbd>tar xzvf <a href="<?php print $gz_tarball; ?>">MacPorts-<?php print $macports_version_major; ?>.tar.gz</a></kbd>&#8221;,
        depending on whether you downloaded the bz2 tarball or the gz one, respectively.</li>
        <li>Build and install the recently unpacked sources:
            <ul>
                <li><kbd>cd MacPorts-<?php print $macports_version_major; ?></kbd></li>
                <li><kbd>./configure &amp;&amp; make &amp;&amp; sudo make install</kbd></li>
            </ul>
            Optionally:
            <ul>
                <li><kbd>cd ../</kbd></li>
                <li><kbd>rm -rf MacPorts-<?php print $macports_version_major; ?>*</kbd></li>
            </ul>
            
        </li>
    </ol>

    <p>These steps need to be perfomed from an administrator account, for which &#8220;<kbd>sudo</kbd>&#8221; will ask the
    password upon installation. This procedure will install a pristine MacPorts system and, if the optional steps are taken,
    remove the as of now unnecessary MacPorts-<?php print $macports_version_major; ?> source directory and corresponding tarball.</p>

    <p>To customize your installation you should read the output of &#8220;<kbd>./configure --help | more</kbd>&#8221; and
    pass the appropriate options for the settings you wish to tweak to the configuration script in the steps detailed above.</p>
	
    <p>You will need to manually adapt your shell's environment to work with MacPorts and your chosen installation <kbd>
    prefix</kbd> (the value passed to <kbd>configure</kbd>'s <kbd>--prefix</kbd> flag, defaulting to <kbd>/opt/local</kbd>):
    </p>

    <ul>
        <li><kbd>Add ${prefix}/bin</kbd> and <kbd>${prefix}/sbin</kbd> to the start of your <kbd>PATH</kbd> environment variable
        so that MacPorts-installed programs take precedence over system-provided programs of the same name.</li>
        <li>If a standard <kbd>MANPATH</kbd> environment variable already exists (that is, one that doesn't contain any empty
        components), add the <kbd>${prefix}/share/man</kbd> path to it so that MacPorts-installed man pages are found by your
        shell.</li>
        <li>For Tiger and earlier only, add an appropriate X11 <kbd>DISPLAY</kbd> environment variable to run X11-dependent
        programs, as Leopard takes care of this requirement on its own.</li>
    </ul>

    <p>Lastly, you need to synchronize your installation with the MacPorts rsync server:</p>

    <pre>sudo port -v selfupdate</pre>

    <p>Upon completion MacPorts will be ready to install ports!</p>

    <p>It is recommended to run the above command on a regular basis to keep your installation current. Type &#8220;<kbd>man
    port</kbd>&#8221; at the command line prompt and/or browse over to our <a href="<?php print $guide_url; ?>">Guide</a> to
    find out more information about using MacPorts. <a href="#help">Help</a> is also available.</p>


    <h3 class="subhdr" id="svn">SVN Sources</h3>

    <p>If you are developer or a user with a taste for the bleeding edge and wish for the latest changes and feature additions,
    you may acquire the MacPorts sources through SVN.</p>

    <p>Use the following command to check the project's &#8220;trunk&#8221; out of the MacPorts anonymous subversion repository,
    containing all of our source modules (MacPorts' &#8220;base&#8221;, the ports tree and all of documentation in raw form):</p>

    <pre>svn co <?php print $svn_url . 'trunk'; ?></pre>

    <p>Purpose-specific branches are also available at the <kbd><?php print $svn_url . 'branches'; ?></kbd> url.</p>

    <p>Alternatively, if you'd simply like to view the SVN repository without checking it out, you can do so via the <a
    href="http://trac.macports.org/projects/macports/browser">Trac source browser</a>.</p>
    
    
    <h3 class="subhdr" id="selfupdate">Selfupdate</h3>

    <p>If you already have MacPorts installed and have no restrictions to use the rsync networking protocol (tcp port 873 by
    default), the easiest way to upgrade to our latest available release, <b><?php print $macports_version_latest; ?></b>, is
    by using the <kbd>selfupdate</kbd> target of the <kbd>port(1)</kbd> command. This will both update your ports tree (by
    performing a <kbd>sync</kbd> operation) and rebuild your current installation if it's outdated, preserving your customizations,
    if any.</p>
    

    <h3 class="subhdr" id="other">Other Platforms</h3>

    <p>Running on platforms other than Mac OS X is not the main focus of The MacPorts Project, so remaining cross-platform is
    not an actively-pursued development goal. Nevertheless, it is not an actively-discouraged goal either and as a result some
    experimental support does exist for other POSIX-compliant platforms such as *BSD and GNU/Linux.</p>

    <p>The full list of requirements to run MacPorts on these other platforms is as follows (we assume you have the basics such
    as GCC and X11):</p>

    <ul>
        <li><a href="http://www.tcl.tk/">Tcl</a> (8.3 or 8.4), with threads.</li>
        <li><a href="http://gnustep.org/">GNUstep</a> (Base), for Foundation.</li>
        <li><b>mtree</b> for directory hierarchy.</li>
        <li><a href="http://rsync.samba.org/">rsync</a> for syncing the ports.</li>
        <li><a href="http://curl.haxx.se/">cURL</a> for downloading distfiles.</li>
        <li><a href="http://www.openssl.org/">OpenSSL</a> or <a href="http://martin.hinner.info/libmd/">libmd</a> for checksums.</li>
    </ul>

    <p>Normally you must install from <a href="#source">source</a> or from an <a href="#svn">SVN checkout</a> to run MacPorts
    on any of these platforms. Experimental packaging is available for the FreeBSD (.tbz package), Fedora (.rpm package) and
    Ubuntu (.deb package) operating systems.</p>


    <h3 class="subhdr" id="help">Help</h3>

    <p>Help on a wide variety of topics is also available in the project <a href="<?php print $guide_url; ?>">Guide</a> and
    through our <a href="<?php print $trac_url; ?>">Trac portal</a> should you run into any problems installing and/or using
    MacPorts. Of particular relevance are the <a href="<?php print $guide_url . '#installing'; ?>">installation</a> &amp;
    <a href="<?php print $guide_url . '#using'; ?>">usage</a> sections of the former and the <a href="<?php print $trac_url .
    'wiki/FAQ'; ?>">FAQ</a> section of the <a href="<?php print $trac_url . 'wiki'; ?>">Wiki</a>, where we keep track of questions
    frequently fielded on our <a href="contact.php#lists">mailing lists</a>.</p>

    <p>If any of these resources do not answer your questions or if you need any kind of extended support, there are many ways
    to <a href="contact.php">contact us</a>!</p>
    

</div>


<?php
  print_footer();
?>
