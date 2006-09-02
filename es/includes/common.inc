	<?php

# $Id$
# Copyright (c) 2004, OpenDarwin

######################################################################

# print the current darwinports version
$dp_version = "1.3.2";
$dp_version_dmg = "1.3.1";

######################################################################
	  
# print the page header

		function print_header($title, $encoding) {
			global $DOCUMENT_ROOT;
	?>
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
			"http://www.w3.org/TR/xhtml/DTD/xhtml1-strict.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
			<head>
				<title><?php echo ("$title"); ?></title>
				<meta http-equiv="Content-type" content="text/html; charset=<?php echo("$encoding"); ?>" />
				<meta name="author" content="Jim Mock (mij@opendarwin.org)" />
				<meta name="copyright" content="2003, OpenDarwin" />
				<meta name="robots" content="all" />
				<link rel="stylesheet" type="text/css" href="/dp.css" />
				<link rel="alternate" type="application/rss+xml" href="http://www.darwinports.org/dp_news.xml" />
			</head>
			
			<body>

			<?php check_referer(); ?>

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
######################################################################
function check_referer() {

	 global $_SERVER;

	 if (preg_match("/darwinports.com/", $_SERVER['HTTP_REFERER'])) {
?>
	<div class="referer_box">
	     <h1>El sitio oficial de DarwinPorts</h1>

	     <p>Ud. ha llegado al <b>Sitio Oficial de DarwinPorts</b> desde <i>darwinports.com</i>.</p>

	     <p><i>darwinports.com</i> <b>no es el sitio oficial del proyecto DarwinPorts</b>,
	     ni es un espejo del sitio oficial. <b>No existe relacion alguna</b> entre el
	     <i>proyecto DarwinPorts</i> y <i>darwinports.com</i>.</p>

	     <p>La información que puede haber obtenido en <i>darwinports.com</i> puede ser
	     incorrecta o vieja y no es mantenida por el <i>proyecto DarwinPorts</i>. Para la
	     información más acertada sobre DarwinPorts, por favor marque esta página,
	     <a href="http://www.darwinports.org>www.darwinports.org</a>.</p>
	
	</div>

<?php


	 }
}

?>
