<?

//
// File     : x11.php
// Version  : $Id: x11.php,v 1.6 2003/02/20 04:05:59 kevin Exp $
// Location : /projects/darwinports/en/x11.php
//

	include_once("$DOCUMENT_ROOT/includes/od_lib.inc.php");
	od_print_header("X11 Packages for Mac OS X", "en", "iso-8859-1", "", 0, "/projects/darwinports");
?>

<a href="http://www.apple.com/macosx/x11/"><img style="float: right;" src="images/x11link.jpg"></a>
<h2>X11 Packages for Mac OS X</h2>
<p>
The X11 packages for Mac OS X previously available here have been removed.  Instead please use the newly released binary packages available via WebDAV at <a href="http://packages.opendarwin.org/">http://packages.opendarwin.org/</a>.  Please view the <a href="http://packages.opendarwin.org/README.txt">README</a> for more information.
</p>
<p>
The DarwinPorts <a href="http://packages.opendarwin.org/Applications/UnInstaller.dmg">UnInstaller</a> may be used to remove any packages installed on your system previously downloaded from this page.  You may wish to do this before installing the new packages, since they install into different locations (/opt/local instead of /usr/local).  This UnInstaller is capapble of removing the new packges as well.
</p>
<br />
<br />
<br />
<br />
<br />
<? 
	od_print_footer("en"); 
?>
