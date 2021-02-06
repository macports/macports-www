<?php
    /* -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:set fenc=utf-8 filetype=php et sw=4 ts=4 sts=4: */
    /* Copyright (c) 2004, OpenDarwin. */
    /* Copyright (c) 2004-2007, The MacPorts Project. */
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <title><?php print $title; ?></title>
        <meta name="author" content="Jim Mock (mij@macports.org)" />
        <meta name="author" content="Juan Manuel Palacios (jmpp@macports.org)" />
        <meta name="author" content="Chris Pickel (sfiera@macports.org)" />
        <meta name="copyright" content="2003, OpenDarwin" />
        <meta name="copyright" content="2007, The MacPorts Project" />
        <meta name="description" content="The MacPorts Project is an open-source community initiative to design an easy-to-use
        system for compiling, installing, and upgrading either command-line, X11 or Aqua based open-source software on the Mac
        OS X operating system." />
        <meta name="verify-v1" content="Gx4BI7CyPR+VN1q1Ckc6dcbuLF5NQGUaKEcm1Y/TFlY=" />
        <meta name="robots" content="all" />
        <link rel="stylesheet" type="text/css" href="macports.css" />
        <script src="mootools.js"></script>
        <script src="language.js"></script>
    </head>


    <body>

        <a class="logo" href="https://www.macports.org" alt="The MacPorts Project"></a></h1>

        <p class="accessibility"><a href="#content">Skip to Content</a></p>


        <div id="header">

            <a id="download" href="install.php"><span class="accessibility">Download MacPorts</span></a>
<!--
            <span class="accessibility">View site in</span>
            <span><a href="#" id="language"><img src="img/en-enabled.png" alt="English" /></a></span>
            <span id="languages">
                <a href="#"><img src="img/fr-disabled.png" alt="Fran&#xE7;ais" /></a>
                <a href="#"><img src="img/es-disabled.png" alt="Espa&#xF1;ol" /></a>
                <a href="#"><img src="img/ru-disabled.png" alt="&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081;&#160;(Russkij)"/></a>
                <a href="#"><img src="img/it-disabled.png" alt="Italiano" /></a>
            </span>
-->
        </div>

        <div id='primary-navigation'>
            <ul>
<?php
                $pages = array (
                            'Home' => 'index.php',
                            'Installing MacPorts' => 'install.php',
                            'Available Ports' => $portdb_url,
                            'Documentation' => $guide_url,
                            'Support &amp; Development' => $trac_url,
                            'Contact Us' => 'contact.php',
                            'News' => '/news/'
                        );
                        foreach ($pages as $title => $url) {
                            if (basename($_SERVER['PHP_SELF']) == $url) {
                                echo "<li class=\"active\"><a href=\"$url\" title=\"$title\">$title</a></li>\n";
                            } else {
                                echo "<li><a href=\"$url\" title=\"$title\">$title</a></li>\n";
                            }
                        }
?>
            </ul>
        </div>

        <div class="full-width-border">
        </div>
        <br>

        <div id="side-navigation">

            <ul>
<?php
                    $shortcuts = array (
                        'Available Downloads' => $downloads_overview,
                        'MacPorts FAQ' => $trac_url . 'wiki/FAQ',
                        'Report a Bug' => $trac_url . 'newticket',
                        'Bug reporting Guidelines' =>  $guide_url . '#project.tickets',
                        'Git Repository' => $github_url,
                        'MacPorts Team' => $trac_url . 'wiki/MacPortsDevelopers',
                        'Becoming a Member' => $guide_url . '#project.membership',
                    );
                    foreach ($shortcuts as $title => $url) {
                        if (basename($_SERVER['PHP_SELF']) == $url) {
                            echo "<li class=\"selected\"><a href=\"$url\" title=\"$title\">$title</a></li>\n";
                        } else {
                            echo "<li><a href=\"$url\" title=\"$title\">$title</a></li>\n";
                        }
                    }
?>
            </ul>
        </div>
