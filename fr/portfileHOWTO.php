<?

//
// File     : portfileHOWTO.php
// Version  : $Id: portfileHOWTO.php,v 1.9 2003/03/25 14:58:24 matt Exp $
// Location : /projects/darwinports/portfileHOWTO.php
//

	include_once("$DOCUMENT_ROOT/includes/od_lib.inc.php");
	od_print_header("Comment écrire un Portfile pour DarwinPorts", "fr", "iso-8859-1", "", 0);
?>

<h2>
Comment écrire un Portfile pour DarwinPorts
</h2>
<pre><tt>
Kevin Van Vechten | <a href="mailto:kevin@opendarwin.org">kevin@opendarwin.org</a>
8-Oct-2002
</tt></pre>
<h3>
Divers
</h3>
<p>
DarwinPorts automatise les tâches usuelles requises pour le portage de logiciel sur Darwin. Les Portfiles contiennent les informations nécessaires pour que la compilation et l'installation de logiciels particuliers soient faites correctement sous Darwin. Le but de DarwinPorts est de pouvoir garder la syntaxe des Portfiles aussi simple que possible, tout en supportant les cas spéciaux requis par la compilation et l'installation de beaucoup de logiciel afin que tout se passe avec succès.
</p>
<p>
Cet article décrit la constitution d'un simple Portfile, et explore les fonctions les plus communes à DarwinPorts.
</p>
<h3>
Commencer
</h3>
<p>
Pour pouvoir travailler avec DarwinPorts, vous devrez le télécharger et l'installer sur votre système. La <a href="http://opendarwin.org/projects/darwinports/fr/">page d'accueil</a> du projet DarwinPorts décrit comment se le procurer et l'installer.
</p>
<p>
Comme vous vous intéressez à l'écriture d'un Portfile, vous devriez invoquer la commande <tt>port</tt> avec l'option <tt>v</tt> (mode verbeux) et l'option <tt>d</tt> (mode déboguage). Cela affichera des messages utile au déboguage qui sont normalement omis lors de l'exécution de DarwinPorts. 
</p>
<p>
DarwinPorts effectuera plusieurs tâches basiques prédéfinies, qui sont :
</p>
<a name="basictoc"></a><h4>Sujets basiques</h4>
<ul>
<li><a href="#fetch">Récupération des sources</a></li>
<li><a href="#checksum">Vérification du fichier téléchargé</a></li>
<li><a href="#extract">Extraction des sources dans un répertoire de travail</a></li>
<li><a href="#configure">Exécution d'un script Configure</a></li>
<li><a href="#build">Compilation des sources</a></li>
<li><a href="#install">Installation du programme dans le système</a></li>
</ul>
<a name="advancedtoc"></a><h4>Sujets avancés</h4>
<ul>
<li><a href="#targets">Modifier des cibles</a></li>
<li><a href="#variants">Variantes du Portfile</a></li>
</ul>
<a name="appendixtoc"></a><h4>Annexe</h4>
<ul>
<li><a href="#portfilelist">Aperçu d'un Portfile</a></li>
<li><a href="#contentslist">Liste de contents</a></li>
</ul>

<h3>
<a name="fetch"></a>Récupération des sources
</h3>
<p>
La première chose à faire est de choisir un logiciel à porter. Pour cet exemple, nous allons utiliser ircII, un client IRC populaire. Nous commencerons avec un Portfile simple, décrivant les attributs basiques d'ircII comme son nom, sa version et le site où nous pouvons télécharger les sources. Créez un répertoire de travail nommé <tt>ircii</tt> et créez à l'intérieur un fichier nommé <tt>Portfile</tt> ayant le contenu suivant :
</p>
<pre><tt>
# &#36;Id: &#36;
PortSystem 1.0
name               ircii
version            20020912
categories         irc
maintainers        kevin@opendarwin.org
description        an IRC and ICB client
long_description   The ircII program is a full screen, termcap based interface to Internet Relay \
                   Chat. It gives full access to all the normal IRC functions, plus a variety \
                   of additionnal options.
