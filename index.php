<?php
    /* -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:filetype=php:et:sw=4:ts=4:sts=4 */
    /* Copyright (c) 2007, The MacPorts Project. */
    /* $Id$ */
    $MPWEB = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']);
    include_once("$MPWEB/includes/common.inc");
    print_header('The MacPorts Project -- Home', 'utf-8');
?>


<div id="content">

    <h2 class="hdr">The MacPorts Project Homepage</h2>

    <!-- brief project description: general information, project license, mission goals -->
    <p>The MacPorts Project is an open-source community initiative to design an easy-to-use system for compiling, installing,
    and upgrading open-source software on the <a href="http://www.apple.com/macosx/">Mac OS X</a> operating system. To that
    end we provide the <a href="install.php">MacPorts software package</a> under a <a href="http://opensource.org/licenses/bsd-license.php">
    BSD License</a>, and through it easy access to thousands of <a href="<?php print $guide_url . '#introduction'; ?>">ports</a>
    that greatly simplify the task of compiling and installing open source software on your Mac.</p>
    
    <!-- brief ports tree description: monolithic, no 'stable' and 'unstable' trees; total number of available ports -->
    <p>We provide a single <a href="ports.php">software tree</a> that attempts to track the latest release of every software
    title (port) we distribute, without splitting them into &ldquo;stable&rdquo; Vs. &ldquo;unstable&rdquo; categories. There
    are currently <b><?php print ports_count(); ?></b> ports in it and more are being added on a regular basis.</p>
    
    <!-- latest available release & cue to install.php -->
    <p><b>Current MacPorts <a href="install.php">release</a>: <?php print $mp_version_latest; ?></b></p>

    <!-- Cue to "Support & Development" section & project guide -->
    <p>problems with installing and using MacPorts, project guide...</p>
    
    <!-- how to contribute and/or join, cue to 'contact.php' -->
    <p>if you are interested in participating/joining in any way...</p>

    <!-- News & blog section -->
    <h2 class="hdr">Project News &amp; Blog</h2>
    

</div>


<?php
    print_footer();
?>
