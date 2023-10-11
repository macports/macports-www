<?php

include("includes/common.inc");

$by = isset($_GET['by']) ? $_GET['by'] : '';
$substr = isset($_GET['substr']) ? $_GET['substr'] : '';

$seeother = false;
// URL for "All Ports" page [ports.macports.org/search/]
$newurl = $portdb_url . 'search/';
switch ($by) {
    case 'name':
    case 'library':
        $newurl .= '?q=' . rawurlencode($substr) . '&name=on';
        break;
    case 'category':
        $newurl .= '?selected_facets=categories_exact:' . rawurlencode($substr);
        break;
    case 'maintainer':
        /* ports.macports.org only groups by GitHub user, probably not worth
         * the effort to save those */
        $seeother = true;
        break;
    case 'variant':
        $newurl .= '?selected_facets=variants_exact:' . rawurlencode($substr);
        break;
    case 'platform':
        /* ports.macports.org does not allow searching by platform. */
        $seeother = true;
        break;
    case 'all':
    case '':
        // do nothing, $newurl and $seeother already set
        break;
}

/* 301 Moved Permanently, 303 See Other */
header('Location: ' . $newurl, true, $seeother ? 303 : 301);
exit();

?>
