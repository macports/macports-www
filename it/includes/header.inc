      <div id="nav">
	<div id="logo">
	  <a href="/it/" title="DarwinPorts"><img src="/img/dp.jpg"
	    alt="DarwinPorts" /></a>
	</div>
	<div id="l">
	  <ul>
	  <?php
	    $PHP_SELF = $_SERVER['PHP_SELF'];
	    $home = '/it/index.php';
	    $getdp = '/it/getdp/index.php';
	    $ports = '/it/ports/index.php';
	    $help = '/it/help/index.php';

	    if($PHP_SELF == $home) {
	      echo "<li class=\"selected\"><a href=\"/it/\" title=\"Home di DarwinPorts\">Home di DarwinPorts</a></li>\n";
	    }
	    else {
	      echo "<li><a href=\"/it/\" title=\"Home di DarwinPorts\">Home di DarwinPorts</a></li>\n";
	    }
	    if($PHP_SELF == $getdp) {
	      echo "<li class=\"selected\"><a href=\"/it/getdp/\" title=\"Ottenere DarwinPorts\">Ottenere DarwinPorts</a></li>\n";
	    }
	    else {
	      echo "<li><a href=\"/it/getdp/\" title=\"Ottenere DarwinPorts\">Ottenere DarwinPorts</a></li>\n";
	    }
	  ?>
	    <li class="last"><a href="http://www.opendarwin.org/bugzilla/" title="Bugzilla">Bugzilla</a></li>
	  </ul>
	</div>
	<div id="r">
	  <ul>
	    <li><a href="/docs/" title="Documentazione">Documentazione</a></li>
	    <?php
	      if($PHP_SELF == $ports) {
		echo "<li class=\"selected\"><a href=\"/it/ports/\" title=\"Ports Disponibili\">Ports Disponibili</a></li>\n";
	      }
	      else {
		echo "<li><a href=\"/it/ports/\" title=\"Ports Disponibili\">Ports Disponibili</a></li>\n";
	      }
	      if($PHP_SELF == $help) {
		echo "<li class=\"sellast\"><a href=\"/it/help/\" title=\"Richiedere Aiuto\">Richiedere Aiuto</a></li>\n";
	      }
	      else {
		echo "<li class=\"last\"><a href=\"/it/help/\" title=\"Richiedere Aiuto\">Richiedere Aiuto</a></li>\n";
	      }
	    ?>
	  </ul>
	</div>
      </div>
