<?php
    /* -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:filetype=php:et:sw=4:ts=4:sts=4 */
    /* $Id$ */
    /* Copyright (c) 2004, OpenDarwin. */
    /* Copyright (c) 2004-2007, The MacPorts Project. */
    $PHP_SELF = $_SERVER['PHP_SELF'];
    global $mp_version_major, $trac_url, $svn_url, $downloads, $guide_url;
?>


<h1><a href="http://www.macports.org/" title="The MacPorts Project"><span class="accessibility">The MacPorts Project</span></a></h1>

<p class="accessibility"><a href="#content">Skip to Content</a></p>


<div id="header">

    <a id="download" href="install.php"><span class="accessibility">Download MacPorts</span></a>
    <span class="accessibility">View site in</span>
    <span><a href="#" id="language"><img src="img/en-enabled.png" alt="English" width="30" height="48" /></a></span>
    <span id="languages">
        <a href="#"><img src="img/fr-disabled.png" alt="Fran&ccedil;ais" width="30" height="48" /></a><a href="#"><img src="img/es-disabled.png" alt="Espa&ntilde;ol" width="30" height="48" /></a><a href="#"><img src="img/ru-disabled.png" alt="&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081;&nbsp;(Russkij)" width="30" height="48" /></a><a href="#"><img src="img/it-disabled.png" alt="Italiano" width="30" height="48" /></a>
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
                    'Support &amp; Development' => $trac_url,
                    'Contact Us' => 'contact.php',
                    'Blog' => 'blog/'
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
                    'Available Downloads' => $downloads,
                    'MacPorts FAQ' => $trac_url . 'wiki/FAQ',
                    'Report a Bug' => $trac_url . 'newticket',
                    'Subversion Repository' => $svn_url,
                    'MacPorts Team' => $trac_url . 'wiki/MacPortsDevelopers',
                    'Becoming a Member' => $guide_url . '#project.membership',
                    'Mac OS Forge' => 'http://www.macosforge.org/'
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


<p class="warning"> Warning: This is just a test installation of a new design for The MacPorts Project page,
official site is located at <a href="http://www.macports.org">http://www.macports.org</a> as always.</p>
