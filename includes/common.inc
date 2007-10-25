<?php

# -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:filetype=php:et:sw=4:ts=4:sts=4
# $Id$
# Copyright (c) 2004-2007, MacPorts Organization
# Copyright (c) 2004, OpenDarwin


#####################################################################

# Ports database connection parameters:
$portsdb = 'macports';
$portsdb_host = 'localhost';
$portsdb_user = 'www';
$portsdb_passwd = '';
$portsdb_connect = mysql_pconnect($portsdb_host, $portsdb_user, $portsdb_passwd) or die("Can't connect to the MacPorts database!");


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


######################################################################

# Page header
function print_header($title, $encoding) {
    global $MPWEB;
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta http-equiv="Content-type" content="application/xhtml+xml; charset=<?php echo $encoding; ?>" />
        <meta name="author" content="Jim Mock (mij@macports.org)" />
        <meta name="author" content="Juan Manuel Palacios (jmpp@macports.org)" />
        <meta name="author" content="Chris Pickel (sfiera@macports.org)" />
        <meta name="copyright" content="2003, OpenDarwin" />
        <meta name="copyright" content="2007, MacPorts Team" />
        <meta name="robots" content="all" />
        <link rel="stylesheet" type="text/css" href="macports.css" />
        <script type="text/javascript" src="mootools.v1.11.js"></script>
        <script type="text/javascript" src="language.js"></script>
    </head>
<body>
<?php
    include("$MPWEB/includes/header.inc");
    check_referer();
}


###################################################################### 

# Page footer
function print_footer() {
    global $MPWEB;

    include("$MPWEB/includes/footer.inc");

    echo "    </body>\n";
    echo "</html>\n";
}


######################################################################

# Total count of currently available ports:
function ports_count() {
    global $portsdb;

    $result = mysql_query("SELECT count(*) FROM $portsdb.portfiles") or die("Error: " . mysql_error());
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
            
            <p><i>darwinports.com</i> <b>is not the official MacPorts Web Site</b>, nor is it a mirror of
            the <i>Official MacPorts Web Site</i>. There is <b>no relationship</b> between the <i>MacPorts
            Project</i> and <i>darwinports.com</i>.</p>

            <p>The information you may have been presented with on <i>darwinports.com</i> may be incorrect
            or outdated and is not endorsed in any way by the <i>MacPorts Project</i>. For the most accurate
            information about MacPorts, please bookmark this site, <a href="http://www.macports.org">http://www.macports.org</a>.</p>
            
        </div>
<?php
    }
}
?>
