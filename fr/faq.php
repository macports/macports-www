<?

//
// File     : faq.php
// Version  : $Id: faq.php,v 1.7 2003/04/15 21:07:56 matt Exp $
// Location : /projects/darwinports/fr/faq.php
//

	include_once("$DOCUMENT_ROOT/includes/od_lib.inc.php");
	od_print_header("FAQ DarwinPorts", "fr", "iso-8859-1", "", 0, "/projects/darwinports");
?>

<center>
<table border="0" width="500" cellspacing="0" cellpadding="3">
<tr><td>

<h2>FAQ DarwinPorts</h2>


<p>
Ce document essaye de répondre aux question les plus fréquemment posées à propos de DarwinPorts. 
</p>

<p><i>Auteur : Jordan K Hubbard</i></p>


<p><strong>Qu'EST-ce que DarwinPorts ?</strong></p>

<p>
Une description de DarwinPorts est plus compréhensible en utilisant une comparaison : c'est une sorte de collection de ports comme ceux de <a href="http://www.freebsd.org/ports">FreeBSD</a> ou <a href="http://fink.sourceforge.net">fink</a> qui permet d'automatiser le processus de compilation et d'installation de logiciels tierce partie pour Mac OS X. Cela permet également de garder une trace des dépendances requises pour un logiciel donné et de savoir comment construire le logiciel souhaité sur Mac OS X et de l'installer dans un emplacement commun, ce qui revient à dire qu'un logiciel installé via DarwinPorts ne va pas aller se répandre dans tout le système ou demander une connaissance particulière pour l'installer et surtout dans quel ordre il faut l'installer. 
</p>

<p><strong>Comment est implémenté DarwinPorts ?</strong></p>

<p>
Le système DarwinPorts est pratiquement tout écrit en Tcl et a été pensé pour être intégré dans d'autres applications, comme par exemple dans une interface de navigation (comme ce projet en cours appelé <a href="http://www.opendarwin.org/cgi-bin/cvsweb.cgi/proj/dp-cocoa/">dp-cocoa</a>, une interface basée sur Cocoa) ou alors dans une application contrôlée via une interface web. Il a été prévu pour être très extensible depuis ses tous premiers débuts, il est composé de telle manière qu'un changement de conception et/ou d'infrastructure peut être opéré indépendamment des ports, signifiant que si le système évolue, les choses anciennes ne seront pas affectées. 
</p>

<p>
Même si DarwinPorts est écrit en Tcl, un utilisateur n'a pas besoin de connaître le langage Tcl pour pouvoir utiliser ce système ou même ajouter de nouveaux ports. Même si les fichiers de description des ports sont actuellement des programmes complets en Tcl, ils ressemblent plus à une liste comportant des paires de type clé/valeur. 
</p>

<p><strong>Quelles sont les différences de DarwinPorts comparé aux ports de FreeBSD ?</strong></p>

<p>
Les ports de FreeBSD sont essentiellement implémentés comme de petites mais impressionnantes macros de BSD make(1) placées un peu partout et pouvant paraître un peu opaques et non extensibles pour une personne voulant étendre ou réarranger des parties du système. Étant donné que les fichiers makefile ne sont pas la chose la plus facile à analyser, il est également plus difficile "d'extraire" la collection de ports de FreeBSD en donnée pour une autre utilisation, comme générer la documentation des index ou des interfaces arbitraires pour la création ou la maintenance des ports. 
</p>

<p><strong>Pourquoi DarwinPorts a été entièrement créé de A à Z plutôt que d'adopter quelque chose comme les ports FreeBSD ?</strong></p>

<p>
Même en ne comptant pas les quelques limitations des ports FreeBSD décrites ci-dessus, la "science" de créer des systèmes de construction automatisés est bien plus complexe à première vue qu'il n'y paraît et il y aura toujours des approches nouvelles concernant la façon d'aborder le problème, ce que nous avons essayé de faire avec DarwinPorts. Il y a probablement d'autres systèmes, certains d'entre eux ont déjà été mentionnés qui ont essayé à leurs manières de résoudre ce problème et il y aura probablement beaucoup plus de systèmes similaires essayant de trouver une solution unique qui plaise à tout le monde - ça n'est que plus ou moins impossible. Nous invitons toute personne susceptible de juger l'aspect de DarwinPorts d'après ses propres spécificités et de le considérer comme un projet parallèle plutôt qu'un élan de compétition car il y a plus d'un logiciel et autre système qui sache gérer et comment permettre l'automatisation de tout ceci. 
</p>

