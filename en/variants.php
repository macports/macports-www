<?

//
// File     : variants.php
// Version  : $Id: variants.php,v 1.1 2002/12/20 08:47:58 kevin Exp $
// Location : /projects/darwinports/variants.php
//

        include_once("$DOCUMENT_ROOT/includes/od_lib.inc.php");
        od_print_header("DarwinPorts Portfile Variants", "en", "iso-8859-1", "", 0);
?>

<h2>
Variants
</h2>
<pre><tt>
Kevin Van Vechten | <a href="mailto:kevin@opendarwin.org">kevin@opendarwin.org</a>
9-Oct-2002
</tt></pre>
<a name="basictoc"></a><h4>Variants</h4>
<ul>
<li><a href="#what_are_they">What are Variants?</a></li>
<li><a href="#additive_variants">Variants are Additive</a></li>
<li><a href="#ordering_variants">Ordering Variants</a></li>
<!-- <li><a href="#conflicting_variants">Conflicting Variants</a></li> -->
<li><a href="#default_variants">Default Variants</a></li>
<li><a href="#implicit_variants">Implicit Variants</a></li>
</ul>
<h3>
<a name="what_are_they"></a>What are Variants?
</h3>
<p>
Many software titles have optional functionatily which needs to be dealt with at compile time.
These titles are either compiled with or without support for a certain feature.  One of the
most common examples is whether to compile software with or without X11 support.
</p>
<p>
Variants were created as a means to address this optional functionality.  Often, compiling
with or without X11 support is a matter of specifying <tt>--with-x11</tt> or <tt>--without-x11</tt>
in the <tt>configure.args</tt> variable.  In its most basic form, a variant is equivalent to
a Tcl <tt>if</tt> statement.  If the variant was specified by the user, then the block of code is
executed.  Here's an example of an X11 variant:
</p>
<pre><tt>
configure.args --without-x11

variant x11 {
    configure.args-delete --without-x11
    configure.args-append --with-x11
}
</tt></pre>
<p>
As normal, the code outside of any variant block is executed unconditionally before any variants
are evaluated.  However, if <tt>+x11</tt> was specified, the <tt>configure.args-delete</tt> and <tt>configure.args-append</tt> statements will also be evaluated.
</p>
<h3>
<a name="additive_variants"></a>Variants are Additive
</h3>
<p>
If two variants are defined, for example <tt>x11</tt> and <tt>kde</tt>, either or both
of them may be chosen by the user.  Specifying <tt>+x11</tt> will cause the <tt>x11</tt> variant to be evaluated,
and specifying <tt>+kde</tt> will cause the <tt>kde</tt> variant to be evaluated.  If <tt>+x11 +kde</tt> is specified,
then both variants will be evaluated.  It's also possible to define variants containing several terms.  For example:
</p>
<pre><tt>
variant x11 kde {
    # do something here, when both x11 and kde are selected
}
</tt></pre>
<p>
In this example, the <tt>x11-kde</tt> variant will execute only if both <tt>+x11</tt> and <tt>+kde</tt> were specified.
This allows conflicts between two variant "primitives" to be resolved without much overhead.  Also, because these
combined variants are most often used to resolve conflicts, they're evaluated after each of the constituent parts has
been evaluated.
</p>
<h3>
<a name="ordering_variants"></a>Ordering Variants
</h3>
<p>
Sometimes it's beneficial to guarantee a variant runs after another variant.  This can make variable manipulation and
and other operartions more straightforward.  Ordering can be achieve by the <tt>follows</tt> keyword.  (<b><i>Important:</i></b> the <tt>follows</tt> keyword has not yet been implemented.)  In the following
example, the <tt>kde</tt> variant declares that whenever both <tt>+kde</tt> and <tt>+x11</tt> are specified, the
<tt>kde</tt> variant will always be evaluated after the <tt>x11</tt> variant.  The <tt>kde</tt> variant will still 
be evaluated even if only <tt>+kde</tt> is specified.
<pre><tt>
variant kde follows x11 {
    # do something here, after x11
}
</tt></pre>
<p>
On the other hand, it's possible to allow <tt>kde</tt> as a variant if and only if <tt>x11</tt> has also been selected.
This can be done using the <tt>requires</tt> keyword in the following manner:
</p>
<pre><tt>
variant kde requires x11 {
    # do something here, only after x11
}
</tt></pre>
<!--
<h3>
<a name="conflicting_variants"></a>Conflicting Variants
</h3>
<p>
</p>
-->
<h3>
<a name="default_variants"></a>Default Variants
</h3>
<p>
A Portfile may specify a default set of variants, which will be selected while evaluating the Portfile, unless the
user has specifically negated them.  This can be done by using the <tt>default_variants</tt> command in the
Portfile as follows:
</p>
<pre><tt>
default_variants    +x11 +kde
</tt></pre>
<p>
This specifies that the <tt>x11</tt> and <tt>kde</tt> variants will be evaluated, unless the user were to specify
<tt>-kde -x11</tt> on the command line.
</p>
<h3>
<a name="implicit_variants"></a>Implicit Variants
</h3>
<p>
Some variants are specified by the system implicitly.  Like default variants, these can be negated on the 
command line.  Currently the platform and architecture are the only two implicit variants.  Variants of the
same name as the values of <tt>os.platform</tt> and <tt>os.arch</tt> are selected.  <tt>os.platform</tt> contains
the value of <tt>uname -s</tt> such as <tt>darwin</tt> or <tt>freebsd</tt>.  <tt>os.arch</tt> contains the value of
<tt>uname -p</tt> such as <tt>ppc</tt> or <tt>i386</tt>.
</p>

<?
        od_print_footer("en");
?>
