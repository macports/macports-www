<?

//
// File     : index.php
// Version  : $Id: index.php,v 1.1 2002/09/10 22:40:09 bbraun Exp $
// Location : /projects/darwinports/index.php
//

require_once("$DOCUMENT_ROOT/includes/config.inc.php");
require_once("$DOCUMENT_ROOT/includes/dbconnect.inc.php");

include("$DOCUMENT_ROOT/header.html");

?>

<center>
<table border="0" width="500" cellspacing="0" cellpadding="3">
<tr><td>

<h2>Projects :: DarwinPorts</h2>

<p>
<i>Project Leads: </i>
<a href="mailto:landonf@opendarwin.org">Landon Fuller</a>, 
<a href="mailto:jkh@opendarwin.org">Jordan Hubbard</a>,
<a href="mailto:kevin@opendarwin.org">Kevin van Vechten</a>
</p>

<p>
The DarwinPorts project aims to provide a large amount of 'software ports' that make it easy to install freely available software on a Darwin system.
</p>

<p><strong>Project Status</strong></p>

<p>
Still progressing towards initial release on September 25th, 2002.
A number of ports are done and the system is reasonably usable as
a <i>BETA</i> for anyone who's interested.

</p>

<p><strong>Getting the project from CVS</strong></p>

<p>
Use the following commands to get the project from the OpenDarwin CVS server:
</p>

<p>
<pre>
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/darwinports login
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/darwinports co -P darwinports
</pre>

When the server asks you for a password you can simply hit return; the password is empty.
</p>

<p><strong>Joining the project </strong></p>

<p>
We are looking for people who are would like to help to make this project a success. There are still many parts of the project that need work, including: documentation, making ports, maintaining ports and testing.
</p>

<p>
All contributions are very much welcomed. If have you are interested then can either send an e-mail to the project owner or join the project with <a href="/joinproject.php">this</a> form.
</p>

</td></tr>
</table>
</center>


<? include("$DOCUMENT_ROOT/footer.html"); ?>
