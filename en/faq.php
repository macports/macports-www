<?

//
// File     : faq.php
// Version  : $Id: faq.php,v 1.13 2003/04/15 22:17:22 fkr Exp $
// Location : /projects/darwinports/faq.php
//

	include_once("$DOCUMENT_ROOT/includes/od_lib.inc.php");
	od_print_header("DarwinPorts FAQ", "en", "iso-8859-1", "", 0, "/projects/darwinports");
?>

<center>
<table border="0" width="500" cellspacing="0" cellpadding="3">
<tr><td>

<h2>DarwinPorts FAQ</h2>


<p>
This document attempts to answer some frequently asked questions about
DarwinPorts.</p>

<p><i>Author: Jordan K Hubbard</i></p>


<p><strong>What IS DarwinPorts?</strong></p>

<p>
DarwinPorts is probably best described by comparison:  It's sort of like
the <a href="http://www.freebsd.org/ports">FreeBSD ports collection</a>
or <a href="http://fink.sourceforge.net">fink</a> in that it automates
the process of building 3rd party software for Mac OS X.  It also
tracks all dependency information for a given piece of software and knows
how to make it build under Mac OS X and install it to a common
location, meaning that software installed via DarwinPorts doesn't
simply scatter itself all over the system or require user knowledge
of what to install in what order.
</p>

<p><strong>How is DarwinPorts implemented?</strong></p>

<p> The DarwinPorts system is almost fully written in Tcl and designed
to be embedded into other applications, such as the Cocoa framework
<a href="http://www.opendarwin.org/projects/dp-cocoa/">dp-cocoa</a>
and the Cocoa software browsing front-end (that is based upon dp-cocoa)
<a href="http://packages.opendarwin.org/Applications/PortManager.dmg">PortManager.app</a>
, or web-driven application management
mechanisms.  Being designed to be highly extensible from the very
beginning, it is layered in such a way as to make it fairly
future-proof in the face of future design changes and the
infrastructure can be versioned independently of the individual ports,
meaning that as the system evolves, older things don't just break.</p>

<p>Even though DarwinPorts is written in Tcl, a user also does not need to
know Tcl in order to use the system or even to add new ports.  Port
description files, though they are actually full Tcl programs in their
own right, are designed to look like nothing more than a list of
key/value pairs.
</p>

<p><strong>How does DarwinPorts compare to FreeBSD ports?</strong></p>

<p> FreeBSD ports is essentially implemented as some very impressive
but hairy BSD make(1)'s macros and can be a little opaque and
non-extensible from the perspective of someone looking to extend or
re-factor parts of the system.  Given that Makefiles aren't the
easiest thing to parse, it is also harder to "mine" the FreeBSD ports
collection for data to use for other purposes, such as generating
documentation indexes or arbitrary front-ends for creating or managing
ports.</p>

<p><strong>Why did DarwinPorts start from scratch rather than adopting something like FreeBSD ports?</strong></p>

<p> Even discounting some of the limitations of FreeBSD ports
described above, the "science" of creating automated build systems is
rather more complex than it looks at first glance and there's always
room for fresh approaches to the problem, which is what we set out to
do with DarwinPorts. There are certainly other systems, some of which
have already been mentioned, which have made their own attempts at
solving this problem and there will likely be many more such systems
in the future since trying to find a single solution which pleases
everyone is rather like trying to find a single programming language
which pleases everyone - it's more or less impossible.  We urge people
to judge DarwinPorts' design on its own merits and consider it a
parallel rather than a competing effort since there's more software
out there than any one system can ever manage to encapsulate and
automate. </p>

<p><strong>What are the system requirements for DarwinPorts?</strong></p>

<p> It currently requires Mac OS X 10.2 (Jaguar) with the developer
tools installed since that's the reference code base most of us are
using.  DarwinPorts does make provisions for OS version or architecture
specific "variants" of a port and we intend to leverage this mechanism to
support multiple OS versions and architectures (for Darwin/x86) in a
fairly clean way.
</p>

<p><strong>Does DarwinPorts also do package management?</strong></p>

<p> DarwinPorts works by first building software, installing it
into a temporary directory (or "destroot") and then copying the
contents of that into its final $prefix resting place (typically
/opt/local).  It also records the installation with a "receipt"
so that you can ask DarwinPorts to uninstall it again if necessary.
<p>Alternately, you can ask DarwinPorts to build a packaged version
(pkg) of the software and install that with the standard installation tool
(Installer.app) on Mac OS X.  If the package has dependencies, you
can also build a multi-part package (mpkg) which contains them
as well, increasing convenience at the cost of disk space.  Whichever
type of Mac OS X package you install, you can also uninstall it with
the Uninstaller.app provided at <a href="http://packages.opendarwin.org/Applications">packages.opendarwin.org</a>.  For the future, there are plans to
support the RPM Package Manager (RPM) format as well.

<p>It will always be important to offer the
capability of building things from source, of course, since something has to
generate packaged versions of these individual ports, and developers who
are modifying system libraries or playing
with different ways of building a given piece of software may also find a
canned binary package to be insufficient for their needs. </p>

<p><strong>Why does DarwinPorts install everything into /opt/local by default?</strong></p>

<p>First, this location can be set to anything you like by editing
/etc/ports/ports.conf so nothing is fixed in place.  Even the basic
DarwinPorts infrastructure, which installs into /opt/local by default,
can be installed elsewhere by overriding the value of PREFIX on the
command line (see the README file for details).  Second, we had to
pick SOME location for things to install into so that they would not
collide with system components or things already installed in /usr/local,
so we elected to loosely follow Sun's convention and go with /opt/local.</p>

<p><strong>OK, so how do I start playing with it then?</strong></p>

<p> See the <a
href="http://www.opendarwin.org/projects/darwinports/en/">DarwinPorts</a>
web page for information on checking the project out of CVS.  Once you
get your hands on a copy, check out the top level README for
installation and basic usage instructions</p>

<p><strong>What's the command to see available ports?</strong></p>

<p>port search ".*"</p>
<p> port search takes a regex as an argument so you can look for the particular 
port(s) you are interested in.</p>

<p><strong>How do I build a Port?</strong></p>
<p>There is an excellent <a href="http://www.opendarwin.org/projects/darwinports/en/portfileHOWTO.php">
portfile-HOWTO</a> available, that explains this process.</p>

<p><strong>Known Issues and Incompatibilities</strong></p>

<p><i>Unable to open port: can't find package Pextlib 1.0</i></p>
<p>
DarwinPorts will not build properly against the TCL libraries shipped with
earlier versions of the Fink TCL package. Either update your installed fink TCL package or ensure your use of the system TCL library, and rebuild DarwinPorts.
</p>

<p><i>wrong tclsh</i></p>
<p>
Some third party Tcl-Packages have the habit of overwriting the <tt>/usr/bin/tclsh</tt> link,
resulting in an error during the DarwinPorts-Installation. Pointing the link back to <tt>tclsh8.3</tt>
fixes this:</p>
<p><tt>sudo ln -s /usr/bin/tclsh8.3 /usr/bin/tclsh</tt></p>

<p><i>Norton AntiVirus</i></p>
<p>The Fink project has recently discovered numerous problems including kernel
panics and infinite hangs during patching when certain anti-virus software is
installed.
You may need to switch off any anti-virus software before using DarwinPorts
or Fink.
</p>

</td></tr>
</table>
</center>


<? 
	od_print_footer("en"); 
?>
