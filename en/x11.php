<?

//
// File     : x11.php
// Version  : $Id: x11.php,v 1.1 2003/01/13 19:10:02 matt Exp $
// Location : /projects/darwinports/en/x11.php
//

	include_once("$DOCUMENT_ROOT/includes/od_lib.inc.php");
	od_print_header("X11 Packages for Mac OS X", "en", "iso-8859-1", "", 0, "/projects/darwinports");
?>

<!--<center>
<table border="0" width="500" cellspacing="0" cellpadding="3">
<tr><td>-->
<a href=http://www.apple.com/macosx/x11/><img style="float: right;" src=images/x11link.jpg></a>
<h2>X11 Packages for Mac OS X</h2>
<p>
The following X11 packages for Mac OS X were built using the <a href="http://www.opendarwin.org/projects/darwinports/">DarwinPorts</a> architecture. Though DarwinPorts installs in /opt/local by default, these packages have been built to install in /usr/local.
<br><br>
DarwinPorts is a BSD licensed software build, install, and packaging infrastructure conceived as a part of the OpenDarwin Project. Written almost entirely in TCL, DarwinPorts is designed to be easily extended, embedded in other applications, and ported to a wide variety of architectures. DarwinPorts is in active development and currently supported on Mac OS X 10.2 and Darwin 6.0.2. For more information regarding DarwinPorts, see the <a href="http://www.opendarwin.org/projects/darwinports/">Project Page<a/>
</p>
<p align=right><strong>Feedback</strong>:<a href=mailto:dp-feedback@opendarwin.org>dp-feedback@opendarwin.org</a></p>

<p>
<h4><img align=center src=images/package.jpg>Libraries</h4>
</p>

<p>
<strong><a name=gtk>Package</a></strong>: gtk
<br>
<strong>Version</strong>: 1.2.10
<br>
<strong>Description</strong>: GTK+, or the Gimp ToolKit, is a library for GUIs creating for the X Window System.
<br>
<strong>Download</strong>: <a href="packages/usr/gtk.dmg">gtk.dmg</a>
</p>
<hr>

<p>
<strong>Package</strong>: gtk2 
<br>
<strong>Version</strong>: 2.0.9
<br>
<strong>Description</strong>: This is GTK+ version 2.0.9. GTK+, or the Gimp ToolKit, is a library for creating GUIs for the X Windows System.
<br>
<strong>Download</strong>: <a href="packages/usr/gtk2.dmg">gtk2.dmg</a>
</p>
<hr>
<p>
<strong>Package</strong>: <a name=qt3>qt3<a/>
<br>
<strong>Version</strong>: 3.0.5
<br>
<strong>Description</strong>: TrollTech's C++ toolkit for writing cross-platform GUI applications.
<br>
<strong>Download</strong>: <a href="packages/usr/qt3.dmg">qt3.dmg</a>
</p>
<hr>
<p>
<strong>Package</strong>: openMotif
<br>
<strong>Version</strong>: 2.2.2
<br>
<strong>Description</strong>: The Open Group's full version of Motif based on the original OSF sources.
<br>
<strong>Download</strong>: <a href="packages/usr/openMotif.dmg">openMotif.dmg</a>
</p>
<hr>
<p>
<h4><img align=center src=images/package.jpg>Applications</h4></p>
<p>

<p>
<strong>Package</strong>: Gimp
<br>
<strong>Version</strong>: 1.2.3
<br>
<strong>Description</strong>: The GNU Image Manipulation Program (GIMP) is a powerful tool for the preparation and manipulation of digital images.
<br>
<strong>Depends</strong>: <a href=#gtk>gtk</a>
<br>
<strong>Download</strong>: <a href="packages/usr/gimp.dmg">gimp.dmg</a>
<br>
<strong>Note</strong>: A new package was posted at Jan 8th, 03:04 GMT. This update fixes jpeg support and can be installed over a previously installed copy of The Gimp.
</p>
<hr>
<p>
<strong>Package</strong>: xchat
<br>
<strong>Version</strong>: 1.8.10
<br>
<strong>Description</strong>: XChat is a feature-rich GTK-based graphical IRC client
<br>
<strong>Depends</strong>: <a href=#gtk>gtk</a>
<br>
<strong>Download</strong>: <a href="packages/usr/xchat.dmg">xchat.dmg</a>
</p>
<hr>
<br>
<strong>Package</strong>: vim
<br>
<strong>Version</strong>: 6.1.271
<br>
<strong>Description</strong>: Vim is a virtually compatible, extremely enhanced version of the vi editor.
<br>
<strong>Depends</strong>: <a href=#gtk>gtk</a>
<br>
<strong>Download</strong>: <a href="packages/usr/vim.dmg">vim.dmg</a>
</p>
<hr>
<p>
<strong>Package</strong>: rxvt
<br>
<strong>Version</strong>: 2.7.8
<br>
<strong>Description</strong>: Rxvt is an xterm replacement with a smaller memory footprint
<br>
<strong>Download</strong>: <a href="packages/usr/rxvt.dmg">rxvt.dmg</a>
<p>
<hr>
<br>
<strong>Package</strong>: qthello
<br>
<strong>Version</strong>: 1.0
<br>
<strong>Description</strong>: QtHello is an Othello program written in Qt. QtHello currently has 6 different computer players ranging from completely random to tree search with Alpha-Beta pruning.
<br>
<strong>Depends</strong>: <a href=#qt3>qt3</a>
<br>
<strong>Download</strong>: <a href="packages/usr/qthello.dmg">qthello.dmg</a>
</p>

<!--</td></tr>
</table>
</center>-->


<? 
	od_print_footer("en"); 
?>
