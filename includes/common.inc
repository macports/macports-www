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
$guide_url = 'http://geeklair.net/new_macports_guide/';


#####################################################################

# Ports database connection parameters:
$portsdb_host = 'localhost';
$portsdb_name = 'macports';
$portsdb_user = 'www';
$portsdb_passwd = '';
$portsdb_connect = mysql_pconnect($portsdb_host, $portsdb_user, $portsdb_passwd) or die("Can't connect to the MacPorts database!");


######################################################################

# Page header
function print_header($title, $encoding) {
    global $MPWEB, $mp_version_major, $trac_url, $svn_url, $downloads, $guide_url;
    $PHP_SELF = $_SERVER['PHP_SELF'];
    
    header("Content-Type: application/xhtml+xml; charset=$encoding");
    include("$MPWEB/includes/header.inc");
    check_referer();
}


###################################################################### 

# Page footer
function print_footer() {
    global $MPWEB;

    include("$MPWEB/includes/footer.inc");
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

# Warning against darwinports.com leach!
function check_referer() {
    global $_SERVER;

    if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'darwinports.com') !== false) {
?>
        <div class="warning">
        
            <p>You have arrived at the <b>Official MacPorts Web Site</b> from <i>darwinports.com</i>.</p>
            
            <p><i>darwinports.com</i> <b>is not the official MacPorts Web Site</b>, nor is it a mirror of the <i>Official MacPorts
            Web Site</i>. There is <b>no relationship</b> between <i>The MacPorts Project</i> and <i>darwinports.com</i>.</p>

            <p>The information you may have been presented with on <i>darwinports.com</i> may be incorrect or outdated and is
            not endorsed in any way by <i>The MacPorts Project</i>. For the most accurate information about MacPorts, please
            bookmark this site, <a href="http://www.macports.org">http://www.macports.org</a>.</p>
            
        </div>
<?php
    }
}
?>
