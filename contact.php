<?php
    /* -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:filetype=php:et:sw=4:ts=4:sts=4 */
    /* $Id$ */
    $MPWEB = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']);
    include_once("$MPWEB/includes/common.inc");
    include_once("$MPWEB/includes/email.inc");
    print_header('MacPorts -- Contact Us', 'utf-8');
?>

<div id="content">

    <h2 class="hdr">Getting in Touch With Us</h2>

    <p>There are a number of ways in which you can get in contact with the MacPorts project, either the core developers
    and ports maintainers behind it and/or members of its broad user base.</p>

    <h3 class="subhdr">Mailing Lists</h3>

    <p>The MacPorts project hosts a number of purpose specific mailing lists you can freely subscribe to:</p>

    <ul>
        <li><a href="http://lists.macosforge.org/mailman/listinfo/macports-users/">MacPorts Users</a> mailing list,
        our main support forum for MacPorts usage and general discussion of MacPorts installed software. A moderate
        volume list with archives located <a href="http://lists.macosforge.org/pipermail/macports-users/">here</a>.</li>
        <li><a href="http://lists.macosforge.org/mailman/listinfo/macports-dev/">MacPorts Developers</a> mailing list,
        an open forum meant for the development of MacPorts itself and its &ldquo;Portfiles&rdquo;. This is where all
        discussion pertaining to our development roadmap and Portfile writing best practices are held. A low volume list
        with archives located <a href="http://lists.macosforge.org/pipermail/macports-dev/">here</a>.</li>
        <li><a href="http://lists.macosforge.org/mailman/listinfo/macports-changes/">MacPorts Changes</a> mailing list,
        where the logs of commits to our <a href="<?php print $svn_url; ?>">SVN repository</a> get posted to (including
        commits to both the &rdquo;base&ldquo; code and ports tree, among others). A moderate to low volume list with
        archives located <a href="http://lists.macosforge.org/pipermail/macports-changes/">here</a>.</li>
        <li><a href="http://lists.macosforge.org/mailman/listinfo/macports-tickets/">MacPorts Tickets</a> mailing list,
        where ticket activity on our <a href="<?php print $trac_url ; ?>">Trac issue tracker</a> is posted to. This list
        is currently disabled, however.</li>
    </ul>

    <p>Even though everyone is free to subscribe to any of our mailing lists, they are closed to non-subscribers due to
    basic spam control policies. Members are expected to abide by the very simple <a href="http://www.dtcc.edu/cs/rfc1855.html">
    Netiquette guidelines</a> that are common to most open forums when posting; of particular relevance is sticking to plain
    text messages, reducing the number and size of attachments in any way possible and, last but not least, searching the
    archives before raising a question.</p>

    <p>The private and read-only &ldquo;<?php print obfuscate_email("macports-mgr@lists.macosforge.org"); ?>&rdquo; mailing
<!-- we need a link down here pointing to some page detailing the portmgr team - guide authors? ;-) -->
    list is where you should send mail to in case you need to get in touch with the <a href="">MacPorts management team</a>
    (A.K.A. &ldquo;portmgr&rdquo;), in case you have any administrative request and/or question or if you wish to discuss
    anything you might feel is of private nature (like the interaction between MacPorts and NDA'd software).</p>

    <h3 class="subhdr">Trac</h3>

    <p></p>

    <h3 class="subhdr">IRC</h3>

    <p></p>

    <h3 class="subhdr">Other</h3>

    <p></p>

</div>

<?php
    print_footer();
?>
