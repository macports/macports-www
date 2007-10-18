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
        where ticket activity on our <a href="<?php print $trac_url; ?>">Trac issue tracker</a> is posted to. This list
        is currently disabled, however.</li>
    </ul>

    <p>Even though everyone is free to subscribe to any of our mailing lists, they are closed to non-subscribers due to
    basic spam control policies. Members are expected to abide by the very simple <a href="http://www.dtcc.edu/cs/rfc1855.html">
    Netiquette guidelines</a> that are common to most open forums when posting; of particular relevance is sticking to plain
    text messages, reducing the number and size of attachments in any way possible and, last but not least, searching the
    archives before raising a question.</p>

    <p>Needless to say, providing us with as much information as you can gather will help us help you in turn diagnosing any
    problems you may be experiencing, so always remember to use <kbd>port(1)</kbd>'s <kbd>-v</kbd> or <kbd>-d</kbd> flags for
    verbose and debugging output if you want to post an error message MacPorts is giving you, for example. Platform information
    such as operating system (e.g. 10.4.10) and any third party software that may exist in <kbd>/usr/local</kbd> is also very
    useful information.</p>

    <p>The private and read-only &ldquo;<?php print obfuscate_email("macports-mgr@lists.macosforge.org"); ?>&rdquo; mailing
<!-- we need a link down here pointing to some page detailing the portmgr team - guide authors? ;-) -->
    list is where you should send mail to in case you need to get in touch with the <a href="">MacPorts management team</a>
    (A.K.A. &ldquo;portmgr&rdquo;), in case you have any administrative request and/or question or if you wish to discuss
    anything you might feel is of private nature (like the interaction between MacPorts and NDA'd software).</p>

    <h3 class="subhdr">Bug Tracker</h3>

    <p>We use the popular <a href="http://trac.edgewall.org/">Trac</a> web-based tool for our <a href="<?php print $trac_url .
    'roadmap'; ?>">bug tracking</a> and <a href="<?php print $trac_url . 'wiki'; ?>">Wiki</a> needs, thus buying ourselves
    seamless read-only integration with our SVN repository through its <a href="<?php print $trac_url . 'browser'; ?>">source
    browser</a> and the project <a href="<?php print $trac_url . 'timeline'; ?>">timeline</a> (where ticket activity can also
    be viewed). Note that in order to interact with Trac for anything other than viewing only operations you need to <a
    href="http://www.macosforge.org/wp-register.php">register</a> with Mac OS Forge for a Wordpress/Trac combined account.</p>

    <p>If you think you've found a bug either in one of our <a href="ports.php">available ports</a> or in MacPorts itself,
    feel free to <a href="<?php print $trac_url . 'newticket'; ?>">open a ticket</a> to help us look into the problem.
    Please keep in mind that we usually get a fairly high number of duplicate reports for common problems and therefore appreciate
    any help we can get in the process of streamlining our ticket dutties. <a href="<?php print $trac_url . 'search'; ?>">
    Searching</a> the database and reading our <a href="<?php print $trac_url . 'wiki/FAQ'; ?>">FAQ</a> to see if your report
    has already been filed is recommended, as well as reading the <a href="<?php print $guide_url . '#project.tickets'; ?>">
    ticketing guidelines</a> that will help you create a better report.</p>

    <p>Viewing existing tickets through the facilities of predefined and custom <a href="<?php print $trac_url . 'report'; ?>">
    reports</a> that allow you to customize queries is also available.</p>

    <h3 class="subhdr">IRC</h3>

    <p>For a more real-time discussion of any MacPorts related topic, the <a href="irc://chat.freenode.net/#MacPorts">#MacPorts</a>
    channel on the <a href="http://freenode.net/">Freenode network</a> is where some of us usually hang out, MacPorts developers
    and community members alike. Everyone is free and welcomed to join us, even if it is for a random fun conversation or
    a productive troubleshooting session, but please keep in mind that no one is guaranteed to be around at any particular
    moment and that channel members are not obligated to answer your questions. If you fail to get any traction at any time
    do not take it personally and simply direct your questions to the mailing lists detailed above.</p>

    <h3 class="subhdr">Other</h3>

    <p>Other miscellaneous venues you can use to learn about the MacPorts project and its activities are the <a href="<?php print
    $trac_url . 'wki/MacPortsDevelopers'; ?>">team members page</a> in our Wiki and our CIA <a href="http://cia.vc/stats/project/MacPorts">
    project page</a>, where you can also view our SVN commit activity and many other types of project statistics.</p>

</div>

<?php
    print_footer();
?>
