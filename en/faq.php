<?

//
// File     : faq.php
// Version  : $Id: faq.php,v 1.2 2002/09/25 23:02:53 jkh Exp $
// Location : /projects/darwinports/faq.php
//

// I have no idea if this is actually needed, but everything else seems to
// include it.
require_once("$DOCUMENT_ROOT/includes/config.inc.php");
require_once("$DOCUMENT_ROOT/includes/dbconnect.inc.php");

include("$DOCUMENT_ROOT/header.html");

?>

<center>
<table border="0" width="500" cellspacing="0" cellpadding="3">
<tr><td>

<h2>DarwinPorts FAQ</h2>


<p>
This document attempts to answer some frequently asked questions about
darwinports.

<p><i>Author: Jordan K Hubbard</i></p>
</p>

<p><strong>What IS darwinports?</strong></p>

<p>
darwinports is probably best described by comparison:  It's sort of like
the <a href="http://www.freebsd.org/ports">FreeBSD ports collection</a>
or <a href="http://fink.sourceforge.net">fink</a> in that it automates
the process of building 3rd party software for Mac OS X.  It also
tracks all dependency information for a given piece of software and knows
how to make it build under Mac OS X and install it to a common
location, meaning that software installed via darwinports doesn't
simply scatter itself all over the system or require user knowledge
of what to install in what order.
</p>

<p><strong>How is darwinports implemented?</strong>

<p> The darwinports system is almost fully written in Tcl and designed
to be embedded into other applications, such as software browsing
front-ends (Cocoa anyone?) or web-driven application management
mechanisms.  Being designed to be highly extensible from the very
beginning, it is layered in such a way as to make it fairly
future-proof in the face of future design changes and the
infrastructure can be versioned independently of the individual ports,
meaning that as the system evolves, older things don't just break.

Even though darwinports is written in Tcl, a user also does not need to
know Tcl in order to use the system or even to add new ports.  Port
description files, though they are actually full Tcl programs in their
own right, are designed to look like nothing more than a list of
key/value pairs.
</p>

<p><strong>How does darwinports compare to FreeBSD ports?</strong></p>

<p> FreeBSD ports is essentially implemented as some very impressive
but hairy BSD make(1)'s macros and can be a little opaque and
non-extensible from the perspective of someone looking to extend or
re-factor parts of the system.  Given that Makefiles aren't the
easiest thing to parse, it is also harder to "mine" the FreeBSD ports
collection for data to use for other purposes, such as generating
documentation indexes or arbitrary front-ends for creating or managing
ports.</p>

<p><strong>Why did darwinports start from scratch rather than adopting something like FreeBSD ports?</strong></p>

<p> Even discounting some of the limitations of FreeBSD ports
described above, the "science" of creating automated build systems is
rather more complex than it looks at first glance and there's always
room for fresh approaches to the problem, which is what we set out to
do with darwinports. There are certainly other systems, some of which
have already been mentioned, which have made their own attempts at
solving this problem and there will likely be many more such systems
in the future since trying to find a single solution which pleases
everyone is rather like trying to find a single programming language
which pleases everyone - it's more or less impossible.  We urge people
to judge darwinports' design on its own merits and consider it a
parallel rather than a competing effort since there's more software
out there than any one system can ever manage to encapsulate and
automate. </p>

<p><strong>What are the system requirements for Darwinports?</strong></p>

<p> It currently requires Mac OS X 10.2 (Jaguar) with the developer
tools installed since that's the reference code base most of us are
using.  There is also work planned to make it more compatible with
10.1 (Puma) just as soon as we can identify all of the "variant"
issues that need to be added to the various ports.  Darwinports does
make provisions for OS version or architecture specific "variants" of
a port and we intend to leverage this mechanism to support multiple OS
versions and architectures (for Darwin/x86) in a fairly clean way.
</p>

<p><strong>Does darwinports also do package management?</strong></p>

<p> At present, darwinports just builds software from scratch,
installs it and records the installation so that you can ask
darwinports to uninstall it again if necessary.  It will also create
binary "snapshot" tarballs of a given port installation so that you
can give these to someone else to simply unpack rather than having to
build the ports themselves, but package management is something we've
deliberately left for "phase II" of the project, where we'll probably
adopt one of the existing package management systems and make
darwinports simply generate those on demand.  Even with "proper
package management", it will always be important to offer the
capability of building things from source since something has to
generate the packages for each release of the OS or the individual
ports, and developers who are modifying system libraries or playing
with different ways of building a given piece of software may find a
canned binary package to be insufficient for their needs. </p>

<p><strong>Why does darwinports install everything into /opt/local by default?</strong></p>

<p>First, this location can be set to anything you like by editing
/etc/ports/ports.conf so nothing is fixed in place.  Even the basic
darwinports infrastructure, which installs into /opt/local by default,
can be installed elsewhere by overriding the value of PREFIX on the
command line (see the README file for details).  Second, we had to
pick SOME location for things to install into so that they would not
collide with system components or things already installed in /usr/local,
so we elected to loosely follow Sun's convention and go with /opt/local.</p>

<p><strong>OK, so how do I start playing with it then?</strong></p>

<p> See the <a
href="http://www.opendarwin.org/projects/darwinports">darwinports</a>
web page for information on checking the project out of CVS.  Once you
get your hands on a copy, check out the top level README for
installation and basic usage instructions</p>

</td></tr>
</table>
</center>


<? include("$DOCUMENT_ROOT/footer.html"); ?>
