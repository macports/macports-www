<?

//
// File     : index.php
// Version  : $Id: index.php,v 1.11 2003/05/05 17:20:15 landonf Exp $
// Location : /fr/projects/darwinports/index.php
//

	include_once("$DOCUMENT_ROOT/includes/od_lib.inc.php");
	od_print_header("DarwinPorts", "fr", "iso-8859-1", "", 0, "/projects/darwinports");
?>

<center>
<table border="0" width="500" cellspacing="0" cellpadding="3">
<tr><td>

<h2>Projects :: DarwinPorts</h2>

<p>
<i>Chefs de projet : </i>
<a href="mailto:landonf@opendarwin.org">Landon Fuller</a>, 
<a href="mailto:jkh@opendarwin.org">Jordan Hubbard</a>,
<a href="mailto:kevin@opendarwin.org">Kevin Van Vechten</a>
</p>

<p>
Le projet DarwinPorts a pour ambition de fournir un nombre important de logiciels portés, simples à installer et disponibles librement pour le système Darwin. Reportez-vous à la <a href="http://www.opendarwin.org/projects/darwinports/fr/faq.php">FAQ</a> pour plus d'information s'il vous plaît. Pour un tutorial sur comment créer un Portfile, reportez-vous au <a href="http://www.opendarwin.org/projects/darwinports/fr/portfileHOWTO.php">Portfile HOWTO</a>.  
</p>
<p>
Le <a href="http://darwinports.gene-hacker.net/docs/guide/">guide d'utilisation DarwinPorts</a> est une excellente référence sur les concepts ainsi que la syntaxe de DarwinPorts. (Notez que ce travail est en cours de progression, donc n'hésitez pas à nous faire parvenir vos suggestions et rapports de bogues via le module doc de DarwinPorts sur <a href="http://www.opendarwin.org/bugzilla/">Bugzilla</a>.)
</p>

<p><strong>Statut du Projet</strong></p>

<p>
Nombre de ports ont déjà été créés et rendent le système raisonnablement utilisable, comme une <i>BETA</i> pour quiconque souhaite s'y intéresser. Vous pouvez d'ores et déjà trouver une liste de <a href="http://www.opendarwin.org/projects/darwinports/fr/ports.php">logiciels disponibles</a> ici.
</p>
<p>Une GUI fonctionnelle basée sur Cocoa pour DarwinPorts, appelée <a href="http://www.opendarwin.org/cgi-bin/cvsweb.cgi/proj/darwinports/dports/sysutils/portmanager/">Ports Manager.app</a>, est disponible et son développement est actuellement actif. En voici une <a href="http://www.opendarwin.org/~fkr/portsmanager.png">capture d'écran</a>.
</p>
<p>
Les suggestions, requêtes ou rapports de bogues devront être soumis à <a href="http://www.opendarwin.org/bugzilla/">Bugzilla</a>.
</p>

<p><strong>Récupérer le projet depuis CVS</strong></p>

<p>
Utilisez les commandes suivantes pour récupérer le projet depuis le serveur CVS d'OpenDarwin (requis pour Ports Manager.app) :
</p>

<p>
<pre>
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od login
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od co -P darwinports
</pre>

<p>
Utilisez les commandes suivantes pour récupérer Ports Manager.app depuis le serveur CVS d'OpenDarwin :
</p>

<p>
<pre>
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od login
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od co -P PortsManager
</pre>

Lorsque le serveur vous demande un mot de passe, appuyez simplement sur retour; vu qu'il n'y pas de mot de passe. Le dépôt du CVS peut être examiné via <a href="http://www.opendarwin.org/cgi-bin/cvsweb.cgi/proj/darwinports/">CVSweb</a>.
</p>

<p>
Afin d'installer et d'utiliser DarwinPorts, les <a href="http://developer.apple.com/tools">outils développeurs</a> de Mac OS X.
</p>

<p><strong>Listes de diffusion et canaux IRC du projet</strong></p>

<p>La <a
href="http://www.opendarwin.org/mailman/listinfo/darwinports">liste de diffusion darwinports</a> est ouverte à tout le monde et c'est l'endroit où les discussions sur l'architecture et les fonctionnalités du projet sont tenues. Ceux souhaitant voir les historiques CVS concernant les soumissions détaillant changement par changement la progression du projet peuvent également s'inscrire sur la liste de diffusion <a href="http://www.opendarwin.org/mailman/listinfo/cvs-darwinports-all">cvs-darwinports-all</a>.
</p>

<p>
Pour les discussions en temps réel, elles se tiennent généralement sur le canal #opendarwin disponible via le réseau <a href="http://freenode.net/">Open Projects</a>.
</p>

<p><strong>Se joindre au projet</strong></p>

<p>
Nous recherchons des personnes qui voudrait nous aider à faire de ce projet un succès. Il y a encore de nombreuses parties qui demandent du travail, incluant : la documentation, la création de ports, la maintenance des ports et les tests.
</p>

<p>
Toute contribution est très appréciée et la bienvenue ! Si vous êtes intéressé, envoyez soit un e-mail à un des chefs du projet en demandant qu'est-ce qui a besoin d'être fait ou bien simplement en soumettant une application pour rejoindre le projet via ce <a href="/en/joinproject.php">formulaire</a>. Merci!
</p>

</td></tr>
</table>
</center>


<? 
	od_print_footer("fr"); 
?>
