<?php
    /* -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:filetype=php:et:sw=4:ts=4:sts=4 */
    /* $Id$ */
    $MPWEB = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']);
    include_once("$MPWEB/includes/common.inc");
    include_once("$MPWEB/includes/news.inc");
    print_header('MacPorts -- Home', 'utf-8');
?>

<!--
Things we should address when rewriting this page:
 *) project description (general information, including project license & latest available release);
 *) mission goals;
 *) brief ports tree description (monolithic, no 'stable' and 'unstable' trees, for instance) and total number of available ports, cue to 'ports.php';
 *) system requirements, cue to 'install.php';
 *) FAQ reference as a cue to "Support & Development" section & project guide;
 *) how to contribute and/or join, cue to 'contact.php';
 *) News section, linking to wordpress blog;
 *) something else?
-->

<div id="content">

    <h2 class="hdr">Introduction to MacPorts</h2>

    <p>The MacPorts Project's main goal is to provide an easy way to install various open-source software
    products on the <a href="http://www.apple.com/macosx/">Mac OS X</a> operating system.</p>

    <p>There are currently about <?php echo ports_count(); ?> completed and usable <a href="ports.php">ports</a>,
    with more being added on a regular basis. You can track recently added ports by subscribing to the
    <a href="http://lists.macosforge.org/mailman/listinfo/macports-changes">macports-changes</a> mailing list.</p>

    <p>For more information on obtaining and installing MacPorts, please see the <a href="install.php">installing
    MacPorts</a> section of this site. Also be sure to check out the <a href="<?php print $guide_url; ?>">documentation</a>,
    and if and if you have questions or run into problems, you can get help at our <a href="help.php">help section</a>.
    The <a href="<?php print $trac_url . 'wiki'; ?>">MacPorts Wiki</a> is also a good resource for general and
    miscellaneous help, specially the ongoing <a href="<?php print $trac_url . 'wiki/FAQ'; ?>">FAQ</a>
    effort.</p>

    <p>Bug reports, feature requests, and new ports should be submitted as <a href="<?php print $trac_url . 'newticket'; ?>">
    new tickets</a> into our Trac system. Please consult the <a href="<?php print $guide_url . '#project.tickets'; ?>">
    documentation</a> to improve the processing of your ticket(s).</p>

    <p>For information on becoming an official member of the MacPorts project with write access to our subversion
    repository, please consult the <a href="<?php print $guide_url . '#project.membership'; ?>">relevant documentation</a>
    detailing our membership requirements and resulting duties &amp; benefits from holding a MacPorts account.</p>

    <p><b>Current MacPorts <a href="install.php">release</a>: <?php print $mp_version_latest; ?></b></p>

    <div id="news">

        <h2 class="hdr">Project News</h2>

<?php
        print_headlines();
?>
        <p>You can also browse our <a href="archives.php">news archives</a>.</p>
    </div>

</div>

<?php
    print_footer();
?>
