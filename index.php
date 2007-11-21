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
    and upgrading either command-line, X11 or Aqua based open-source software on the <a href="http://www.apple.com/macosx/">
    Mac OS X</a> operating system. To that end we provide the MacPorts software package under a <a href="http://opensource.org/licenses/bsd-license.php">
    BSD License</a>, and through it easy access to thousands of ports that <a href="<?php print $guide_url . '#introduction'; ?>">
    greatly simplify</a> the task of compiling and installing open source software on your Mac.</p>
    
    <!-- brief ports tree description: monolithic, no 'stable' and 'unstable' trees; total number of available ports -->
    <p>We provide a single <a href="ports.php">software tree</a> that attempts to track the latest release of every software
    title (port) we distribute, without splitting them into &ldquo;stable&rdquo; Vs. &ldquo;unstable&rdquo; branches. There
    are currently <b><?php print ports_count(); ?></b> ports in it, distributed among <?php print categories_count(); ?> distinct
    categories, and more are being added on a regular basis.</p>
    
    <!-- Cue to "Support & Development" section & project guide -->
    <p>For more information on installing MacPorts please see the <a href="install.php">installation</a> section of this site
    and explore the myriad of download options we provide, along our base system requirements for proper functioning. If you
    run into any problems installing and/or using MacPorts we also have many options to help you, depending on how you wish to
    get <a href="contact.php">get in touch with us</a>. Other important help resources are our online documentation, A.K.A
    <a href="<?php print $guide_url; ?>">The MacPorts Guide</a>, and our <a href="<?php print $trac_url; ?>">Trac portal</a>
    Wiki server &amp; bug tracker.</p>
    
    <!-- how to contribute and/or join, cue to 'contact.php' -->
    <p>if you are interested in participating and/or joining The MacPorts Project in any way then don't hesitate to contact the
    project's management team, &ldquo;<a href="contact.php#portmgr">PortMgr</a>&rdquo;, to explain your particular interest and
    make a formal petition. We're always looking for more helping hands that can extend and improve our ports tree and take
    MacPorts itself beyond its current limitations and into new areas of the vast software packaging field. We're eager to hear
    from you!</p>

    <!-- latest available release & cue to install.php -->
    <p><b>Current MacPorts <a href="install.php">release</a>: <?php print $mp_version_latest; ?></b></p>

    <!-- News & blog section -->
    <h2 class="hdr">Project News &amp; Blog</h2>
    

</div>


<?php
    print_footer();
?>
