<?php

# $Id: common.inc,v 1.2 2004/10/27 05:28:17 wbb4 Exp $
# Copyright (c) 2003, OpenDarwin

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
    <meta name="author" content="Jim Mock (mij@opendarwin.org)" />
    <meta name="copyright" content="2003, OpenDarwin" />
    <meta name="robots" content="all" />
    <link rel="stylesheet" type="text/css" href="/dp.css" />
    <link rel="alternate" type="application/rss+xml" href="http://darwinports.opendarwin.org/dp.xml" />
  </head>

  <body>

  <?php check_referer(); ?>
  
  <div id="main">

<?php
  include("$DOCUMENT_ROOT/includes/header.inc");
}

###################################################################### 

# print the page footer
function print_footer() {
  global $DOCUMENT_ROOT;

  include("$DOCUMENT_ROOT/includes/footer.inc");

  echo "  </body>\n";
  echo "</html>\n";
}

###################################################################### 
function check_referer() {
	global $_SERVER;
	if (preg_match("/darwinports.com/", $_SERVER['HTTP_REFERER'])) {
?>
	<div class="referer_box">
		<h1>The Official DarwinPorts Web Site</h1>
		
		<p>You have arrived at the <b>Official DarwinPorts Web Site</b> from <i>darwinports.com</i>.</p>
	  
		<p><i>darwinports.com</i> <b>is not the official DarwinPorts Web Site</b>, nor is it a mirror of the <i>Official DarwinPorts Web Site</i>.  There is <b>no relationship</b> between the <i>DarwinPorts Project</i> and <i>darwinports.com</i>.</p>

		<p>The information you may have been presented with on <i>darwinports.com</i> may be incorrect or outdated and is not maintained by the <i>DarwinPorts Project</i>.  For the most accurate information about DarwinPorts, please bookmark this site, <a href="http://darwinports.opendarwin.org">http://darwinports.opendarwin.org</a>.</p>
	</div>

<?php
	}
}	
?>
