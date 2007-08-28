<?php

# $Id$
# Copyright (c) 2003, OpenDarwin

######################################################################

# print the current MacPorts version
$mp_version = "1.5.2";
$mp_version_dmg = "1.5.0";

######################################################################

# print the page header
function print_header($title, $encoding) {
  global $DOCUMENT_ROOT;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title><?php echo("$title"); ?></title>
    <meta http-equiv="Content-type" content="text/html; charset=<?php echo("$encoding"); ?>" />
    <meta name="author" content="Jim Mock (mij@macports.org)" />
    <meta name="copyright" content="2003, OpenDarwin" />
    <meta name="author" content="Juan Manuel Palacios (jmpp@macports.org)" />
    <meta name="copyright" content="2007, MacPorts Team" />
    <meta name="robots" content="all" />
    <link rel="stylesheet" type="text/css" href="/macports/mp.css" />
    <link rel="alternate" type="application/rss+xml" href="/macports/mp_news.xml" />
  </head>

  <body>

  <?php check_referer(); ?>
  
  <div id="main">

<?php
  include("$DOCUMENT_ROOT/macports/includes/header.inc");
}

###################################################################### 

# print the page footer
function print_footer() {
  global $DOCUMENT_ROOT;

  include("$DOCUMENT_ROOT/macports/includes/footer.inc");

  echo "  </body>\n";
  echo "</html>\n";
}

######################################################################

# Print a total count of currently available ports:
function ports_count() {
         $result = mysql_query("SELECT count(*) FROM macports.portfiles");
         if ($result) {
           $row = mysql_fetch_array($result);
           $count = $row[0];
         } else {
           $count = 0;
         }
         return $count;
}

###################################################################### 

# Warn against darwinports.com leach!
function check_referer() {
	global $_SERVER;
	if (preg_match("/darwinports.com/", $_SERVER['HTTP_REFERER'])) {
?>
	<div class="referer_box">
		<h1>The Official MacPorts Web Site, home of the project previously known as DarwinPorts</h1>
		
		<p>You have arrived at the <b>Official MacPorts Web Site</b> from <i>darwinports.com</i>.</p>
	  
		<p><i>darwinports.com</i> <b>is not the official MacPorts Web Site</b>, nor is it a mirror of
                the <i>Official MacPorts Web Site</i>.  There is <b>no relationship</b> between the <i>MacPorts
                Project</i> and <i>darwinports.com</i>.</p>

		<p>The information you may have been presented with on <i>darwinports.com</i> may be incorrect
                or outdated and is not endorsed in any way by the <i>MacPorts Project</i>. For the most accurate
                information about MacPorts, please bookmark this site, <a href="http://www.macports.org">http://www.macports.org</a>.</p>
	</div>

<?php
	}
}	
?>
