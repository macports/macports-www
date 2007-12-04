<?php

# -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:filetype=php:et:sw=4:ts=4:sts=4
# $Id$
# Copyright (c) 2004, OpenDarwin.
# Copyright (c) 2004-2007, The MacPorts Project.


######################################################################

# MacPorts version variables:
$mp_version_major = '1.5.0';
$mp_version_latest = '1.5.2';


######################################################################

# Some useful URL abstractions:
$trac_url = 'http://trac.macports.org/projects/macports/';
$svn_url = 'http://svn.macports.org/repository/macports/';
$downloads = $svn_url . 'downloads/MacPorts-' . $mp_version_major . '/';
$leopard_dmg = $downloads . 'MacPorts-' . $mp_version_major . '-10.5.dmg';
$tiger_dmg = $downloads . 'MacPorts-' . $mp_version_major . '-10.4.dmg';
$panther_dmg = $downloads . 'MacPorts-' . $mp_version_major . '-10.3.dmg';
$bz2_tarball = $downloads . 'MacPorts-' . $mp_version_major . '.tar.bz2';
$gz_tarball = $downloads . 'MacPorts-' . $mp_version_major . '.tar.gz';
$checksums = $downloads .  'MacPorts-' . $mp_version_major . '.chk.txt';
$guide_url = 'http://geeklair.net/macports_guide/';


#####################################################################

# Ports database connection parameters:
$portsdb_host = 'localhost';
$portsdb_name = 'macports';
$portsdb_user = 'macports';
$portsdb_passwd = trim(file_get_contents('/opt/local/share/macports/resources/portmgr/script_data'));


######################################################################

# Page header:
function print_header($title, $encoding) {
    global $MPWEB, $mp_version_major, $trac_url, $svn_url, $downloads, $guide_url;
    
    header("Content-Type: application/xhtml+xml; charset=$encoding");
    include("$MPWEB/includes/header.inc");
    print_warnings();
}


######################################################################

# Print some useful warnings:
function print_warnings() {
    global $MPWEB;
    
    include("$MPWEB/includes/warnings.inc");

}


######################################################################

# Total count of currently available ports:
function ports_count() {
    global $portsdb_name;

    $result = mysql_query("SELECT count(name) FROM $portsdb_name.portfiles") or die("Error: " . mysql_error());
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

    $result = mysql_query("SELECT COUNT(DISTINCT category) FROM $portsdb_name.categories") or die ("Error: " . mysql_error());
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
function obfuscate_email($email) {
    $IMGDIR = '/img';
    
    return "<span class='email'>" . str_replace('@', "<img src='$IMGDIR/at.gif' alt='at' />", $email) . "</span>";
}


######################################################################

# Page footer:
function print_footer() {
    global $MPWEB;

    include("$MPWEB/includes/footer.inc");
}


######################################################################

function print_db_error() {
       print "
        <div id='content'>
          <h2 class='hdr'>MacPorts Portfiles</h2>
          <p>Our database is currently unavailable. We hope to have it back soon!</p>
        </div>
             ";
       print_footer();
       die();
}

