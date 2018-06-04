<?php

# -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:filetype=php:et:sw=4:ts=4:sts=4
# Copyright (c) 2004, OpenDarwin.
# Copyright (c) 2004-2007, The MacPorts Project.


######################################################################

# MacPorts version variables:
$macports_version_latest = '2.5.1';


######################################################################

# Some useful URL abstractions:
$trac_url = 'https://trac.macports.org/';
$mailman_url = 'https://lists.macports.org/mailman/listinfo/';
$pipermail_url = 'https://lists.macports.org/pipermail/';
$github_url = 'https://github.com/macports/';
$svn_url = 'https://svn.macports.org/repository/macports/';
$build_url = 'https://build.macports.org/';
$mp_downloads = 'https://distfiles.macports.org/MacPorts/';
//$sf_downloads = 'http://downloads.sourceforge.net/project/macports/MacPorts/' . $macports_version_latest . '/';
$gh_downloads = 'https://github.com/macports/macports-base/releases/download/v' . $macports_version_latest . '/';
$downloads = $gh_downloads;
$downloads_overview = 'https://github.com/macports/macports-base/releases/tag/v' . $macports_version_latest;
$highsierra_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.13-HighSierra.pkg';
$sierra_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.12-Sierra.pkg';
$elcapitan_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.11-ElCapitan.pkg';
$yosemite_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.10-Yosemite.pkg';
$mavericks_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.9-Mavericks.pkg';
$mountainlion_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.8-MountainLion.pkg';
$lion_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.7-Lion.pkg';
$snowleopard_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.6-SnowLeopard.pkg';
$leopard_dmg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.5-Leopard.dmg';
$tiger_dmg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.4-Tiger.dmg';
$bz2_tarball = $downloads . 'MacPorts-' . $macports_version_latest . '.tar.bz2';
$gz_tarball = $downloads . 'MacPorts-' . $macports_version_latest . '.tar.gz';
$checksums = $downloads .  'MacPorts-' . $macports_version_latest . '.chk.txt';
$guide_url = 'https://guide.macports.org/';


#####################################################################

# Page header:
function print_header($title, $encoding) {
    global $trac_url, $downloads_overview, $github_url, $guide_url;

    require_once 'AcceptMime.class.php';
    $accept_mime = new AcceptMime();
    $mime_type = "text/html";
    header("Content-Type: $mime_type; charset=$encoding");

    include("header.inc");
    print_warnings();
}


######################################################################

# Print some useful warnings:
function print_warnings() {
    include("warnings.inc");

}


######################################################################

# Connect to the portsdb and gather miscellaneous information:
function portsdb_gather_information() {
    $script = basename($_SERVER['PHP_SELF']);

    $portsdb_connection = FALSE;
    if (function_exists('pg_connect')) {
        $portsdb_connection = pg_connect("");
    }
    if ($portsdb_connection === FALSE) {
        switch ($script) {
            case "index.php":
                $portsdb_info = array(
                    'connection_handler' => FALSE,
                    'num_ports' => 'a lot of',
                    'num_categories' => 'many'
                );
                break;
            case "ports.php":
                print_header("The MacPorts Project", "utf-8");
                print '
                    <div id="content">
                        <h2 class="hdr">MacPorts Portfiles</h2>
                        <p>Our database is currently unavailable. We hope to have it back soon!</p>
                    </div>
                ';
                print_footer();
                die();
                break;
            default:
                print_footer();
                die();
                break;
        }
    } else {
        $portsdb_info = array(
            'connection_handler' => $portsdb_connection,
            'num_ports' => ports_count(),
            'num_categories' => categories_count()
        );
    }

    return $portsdb_info;

}


######################################################################

# Total count of currently available ports:
function ports_count() {
    $result = pg_query("SELECT COUNT(DISTINCT name) FROM portfiles");
    if ($result) {
        $row = pg_fetch_array($result);
        $count = $row[0];
    } else {
        $count = 0;
    }
    return $count;
}


######################################################################

# Total count of port categories:
function categories_count() {
    $result = pg_query("SELECT COUNT(DISTINCT category) FROM categories");
    if ($result) {
        $row = pg_fetch_array($result);
        $count = $row[0];
    } else {
        $count = 0;
    }
    return $count;
}


######################################################################

# Obfuscate e-mail addresses:
# Input: e-mail address in plain text
# Output: obfuscated e-mail address in HTML
function obfuscate_email($email) {
    $IMGDIR = '/img';
    return '<span class="email">' . str_replace('@', "<img src=\"$IMGDIR/at.gif\" alt=\"at\" />", htmlspecialchars($email)) . '</span>';
}


######################################################################

# Page footer:
function print_footer() {
    include("footer.inc");
}
