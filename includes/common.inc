<?php

# -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:filetype=php:et:sw=4:ts=4:sts=4
# $Id$
# Copyright (c) 2004, OpenDarwin.
# Copyright (c) 2004-2007, The MacPorts Project.


######################################################################

# MacPorts version variables:
$macports_version_latest = '2.3.4';


######################################################################

# Some useful URL abstractions:
$trac_url = 'https://trac.macports.org/';
$svn_url = 'https://svn.macports.org/repository/macports/';
$normal_downloads = 'https://distfiles.macports.org/MacPorts/';
$sf_downloads = 'http://downloads.sourceforge.net/project/macports/MacPorts/' . $macports_version_latest . '/';
$downloads = $normal_downloads;
$sierra_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.12-Sierra.pkg';
$elcapitan_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.11-ElCapitan.pkg';
$yosemite_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.10-Yosemite.pkg';
$mavericks_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.9-Mavericks.pkg';
$mountainlion_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.8-MountainLion.pkg';
$lion_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.7-Lion.pkg';
$snowleopard_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.6-SnowLeopard.pkg';
$leopard_dmg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.5-Leopard.dmg';
#$tiger_dmg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.4-Tiger.dmg';
$tiger_dmg = $normal_downloads . 'MacPorts-' . '2.3.3' . '-10.4-Tiger.dmg';
$bz2_tarball = $downloads . 'MacPorts-' . $macports_version_latest . '.tar.bz2';
$gz_tarball = $downloads . 'MacPorts-' . $macports_version_latest . '.tar.gz';
$checksums = $downloads .  'MacPorts-' . $macports_version_latest . '.chk.txt';
$guide_url = 'https://guide.macports.org/';


#####################################################################

# Ports database connection parameters:
$portsdb_host = 'data.macports.org';
$portsdb_name = 'macports';
$portsdb_user = 'macports';
$portsdb_passwd = trim(file_get_contents('/var/www/script_data'));


######################################################################

# Page header:
function print_header($title, $encoding) {
    global $trac_url, $svn_url, $downloads, $guide_url;

    require_once 'AcceptMime.class.php';
    $accept_mime = new AcceptMime();
    $mime_type = "text/html";
    if ($accept_mime->acceptable("application/xhtml+xml")) {
        $mime_type = "application/xhtml+xml";
    }
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
function portsdb_connect($portsdb_host, $portsdb_user, $portsdb_passwd) {

    $script = basename($_SERVER['PHP_SELF']);
    
    $portsdb_connection = FALSE;
    if (function_exists('mysql_connect')) {
        $portsdb_connection = mysql_connect($portsdb_host, $portsdb_user, $portsdb_passwd);
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
    global $portsdb_name;

    $result = mysql_query("SELECT COUNT(DISTINCT name) FROM $portsdb_name.portfiles");
    if ($result) {
        $row = mysql_fetch_array($result);
        $count = $row[0];
    } else {
        $count = 0;
    }
    return $count;
}


######################################################################

# Total count of port categories:
function categories_count() {
    global $portsdb_name;

    $result = mysql_query("SELECT COUNT(DISTINCT category) FROM $portsdb_name.categories");
    if ($result) {
        $row = mysql_fetch_array($result);
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