<p><strong>Quelles sont les conditions requises pour DarwinPorts ?</strong></p>

<p>
Il requiert actuellement Mac OS X 10.2 (Jaguar), avec les Developer Tools d'installés puisque c'est le code de référence que la plupart d'entre nous utilise. DarwinPorts va s'adapter à différentes versions d'OS, ainsi qu'aux "variantes" de ports spécifiques à une architecture et nous influencerons ce méchanisme pour supporter plusieurs versions d'OS ainsi que plusieurs types d'architectures (pour Darwin/x86 par exemple) d'une manière propre et claire. 
</p>

<p><strong>Est-ce que DarwinPorts gère également la création de paquet ?</strong></p>

<p>
DarwinPorts fonctionne de cette manière : compilation du logiciel puis installation dans une hiérarchie temporaire (appelée "destroot") puis copie le contenu nécessaire dans $prefix (par défaut /opt/local). À l'issue de l'installation il crée également un "reçu", vous permettant de demander à DarwinPorts de désinstaller le logiciel désiré si nécessaire.
<p>Vous pouvez également demander à DarwinPorts de créer un paquet (pkg) d'un logiciel puis de l'installer avec l'outil d'installation standard (Installer.app) de Mac OS X. Si le paquet a des dépendances, vous pouvez également créer un paquet multi-parties (mpkg) qui peut donc contenir les dépendances requises, vous évitant de gaspiller de l'espace disque. Quelque soit le type de paquet Mac OS X choisi, vous pourrez les désinstaller avec Uninstaller.app, disponible sur <a href="http://packages.opendarwin.org/Applications">packages.opendarwin.org</a>. Dans un avenir proche, nous espérerons supporter le format "RPM Package Manager" (RPM).
</p>

<p>
Il sera toujours important de préserver la possiblité de compiler les logiciels depuis leurs sources, bien entendu, car les ports doivent être générés depuis quelque chose, et que les développeurs qui modifient des librairies système ou qui essayent différentes méthodes de compilation de logiciel peuvent trouver un binaire mis en boîte d'office insuffisant pour leurs besoins.

<p><strong>Pourquoi est-ce que DarwinPorts installe tout dans /opt/local par défaut ?</strong></p>

<p>
Premièrement, cet emplacement peut être modifié par un autre emplacement de votre choix, en éditant /etc/ports/ports.conf donc rien n'est figé. Même l'infrastructure basique de DarwinPorts, qui s'installe dans /opt/local par défaut peut être installée n'importe ou simplement en modifiant la valeur de PREFIX en ligne de commande (reportez au fichier README.fr pour plus de détails). Deuxièmement, nous avons sélectionné un CERTAIN emplacement pour que les choses à installer s'installent et qu'ils ne se heurtent pas à des composants ou des choses du système déjà installés dans /usr/local, ainsi nous avons choisi de suivre lâchement la convention de Sun et de choisir finalement /opt/local. 
</p>

<p><strong>OK, donc comment commencer à jouer avec ?</strong></p>

<p>
Reportez-vous à la page web de <a href="http://www.opendarwin.org/projects/darwinports/fr/">DarwinPorts</a> pour des informations concernant le téléchargement du projet via CVS. Une fois une copie en votre possession, lisez le README.fr situé au premier niveau de la hiérarchie pour l'installation ainsi que les instructions basiques d'utilisation. 
</p>

<p><strong>Qu'elle est la commande pour voir les ports disponibles ?</strong></p>

<p>port search ".*"</p>
<p>
port search utilise une expression régulière (regex) comme argument donc vous pouvez chercher un (ou des) port(s) particulier(s) qui vous intéresse(nt). 
</p>

<p><strong>Problèmes connus et Incompatibilités</strong></p>

<p><i>Unable to open port: can't find package Pextlib 1.0</i></p>
<p>
DarwinPorts ne se compilera pas correctement avec les librairies TCL livrées dans les premières versions du paquet TCL de Fink. Mettez à jour votre paquet TCL de Fink, ou assurez-vous que vous utilisez la librairie TCL du système, et reconstruisez DarwinPorts. 
</p>

<p><i>Norton AntiVirus</i></p>
<p>
Le projet Fink a découvert récemment de nombreux problèmes incluant des kernel panics et des gels durant la mise en place de patchs lorsque certains logiciels anti-virus étaient installés. Vous devrez peut-être désactiver tout logiciel anti-virus avant d'utiliser DarwinPorts ou Fink.
</p>

</td></tr>
</table>
</center>


<? 
	od_print_footer("fr"); 
?>
