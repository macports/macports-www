<?php
/* -*- coding: utf-8; mode: tcl; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:et:sw=4:ts=4:sts=4 */
/* $Id$ */
$PHP_SELF = $_SERVER['PHP_SELF'];
global $mp_version_major, $trac_url, $svn_url, $downloads, $guide_url;
?>

<h1>
    <a href="http://www.macports.org/" title="MacPorts"><span class="accessibility">MacPorts</span></a>
</h1>
<p class="accessibility"><a href="#content">Skip to Content</a></p>
<div id="header">
    <a id="download" href="install.php"><span class="accessibility">Download MacPorts</span></a>
    <span class="accessibility">View site in</span>
    <span><a href="#" id="language"><img src="img/en-enabled.png" alt="English" width="30" height="48" /></a></span>
    <span id="languages">
        <a href="#"><img src="img/fr-disabled.png" alt="Fran&ccedil;ais" width="30" height="48" /></a><a href="#"><img src="img/es-disabled.png" alt="Espa&ntilde;ol" width="30" height="48" /></a><a href="#"><img src="img/ru-disabled.png" alt="" width="30" height="48" /></a><a href="#"><img src="img/it-disabled.png" alt="Italiano" width="30" height="48" /></a>
    </span>
</div>

<div id="navigation">
    <dl>
        <dt>Getting Started</dt>
        <dd>
            <ul>
<?php
                $pages = array (
                    'Home' => 'index.php',
                    'Installing MacPorts' => 'install.php',
                    'Available Ports' => 'ports.php',
                    'Documentation' => $guide_url,
                    'Support &amp; Development' => $trac_url
                );
                foreach ($pages as $title => $url) {
                    if (basename($PHP_SELF) == $url) {
                        echo "<li class=\"selected\"><a href=\"$url\" title=\"$title\">$title</a></li>\n";
                    } else {
                        echo "<li><a href=\"$url\" title=\"$title\">$title</a></li>\n";
                    }
                }
?>
            </ul>
        </dd>
        <dt>Shortcuts</dt>
        <dd>
            <ul>
<?php
                $shortcuts = array (
                    'Downloads' => $downloads,
                    'MacPorts FAQ' => $trac_url . 'wiki/FAQ',
                    // We should either link to the new ticketing guidelines below, while at the same
                    // time including a link to trac's 'newticket' handler page on the former, or link
                    // to them off some kind of banner on the latter.
                    'Report a Bug' => $trac_url . 'newticket',
                    'Blog' => 'blog/',
                    'Subversion Repository' => $svn_url,
                    'MacPorts Team' => $trac_url . 'wiki/MacPortsDevelopers',
                    'Becoming a Member' => $guide_url . '#project.membership'
                );
                foreach ($shortcuts as $title => $url) {
                    if (basename($PHP_SELF) == $url) {
                        echo "<li class=\"selected\"><a href=\"$url\" title=\"$title\">$title</a></li>\n";
                    } else {
                        echo "<li><a href=\"$url\" title=\"$title\">$title</a></li>\n";
                    }
                }
?>
            </ul>
        </dd>
    </dl>
</div>

<p class="warning"> Warning: This is just a test installation of a new design for the MacPorts project page,
official site is located at <a href="http://www.macports.org">http://www.macports.org</a> as always.</p>