master_sites       ftp://ircftp.au.eterna.com.au/pub/ircII/
</tt></pre>
<p>
Un Portfile consiste en une suite de paires de type clé/valeur. Chaque portfile doit commencer avec <tt># &#36;Id: &#36;</tt> qui est une balise RCS Id en commentaire. Après la balise RCS Id, vient la déclaration <tt>PortSystem</tt>. Actuellement la seule déclaration valide est <tt>PortSystem 1.0</tt>. Les clés <tt>name</tt> et <tt>version</tt> décrivent le nom et la version du logiciel. La clé <tt>categories</tt> est une liste des catégories auquel le logiciel peut appartenir de façon logique; c'est utilisé dans un but d'organisation. La première entrée dans <tt>categories</tt> devrait correspondre au nom du répertoire où doit résider le répertoire du port. La clé <tt>maintainers</tt> devrait, elle, contenir votre adresse email. <tt>description</tt> affiche une brève description du port, alors que <tt>long_description</tt> affiche une complète description du port. La clé <tt>master_sites</tt> devrait quant à elle contenir une liste des sites où télécharger les sources. DarwinPorts utilise les termes "clés" et "options" indifféremment comme la plupart des clés sont utilisées comme des options d'une tâche particulière dans le processus du portage.
</p>
<p>
Arrivé à ce point, le Portfile est assez complet pour permettre le téléchargement d'ircII. Par défaut, DarwinPorts ajoutera <tt>version</tt> à <tt>name</tt> et considérera que les sources sont au format <tt>.tar.gz</tt>. Depuis votre répertoire de travail, exécutez la commande suivante :
</p>
<pre><tt>
% port checksum
</tt></pre>
<p>
La commande <tt>port</tt> opère directement sur le <tt>Portfile</tt> du répertoire de travail actuel. Vous devriez voir la même chose que ce qui suit :
</p>
<!--
.........|.........|.........|.........|.........|.........|.........|.........|
-->
<pre><tt>
DEBUG: Executing com.apple.main (ircii)
DEBUG: Executing com.apple.fetch (ircii)
--->  ircii-20020912.tar.gz doesn't seem to exist in /opt/local/var/db/dports/
distfiles
--->  Attempting to fetch ircii-20020912.tar.gz from ftp://
ircftp.au.eterna.com.au/pub/ircII/
DEBUG: Executing com.apple.checksum (ircii)
Error: No checksums statement in Portfile.  File checksums are:
ircii-20020912.tar.gz md5 2ae68c015698f58763a113e9bc6852cc
Error: Target error: com.apple.checksum returned: No checksums statement in 
Portfile.
</tt></pre>

<h3>
<a name="checksum"></a>Vérification du fichier téléchargé
</h3>
<p>
Remarquez que DarwinPorts vérifiera dans un premier temps s'il existe une copie locale d'<tt>ircii-20020912.tar.gz</tt> mais il ne la trouvera pas, donc il la téléchargera depuis le site distant. La commande port ne se termine correctement car l'erreur : "No checksums statement in Portfile" est arrivée. Les Portfiles doivent contenir une somme de contrôle md5 de tous les fichiers distribués -- cela permet à DarwinPorts de vérifier l'exactitude et l'authenticité des sources. Pour plus de souplesse, une somme de contrôle md5 pour les fichiers téléchargés est affichée lorsque l'argument <tt>checksums</tt> n'est pas spécifié. Revenez en arrière et ajoutez ce qui suit à votre Portfile :
</p>
<pre><tt>
checksums       md5 2ae68c015698f58763a113e9bc6852cc
</tt></pre>

<h3>
<a name="extract"></a>Extraction des sources dans un répertoire de travail
</h3>
<p>
Maintenant que nous avons une somme de contrôle, nous pouvons vérifier nos sources. Procédons à l'extraction des sources dans notre répertoire de travail. Exécutez la commande suivante :
</p>
<pre><tt>
% port extract
</tt></pre>
<p>
Qui devrait afficher ce qui suit :
</p>
<!--
.........|.........|.........|.........|.........|.........|.........|.........|
-->
<pre><tt>
DEBUG: Skipping completed com.apple.main (ircii)
DEBUG: Skipping completed com.apple.fetch (ircii)
DEBUG: Executing com.apple.checksum (ircii)
--->  Checksum OK for ircii-20020912.tar.gz
DEBUG: Executing com.apple.extract (ircii)
--->  Extracting for ircii-20020912
--->  Extracting ircii-20020912.tar.gz ... DEBUG: Assembled command: 'cd /Users/
kevin/opendarwin/proj/darwinports/dports/irc/ircii/work &amp;&amp; gzip -dc /opt/local/
var/db/dports/distfiles/ircii-20020912.tar.gz | tar -xf -'
Done
</tt></pre>
<h3>
<a name="configure"></a>Exécution d'un script Configure
</h3>
<p>
Maintenant que les sources ont été extraites dans un répertoire nommé <tt>work</tt> placé dans le répertoire de travail actuel, nous pouvons configurer les sources afin de les compiler avec les options désirées. Par défaut, DarwinPorts assume que le logiciel que vous portez utilise un script configure autoconf, et toujours par défaut, DarwinPorts passera l'argument <tt>--prefix=${prefix}</tt> au script configure, spécifiant que ce logiciel devra s'installer dans la hiérarchie utilisée par DarwinPorts.
</p>
<p>
Les options standards d'ircII semblent correctes pour une installation de base sur Darwin, donc nous passerons directement à la phase de compilation.  
</p>

