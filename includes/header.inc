      <div id="nav">
	<div id="logo">
	  <a href="/" title="DarwinPorts"><img src="/img/dp.jpg"
	    alt="DarwinPorts" /></a>
	</div>
	<div id="l">
	  <ul>
	  <?php
	    $PHP_SELF = $_SERVER['PHP_SELF'];
	    $home = '/index.php';
	    $getdp = '/getdp/index.php';
	    $ports = '/ports/index.php';
	    $help = '/help/index.php';

	    if($PHP_SELF == $home) {
	      echo "<li class=\"selected\"><a href=\"/\" title=\"DarwinPorts Home\">DarwinPorts Home</a></li>\n";
	    }
	    else {
	      echo "<li><a href=\"/\" title=\"DarwinPorts Home\">DarwinPorts Home</a></li>\n";
	    }
	    if($PHP_SELF == $getdp) {
	      echo "<li class=\"selected\"><a href=\"/getdp/\" title=\"Get DarwinPorts\">Get DarwinPorts</a></li>\n";
	    }
	    else {
	      echo "<li><a href=\"/getdp/\" title=\"Get DarwinPorts\">Get DarwinPorts</a></li>\n";
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
		echo "<li class=\"selected\"><a href=\"/ports/\" title=\"Available Ports\">Available Ports</a></li>\n";
	      }
	      else {
		echo "<li><a href=\"/ports/\" title=\"Available Ports\">Available Ports</a></li>\n";
	      }
	      if($PHP_SELF == $help) {
		echo "<li class=\"sellast\"><a href=\"/help/\" title=\"Get Help\">Get Help</a></li>\n";
	      }
	      else {
		echo "<li class=\"last\"><a href=\"/help/\" title=\"Get Help\">Get Help</a></li>\n";
	      }
	    ?>
	  </ul>
	</div>
      </div>
