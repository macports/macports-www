<?

//
// File     : variants.php
// Version  : $Id: variants.php,v 1.2 2003/01/12 00:25:32 matt Exp $
// Location : /projects/darwinports/variants.php
//

        include_once("$DOCUMENT_ROOT/includes/od_lib.inc.php");
        od_print_header("Variantes des Portfile DarwinPorts", "fr", "iso-8859-1", "", 0);
?>

<h2>
Variantes
</h2>
<pre><tt>
Kevin Van Vechten | <a href="mailto:kevin@opendarwin.org">kevin@opendarwin.org</a>
9-Oct-2002
</tt></pre>
<a name="basictoc"></a><h4>Variantes</h4>
<ul>
<li><a href="#what_are_they">Qu'est-ce que les variantes ?</a></li>
<li><a href="#additive_variants">Les variantes peuvent s'additionner</a></li>
<li><a href="#ordering_variants">Agencer l'ordre des variantes</a></li>
<!-- <li><a href="#conflicting_variants">Conflicting Variants</a></li> -->
<li><a href="#default_variants">Variantes par défaut</a></li>
<li><a href="#implicit_variants">Variantes implicites</a></li>
</ul>
<h3>
<a name="what_are_they"></a>Qu'est-ce que les variantes ?
</h3>
<p>
Beaucoup de logiciels ont des fonctionnalités optionnelles qui ont besoin d'être définies au moment de la compilation. Ces logiciels sont soit compilés avec ou sans le support de certaines fonctions. Un des exemples les plus flagrant est de compiler un logiciel avec ou sans le support d'X11.
</p>
<p>
Les variantes furent créer pour pallier à ce besoin d'avoir ou non ces fonctionnalités supplémentaires. Souvent, compiler avec ou sans le support d'X11 est juste l'affaire de spécifier <tt>--with-x11</tt> ou <tt>--without-11</tt> dans la variable <tt>configure.args</tt>. En gros, une variante est l'équivalent de la déclaration <tt>if</tt> en Tcl. Donc si la variante a été spécifiée par l'utilisateur, le bloc de code est exécuté. Voici un exemple d'une variante pour X11 :
</p>
<pre><tt>
configure.args --without-x11

variant x11 {
    configure.args-delete --without-x11
    configure.args-append --with-x11
}
</tt></pre>
<p>
Normalement, le code se situant en dehors du bloc dédié à la variante est exécuté sans réserve avant que toute variante soit prise en compte. Cepdendant, si <tt>+x11</tt> a été spécifiée, les déclarations <tt>configure.args-delete</tt> et <tt>configure.args-append</tt> seront également prises en compte.
</p>
<h3>
<a name="additive_variants"></a>Les variantes peuvent s'additionner
</h3>
<p>
Si deux variantes sont définies, par exemple <tt>x11</tt> et <tt>kde</tt>, une des deux ou carrément les deux peuvent être choisies et utilisées par l'utilisateur. Spécifier <tt>+x11</tt> aura pour effet de prendre en compte la variante <tt>x11</tt>, et spécifier <tt>+kde</tt> aura pour effet la prise en compte de la variante <tt>kde</tt>. Si <tt>+x11 +kde</tt> est spécifiée, les deux variantes seront prises en compte. Il est également possible de définir des variantes contenant plusieurs termes. Par exemple :
</p>
<pre><tt>
variant x11 kde {
    # do something here, when both x11 and kde are selected
}
</tt></pre>
<p>
Dans cet exemple, la variante <tt>x11-kde</tt> sera exécutée uniquement si <tt>x11</tt> et <tt>+kde</tt> sont spécifiées. Cela permet aux conflits entre deux variantes "primitives" d'être résolues sans beaucoup d'efforts. Aussi, parce que ces variantes combinées sont le plus souvent utilisées pour résoudre des conflits, elles sont prises en compte après que chaque parties constituantes aient été prises en compte.
</p>
<h3>
<a name="ordering_variants"></a>Agencer l'ordre des variantes
</h3>
<p>
Parfois il est utile de garantir qu'une variante soit lancée après une autre variante. Cela peut rendre la manipulation des variables plus franche, plus souple, valable également pour d'autres opérations. L'agencement peut se faire grâce au mot-clé <tt>follows</tt>. (<b><i>Important :</i></b> le mot-clé <tt>follows</tt> n'a pas encore été implémenté.) Dans l'exemple suivant, la variante <tt>kde</tt> déclare que même si <tt>+kde</tt> et <tt>+x11</tt> sont spécifiées, la variante <tt>kde</tt> sera toujours prise en compte après la variante <tt>x11</tt>. La variante <tt>kde</tt> restera prise en compte même si seulement <tt>+kde</tt> est spécifiée.
<pre><tt>
variant kde follows x11 {
    # do something here, after x11
}
</tt></pre>
<p>
D'un autre côté, il est possible d'autoriser <tt>kde</tt> a être une variante si et uniquement si <tt>x11</tt> a également été sélectionnée. Cela peut être fait en utilisant le mot-clé <tt>requires</tt>, utilisé de la manière suivante :
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
<a name="default_variants"></a>Variantes par défaut
</h3>
<p>
Un Portfile peut contenir un set par défaut de variantes, qui sera sélectionné lors de la prise en charge du Portfile, à moins que l'utilisateur ne les ait explicitement refusés. Cela peut être fait en utilisant la commande <tt>default_variants</tt> dans le Portfile, comme ci-dessous :
</p>
<pre><tt>
default_variants    +x11 +kde
</tt></pre>
<p>
Cela indique que les variantes <tt>x11</tt> et <tt>kde</tt> seront prises en compte à moins que l'utilisateur n'ait spécifié <tt>-kde -x11</tt> à la ligne de commande.
</p>
<h3>
<a name="implicit_variants"></a>Variantes implicites
</h3>
<p>
Quelques variantes sont implicitement spécifiées par le système. Comme les variantes par défaut, celles-ci peuvent être annulées à la ligne de commande. Actuellement la plateforme et l'architecture sont deux variantes implicites. Les variantes du même nom que les valeurs de <tt>os.platform</tt> et <tt>os.arch</tt> sont sélectionnées. <tt>os.platform</tt> contient la valeur d'<tt>uname -s</tt> comme <tt>darwin</tt> ou <tt>freebsd</tt>. <tt>os.arch</tt> contient la valeur d'<tt>uname -p</tt> comme <tt>ppc</tt> ou <tt>i386</tt>.
</p>

<?
        od_print_footer("fr");
?>