<h3>
<a name="build"></a>Compilation des sources
</h3>
<p>
Pour compiler, tapez ce qui suit :
</p>
<pre><tt>
% port build
</tt></pre>
<p>
Par défaut, la phase de compilation exécute l'utilitaire système make(1). (Cela peut être changé avec l'option <tt>build.type</tt> qui accepte les arguments tel que <tt>bsd</tt>, <tt>gnu</tt> ou <tt>pbx</tt>. Alternativement, l'option <tt>build.cmd</tt> peut être utilisée pour spécifier une commande de compilation arbitraire.) L'étape ci-dessus a commencé la compilation des sources, lorsqu'elle sera terminée, nous serons fin prêt pour installer le logiciel.  
</p>

<h3>
<a name="install"></a>Installation du programme dans le système
</h3>
<p>
Les Portfiles doivent contenir une option <tt>contents</tt> qui spécifie quels sont les fichiers installés. DarwinPorts utilise cette information pour cataloguer quel fichier appartient à quel logiciel, car ensuite il peut être désinstaller ultérieurement. Chaque paramètre de <tt>contents</tt> est un chemin vers un fichier. Tous les chemins sont relatifs à la variable <tt>${prefix}</tt>. Comme moyen simple de déterminer exactement quels fichiers font partie d'ircII, utilisons la commande "find" pour composer un manifeste des fichiers dans la hiérarchie <tt>${prefix}</tt>. Après l'installation, nous allons réutiliser la commande "find" et utiliser les différences pour générer notre liste.
</p>
<p>
En utilisant le format unidiff, nous allons comparer la liste des fichiers existants avec la nouvelle liste de fichiers, en prenant en compte juste les nouvelles lignes ajoutées. Comme les chemins sont supposés être relatifs à <tt>${prefix}</tt>, nous allons passer via <tt>sed</tt> et effacer le prefix (/opt/local/), et stocker le résultat dans un fichier nommé <tt>contents</tt> placé dans notre dossier hébergeant notre port. Nous pouvons faire tout cela via les commandes suivantes :
</p>
<!--
.........|.........|.........|.........|.........|.........|.........|.........|
-->
<pre><tt>
% find /opt/local > /tmp/existing.files
% sudo port install
% find /opt/local > /tmp/more.files
% diff -u /tmp/existing.files /tmp/more.files | grep ^\+\/ | \
  sed -e 's|^\+/opt/local/*||g' > contents
</tt></pre>
<p>
Maintenant que nous avons un fichier contents dans notre répertoire hébergeant notre port, nous devrons l'éditer afin de débuter avec <tt>contents {</tt> et de terminer avec un <tt>}</tt>. (C'est important de noter que tout autre processus utilisant la hiérarchie <tt>${prefix}</tt> peut interférer avec l'efficacité de la commande <tt>find</tt>. Vous devriez vérifier le fichier <tt>contents</tt> résultant afin de voir si tout les fichiers apparaissent à leur place, spécialement les fichiers temporaires de DarwinPorts comme <tt>/var/db/receipts/ircii-20020912.tmp</tt>.)
Il est également important de s'assurer que dans le fichier contents les répertoires soient listés <i>après</i> les fichiers qui les contiennent afin que le processus de désinstallation fonctionne correctement.
Ensuite nous devrons éditer le Portfile afin d'inclure notre fichier contents :
</p>
<pre><tt>
include contents
</tt></pre>
<p>
Si la liste des fichiers installés par le port ne s'étend pas au-delà d'une page de terminal de 80x24, l'option <tt>contents</tt> devrait être incluse dans le Portfile. Au lieu de <tt>include contents</tt>, nous utiliserons :
</p>
<pre><tt>
contents    bin/irc \
            bin/irc-20020912 \
            man/man1/irc.1 \
            man/man1/ircbug.1 \
            man/man1/ircII.1 \
            man/man1
