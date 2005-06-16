      <div id="nav">
	<div id="logo">
	  <a href="/fr/" title="DarwinPorts"><img src="/img/dp.jpg"
	    alt="DarwinPorts" /></a>
	</div>
	<div id="l">
	  <ul>
	  <?php
	    $PHP_SELF = $_SERVER['PHP_SELF'];
	    $home = '/fr/index.php';
	    $getdp = '/fr/getdp/index.php';
	    $ports = '/fr/ports/index.php';
	    $help = '/fr/help/index.php';

	    if($PHP_SELF == $home) {
	      echo "<li class=\"selected\"><a href=\"/fr/\" title=\"Accueil DarwinPorts\">Accueil DarwinPorts</a></li>\n";
	    }
	    else {
	      echo "<li><a href=\"/fr/\" title=\"Accueil DarwinPorts\">Accueil DarwinPorts</a></li>\n";
	    }
	    if($PHP_SELF == $getdp) {
	      echo "<li class=\"selected\"><a href=\"/fr/getdp/\" title=\"Obtenir DarwinPorts\">Obtenir DarwinPorts</a></li>\n";
	    }
	    else {
	      echo "<li><a href=\"/fr/getdp/\" title=\"Obtenir DarwinPorts\">Obtenir DarwinPorts</a></li>\n";
	    }
	  ?>
	    <li class="last"><a href="http://www.opendarwin.org/bugzilla/" title="Bugzilla">Bugzilla</a></li>
	  </ul>
	</div>
	<div id="r">
	  <ul>
	    <li><a href="/docs/" title="Documentation">Documentation</a></li>
	    <?php
	      if($PHP_SELF == $ports) {
		echo "<li class=\"selected\"><a href=\"/fr/ports/\" title=\"Ports disponibles\">Ports disponibles</a></li>\n";
	      }
	      else {
		echo "<li><a href=\"/fr/ports/\" title=\"Ports disponibles\">Ports disponibles</a></li>\n";
	      }
	      if($PHP_SELF == $help) {
		echo "<li class=\"sellast\"><a href=\"/fr/help/\" title=\"Demander de l'aide\">Demander de l'aide</a></li>\n";
	      }
	      else {
		echo "<li class=\"last\"><a href=\"/fr/help/\" title=\"Demander de l'aide\">Demander de l'aide</a></li>\n";
	      }
	    ?>
	  </ul>
	</div>
      </div>
