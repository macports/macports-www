<?php
    /* -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:filetype=php:et:sw=4:ts=4:sts=4 */
    /* Copyright (c) 2007, The MacPorts Project. */
    /* $Id$ */
    $MPWEB = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']);
    include_once("$MPWEB/includes/common.inc");
    print_header('The MacPorts Project -- Home', 'utf-8');
    $portsdb_info = portsdb_connect($portsdb_host, $portsdb_user, $portsdb_passwd);
?>


<div id="content">

    <h2 class="hdr">The MacPorts Project Official Homepage</h2>

    <p>The MacPorts Project is an open-source community initiative to design an easy-to-use system for compiling, installing,
    and upgrading either command-line, X11 or Aqua based open-source software on the <a href="http://www.apple.com/macosx/">
    Mac OS X</a> operating system. To that end we provide the command-line driven MacPorts software package under a <a
    href="http://opensource.org/licenses/bsd-license.php">BSD License</a>, and through it easy access to thousands of ports
    that <a href="<?php print $guide_url . '#introduction'; ?>"> greatly simplify</a> the task of <a href="<?php print $guide_url
    . '#using'; ?>">compiling and installing</a> open-source software on your Mac.</p>
    
    <p>We provide a single software tree that attempts to track the latest release of every software title (port) we distribute,
    without splitting them into &ldquo;stable&rdquo; Vs. &ldquo;unstable&rdquo; branches, targetting mainly the current Mac OS
    X release (10.5, A.K.A Leopard) and the immediately previous one (10.4, A.K.A. Tiger). There are currently <a href="ports.php">
    <b><?php print $portsdb_info['num_ports']; ?></b> ports</a> in our tree, distributed among <?php print $portsdb_info['num_categories']; ?>
    different categories, and more are being added on a regular basis.</p>
    
    
    <h3 class="subhdr">Getting started</h3>

    <p>For information on installing MacPorts please see the <a href="install.php">installation</a> section of this site and
    explore the myriad of download options we provide and our base system requirements.</p>
    
    <p>If you run into any problems installing and/or using MacPorts we also have many options to help you, depending on how
    you wish to get <a href="contact.php">get in touch with us</a>. Other important help resources are our online documentation,
    A.K.A <a href="<?php print $guide_url; ?>"> The MacPorts Guide</a>, and our Trac <a href="<?php print $trac_url; ?>">Wiki
    server &amp; bug tracker</a>.</p>
            
    <p><b>Latest MacPorts <a href="install.php">release</a>: <?php print $mp_version_latest; ?></b></p>

    
    <h3 class="subhdr">Getting involved</h3>
    
    <p>There are many ways you can get involved with MacPorts and peer users, system administrators &amp; developers alike.
    Browse over to the &ldquo;<a href="contact.php">Contact Us</a>&rdquo; section of our site and:</p>
    
    <ul>
        <li>Explore our <a href="contact.php#Lists">mailing lists</a>, either if it is for some general user support or to 
        keep on top of the latest MacPorts developments and commits to our software repository.</li>
        <li>Check out our <a href="contact.php#Bugs">Support &amp; Development</a> portal for some bug reporting and live
        tutorials through the integrated Wiki server.</li>
        <li>Or simply come join us for a friendly <a href="contact.php#IRC">IRC chat</a> if you wish for more direct contact
        with the <a href="contact.php#Individuals">people behind</a> it all.</li>
    </ul>

    <p>If on the other hand you are interested in joining The MacPorts Project in any way, then don't hesitate to contact the
    project's management team, &ldquo;<a href="contact.php#PortMgr">PortMgr</a>&rdquo;, to explain your particular interest
    and present a formal application. We're always looking for more helping hands that can extend and improve our ports tree
    and documentation, or take MacPorts itself beyond its current limitations and into new areas of the vast software packaging
    field. We're eager to hear from you!</p>

    <br />

    <p>Browse over to our generous landlord's homepage, <a href="http://www.macosforge.org">Mac OS Forge</a>, for information
    on other related projects.</p>

</div>


<?php
    print_footer();
    if ($portsdb_info['connection_stream'] !== false) {
        mysql_close($portsdb_info['connection_stream']);
    }
?>
