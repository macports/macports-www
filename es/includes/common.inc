	<?php

# $Id: common.inc,v 1.1 2004/04/21 23:44:59 matt Exp $
# Copyright (c) 2004, OpenDarwin

		function print_header($title, $encoding) {
			global $DOCUMENT_ROOT;
	?>
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
			"http://www.w3.org/TR/xhtml/DTD/xhtml-strict.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
			<head>
				<title><?php echo ("$title"); ?></title>
				<meta http-equiv="Content-type" content="text/html; charset=<?php echo("$encoding"); ?>" />
				<meta name="author" content="Jim Mock (mij@opendarwin.org)" />
				<meta name="copyright" content="2003, OpenDarwin" />
				<meta name="robots" content="all" />
				<link rel="stylesheet" type="text/css" href="/dp.css" />
				<link rel="alternate" type="application/rss+xml" href="http://darwinports.opendarwin.org/dp.xml" />
			</head>
			
			<body>
			<div id="main">
			
			<?php
				include("$DOCUMENT_ROOT/es/includes/header.inc");
		}
	
#########################################################################
	
# print the page footer
	function print_footer() {
		global $DOCUMENT_ROOT;
		include("$DOCUMENT_ROOT/es/includes/footer.inc");
		echo " </body>\n";
		echo " </html>\n";
	}
			?>
