<?

//
// File     : x11.php
// Version  : $Id: x11.php,v 1.1 2003/01/13 19:11:20 matt Exp $
// Location : /projects/darwinports/en/x11.php
//

	include_once("$DOCUMENT_ROOT/includes/od_lib.inc.php");
	od_print_header("Paquets X11 pour Mac OS X", "fr", "iso-8859-1", "", 0, "/projects/darwinports");
?>

<!--<center>
<table border="0" width="500" cellspacing="0" cellpadding="3">
<tr><td>-->
<a href=http://www.apple.com/macosx/x11/><img style="float: right;" src=images/x11link.jpg></a>
<h2>Paquets X11 pour Mac OS X</h2>
<p>
Les paquets X11 suivants pour Mac OS X ont été réalisés grâce à l'infrastructure de <a href="http://www.opendarwin.org/projects/darwinports/fr/">DarwinPorts</a>. Bien que DarwinPorts s'installe par défaut dans /opt/local, ces paquets s'installeront dans /usr/local.
<br><br>
DarwinPorts est un logiciel de compilation, d'installation et de création de paquet publié sous licence BSD, conçu pour faire partie du projet OpenDarwin. Principalement écrit en TCL, DarwinPorts a été pensé pour être aisément étendu et intégré à d'autres applications, ainsi qu'être porté sur une multitude d'architectures. Le développement de DarwinPorts est actif et est actuellement supporté sur Mac OS x 10.2 et Darwin 6.0.2. Pour plus d'informations concernant DarwinPorts, reportez-vous à la <a href="http://www.opendarwin.org/projects/darwinports/fr/">page d'accueil</a> du projet.
</p>
<p align=right><strong>Suggestions </strong>: <a href=mailto:dp-feedback@opendarwin.org>dp-feedback@opendarwin.org</a></p>

<p>
<h4><img align=center src=images/package.jpg>Librairies</h4>
</p>

<p>
<strong><a name=gtk>Paquet</a></strong> : gtk
<br>
<strong>Version</strong> : 1.2.10
<br>
<strong>Description</strong> : GTK+, or the Gimp ToolKit, is a library for GUIs creating for the X Window System.
<br>
<strong>Téléchargement</strong> : <a href="http://www.opendarwin.org/projects/darwinports/packages/usr/gtk.dmg">gtk.dmg</a>
</p>
<hr>

<p>
<strong>Paquet</strong> : gtk2 
<br>
<strong>Version</strong> : 2.0.9
<br>
<strong>Description</strong> : This is GTK+ version 2.0.9. GTK+, or the Gimp ToolKit, is a library for creating GUIs for the X Windows System.
<br>
<strong>Téléchargement</strong> : <a href="http://www.opendarwin.org/projects/darwinports/packages/usr/gtk2.dmg">gtk2.dmg</a>
</p>
<hr>
<p>
<strong>Paquet</strong> : <a name=qt3>qt3</a>
<br>
<strong>Version</strong> : 3.0.5
<br>
<strong>Description</strong> : TrollTech's C++ toolkit for writing cross-platform GUI applications.
<br>
<strong>Téléchargement</strong> : <a href="http://www.opendarwin.org/projects/darwinports/packages/usr/qt3.dmg">qt3.dmg</a>
</p>
<hr>
<p>
<strong>Paquet</strong> : openMotif
<br>
<strong>Version</strong> : 2.2.2
<br>
<strong>Description</strong> : The Open Group's full version of Motif based on the original OSF sources.
<br>
<strong>Téléchargement</strong> : <a href="http://www.opendarwin.org/projects/darwinports/packages/usr/openMotif.dmg">openMotif.dmg</a>
</p>
<hr>
<p>
<h4><img align=center src=images/package.jpg>Applications</h4></p>
<p>

<p>
<strong>Paquet</strong> : Gimp
<br>
<strong>Version</strong> : 1.2.3
<br>
<strong>Description</strong> : The GNU Image Manipulation Program (GIMP) is a powerful tool for the preparation and manipulation of digital images.
<br>
<strong>Dépendance(s)</strong> : <a href=#gtk>gtk</a>
<br>
<strong>Téléchargement</strong> : <a href="http://www.opendarwin.org/projects/darwinports/packages/usr/gimp.dmg">gimp.dmg</a>
<br>
<strong>Note</strong> : A new package was posted at Jan 8th, 03:04 GMT. This update fixes jpeg support and can be installed over a previously installed copy of The Gimp.
</p>
<hr>
<p>
<strong>Paquet</strong> : xchat
<br>
<strong>Version</strong> : 1.8.10
<br>
<strong>Description</strong> : XChat is a feature-rich GTK-based graphical IRC client
<br>
<strong>Dépendance(s)</strong> : <a href=#gtk>gtk</a>
<br>
<strong>Téléchargement</strong> : <a href="http://www.opendarwin.org/projects/darwinports/packages/usr/xchat.dmg">xchat.dmg</a>
</p>
<hr>
<br>
<strong>Paquet</strong> : vim
<br>
<strong>Version</strong> : 6.1.271
<br>
<strong>Description</strong> : Vim is a virtually compatible, extremely enhanced version of the vi editor.
<br>
<strong>Dépendance(s)</strong> : <a href=#gtk>gtk</a>
<br>
<strong>Téléchargement</strong> : <a href="http://www.opendarwin.org/projects/darwinports/packages/usr/vim.dmg">vim.dmg</a>
</p>
<hr>
<p>
<strong>Paquet</strong> : rxvt
<br>
<strong>Version</strong> : 2.7.8
<br>
<strong>Description</strong> : Rxvt is an xterm replacement with a smaller memory footprint
<br>
<strong>Téléchargement</strong> : <a href="http://www.opendarwin.org/projects/darwinports/packages/usr/rxvt.dmg">rxvt.dmg</a>
<p>
<hr>
<br>
<strong>Paquet</strong> : qthello
<br>
<strong>Version</strong> : 1.0
<br>
<strong>Description</strong> : QtHello is an Othello program written in Qt. QtHello currently has 6 different computer players ranging from completely random to tree search with Alpha-Beta pruning.
<br>
<strong>Dépendance(s)</strong> : <a href=#qt3>qt3</a>
<br>
<strong>Téléchargement</strong> : <a href="http://www.opendarwin.org/projects/darwinports/packages/usr/qthello.dmg">qthello.dmg</a>
</p>

<!--</td></tr>
</table>
</center>-->


<? 
	od_print_footer("fr"); 
?>
