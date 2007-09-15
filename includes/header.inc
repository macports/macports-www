<?php
/* $Id$ */
$PHP_SELF = $_SERVER['PHP_SELF'];
global $mp_version_major, $trac_url, $svn_url, $downloads;
?>

<h1>
    <a href="http://www.macports.org/" title="MacPorts"><span class="accessibility">MacPorts</span></a>
</h1>
<p class="accessibility"><a href="#content">Skip to Content</a></p>
<div id="header">
    <a id="download" href="getmp.php"><span class="accessibility">Download MacPorts</span></a>
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
                    'Get MacPorts' => 'getmp.php',
                    'Available Ports' => 'ports.php',
                    'Documentation' => 'http://geeklair.net/new_macports_guide',
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
                    'MacPorts Downloads' => $downloads,
                    'MacPorts FAQ' => $trac_url . 'wiki/FAQ',
                    'Subversion Repository' => $svn_url,
                    'Report a Bug' => $trac_url . 'newticket'
                );
                foreach ($shortcuts as $title => $url) {
                    if (basename($PHP_SELF) == $url) {
                        echo "<li class=\"selected\"><a href=\"$url\" title=\"$title\">$title</a></li>";
                    } else {
                        echo "<li><a href=\"$url\" title=\"$title\">$title</a></li>";
                    }
                }
?>
            </ul>
        </dd>
    </dl>
</div>

<p class="warning"> Warning: This is just a test installation of a new design for the MacPorts project page,
official site is located at <a href="http://www.macports.org">http://www.macports.org</a> as always.</p>
