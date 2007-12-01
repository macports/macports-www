<?php
    /* -*- coding: utf-8; mode: php; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:filetype=php:et:sw=4:ts=4:sts=4 */
    /* $Id$ */
    /* Copyright (c) 2004-2007, The MacPorts Project. */
?>


<?php
# Warning against darwinports.com leech!
if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'darwinports.com') !== false) {
?>

    <div class="warnings">

    <p>You have arrived at the <b>Official MacPorts Web Site</b> from <i>darwinports.com</i>.</p>

    <p><i>darwinports.com</i> <b>is not the official MacPorts Web Site</b>, nor is it a mirror of the <i>Official MacPorts Web
    Site</i>. There is <b>no relationship</b> between <i>The MacPorts Project</i> and <i>darwinports.com</i>.</p>

    <p>The information you may have been presented with on <i>darwinports.com</i> may be incorrect or outdated and is not endorsed
    in any way by <i>The MacPorts Project</i>. For the most accurate information about MacPorts, please bookmark this site,
    <a href="http://www.macports.org">http://www.macports.org</a>.</p>
    
    </div>

<?php        
}

# Warn about us being a valid mirror if we're not being served off htt://www.macports.org itself
if (isset($_SERVER['HTTP_HOST']) && !preg_match('%(^|\.)macports\.org$%', $_SERVER['HTTP_HOST'])) {    
?>

    <div class="warnings">

    <p>Warning: This is a temporary installation of the new &amp; re-designed website for The MacPorts Project. Official site
    is located at <a href="http://www.macports.org">http://www.macports.org</a> as always.</p>
    
    </div>

<?php
}
?>
