<?

//
// File     : x11.php
// Version  : $Id: x11.php,v 1.5 2003/02/20 17:10:46 matt Exp $
// Location : /projects/darwinports/en/x11.php
//

	include_once("$DOCUMENT_ROOT/includes/od_lib.inc.php");
	od_print_header("Paquets X11 pour Mac OS X", "fr", "iso-8859-1", "", 0, "/projects/darwinports");
?>

<a href="http://www.apple.com/macosx/x11/"><img style="float: right;" src="images/x11link.jpg"></a>
<h2>Paquets X11 pour Mac OS X</h2>
<p>
Les paquets X11 pour Mac OS X qui étaient disponibles ici ont été enlevés. Utilisez à présent les nouveaux paquets binaires disponible sur le serveur WebDAV <a href="http://packages.opendarwin.org/">http://packages.opendarwin.org/</a>. Lisez s'il vous plaît le fichier <a href="http://packages.opendarwin.org/README.txt">README</a> pour plus d'informations.
</p>
<p>
Le logiciel <a href="http://packages.opendarwin.org/Applications/UnInstaller.dmg">UnInstaller</a> prévu pour DarwinPorts peut être utilisé afin d'effacer tous paquets installés sur votre système que vous aviez téléchargé depuis cette page. Vous devriez faire ceci avant d'installer de nouveaux paquets, car depuis peu les paquets s'installent dorénavant dans un autre emplacement (/opt/local au lieu de /usr/local). UnInstaller est capable également d'effacer ces nouveaux paquets.
</p>
<br />
<br />
<br />
<br />
<br />
<? 
	od_print_footer("fr"); 
?>