</pre></tt>
<p>
À présent nous avons un portfile complet. Relancez l'étape d'installation pour ajouter ce port à votre propre registre :
</p>
<pre><tt>
% sudo port install
</tt></pre>
Qui devrait afficher :
<pre><tt>
DEBUG: Skipping completed com.apple.main (ircii)
DEBUG: Skipping completed com.apple.fetch (ircii)
DEBUG: Skipping completed com.apple.checksum (ircii)
DEBUG: Skipping completed com.apple.extract (ircii)
DEBUG: Skipping completed com.apple.patch (ircii)
DEBUG: Skipping completed com.apple.configure (ircii)
DEBUG: Skipping completed com.apple.build (ircii)
DEBUG: Skipping completed com.apple.install (ircii)
DEBUG: Executing com.apple.registry (ircii)
--->  Adding ircii to registry, this may take a moment...
</tt></pre>

<h2>
Sujets avancés
</h2>

<h3>
<a name="targets"></a>Modifier des cibles
</h3>
<p>
Il est possible de modifier la fonctionnalité d'une cible de compilation avec le code Tcl. Un exemple commun est le suivant, qui peut être utile pour un script sans script configure autoconf :
</p>
<pre><tt>
configure {}
</tt></pre>
<p>
Dans le Portfile, cela remplacera la fonctionnalité de la cible de configure, aussi nous sauterons cette étape. Il est également possible d'exécuter du code Tcl immédiatement avant ou après une cible standard. Cela peut être accompli de la manière suivante :
</p>
<!--
.........|.........|.........|.........|.........|.........|.........|.........|
-->
<pre><tt>
post-configure {
    reinplace "s|change.this.to.a.server|irc.openprojects.net|g" \
        "${workdir}/${worksrcdir}/config.h"
}
</tt></pre>
<p>
Cet exemple remplace l'occurrence de <tt>change.this.to.a.server</tt> avec <tt>irc.openprojects.net</tt> dans le fichier config.h qui a été généré pendant la phase précédant <tt>configure</tt>. Notez que c'est en quelque sorte un exemple inventé et voulu, car la même chose aurait pu être faite en spécifiant <tt>--with-default-server=irc.openprojects.net</tt> dans <tt>configure.args</tt>, mais l'approche est généralement utile lorsque de tels arguments ne sont pas présents.
</p> 

<h3>
<a name="variants"></a>Variantes du Portfile
</h3>
<p>
Comme Darwin 6.0 gère ipv6, il est possible de configurer le port avec l'option <tt>--with-ipv6</tt>. Cela peut être effectué en ajoutant l'option suivante dans le Portfile :
</p>
<pre><tt>
configure.args      --disable-ipv6

variant ipv6 {
    configure.args-append  --enable-ipv6
}
</tt></pre>
<p>
Maintenant la compilation par défaut n'inclura pas le support d'ipv6, mais si la variante ipv6 est voulue, ircII l'aura. Les options par elles-même devraient être considérées comme un facteur d'assignation. Comme les variantes peuvent être utilisées en combinaison avec d'autre, il est conseillé de les ajouter uniquement aux options au lieu de les écraser. Toutes les options peuvent avoir un suffixe avec <tt>-append</tt> ou <tt>-delete</tt> pour ajouter ou effacer un terme de la liste. Vous pouvez spécifier la compilation avec la variante ipv6 de la manière suivante :
</p>
<pre><tt>
% port build +ipv6
</tt></pre>

<h2>
Annexe
</h2>

<h3>
<a name="portfilelist"></a>Aperçu d'un Portfile
</h3>
<p>
Ce qui suit est le listage complet du Portfile d'ircII :
</p>
<pre><tt>
# &#36;Id: &#36;
PortSystem 1.0
name               ircii
version            20020912
categories         irc
maintainers        kevin@opendarwin.org
description        an IRC and ICB client
long_description   The ircII program is a full screen, termcap based interface to Internet Relay \
                   Chat. It gives full access to all the normal IRC functions, plus a variety \
                   of additionnal options.
master_sites       ftp://ircftp.au.eterna.com.au/pub/ircII/
checksums          md5 2ae68c015698f58763a113e9bc6852cc
configure.args     --disable-ipv6
include            contents

post-configure {
        reinplace "s|change.this.to.a.server|irc.openprojects.net|g" \
                  "${workdir}/${worksrcdir}/config.h"
}

variant ipv6 {
        configure.args-append --enable-ipv6
}
</tt></pre>

<h3>
<a name="contentslist"></a>Liste de contents
</h3>
<p>
Ce qui suit est un listage partiel du fichier contents d'ircII :
</p>
<pre><tt>
contents {
bin/irc
bin/irc-20020912
... omitted ...
man/man1/irc.1
man/man1/ircbug.1
man/man1/ircII.1
man/man1
man
... omitted ...
}
</tt></pre>


<? 
	od_print_footer("fr"); 
?>
