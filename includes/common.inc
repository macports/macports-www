<?php

# -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:filetype=php:et:sw=4:ts=4:sts=4
# Copyright (c) 2004, OpenDarwin.
# Copyright (c) 2004-2007, The MacPorts Project.


######################################################################

# MacPorts version variables:
$macports_version_latest = '2.8.1';


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
$sonoma_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-14-Sonoma.pkg';
$ventura_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-13-Ventura.pkg';
$monterey_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-12-Monterey.pkg';
$bigsur_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-11-BigSur.pkg';
$catalina_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.15-Catalina.pkg';
$mojave_pkg = $downloads . 'MacPorts-' . $macports_version_latest . '-10.14-Mojave.pkg';
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
$portdb_url = 'https://ports.macports.org/';


#####################################################################

# Page header:
function print_header($title, $encoding) {
    global $trac_url, $downloads_overview, $github_url, $guide_url, $portdb_url;

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
