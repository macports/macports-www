      <div id="nav">
	<div id="logo">
	  <a href="/macports/" title="MacPorts"><img src="/macports/img/dp.jpg"
	    alt="MacPorts" /></a>
	</div>
	<div id="l">
	  <ul>
	  <?php
	    $PHP_SELF = $_SERVER['PHP_SELF'];
	    $home = '/macports/index.php';
	    $getdp = '/macports/getmp.php';
	    $ports = '/macports/ports.php';
	    $help = '/macports/help.php';

	    if($PHP_SELF == $home) {
	      echo "<li class=\"selected\"><a href=\"/macports/index.php\" title=\"MacPorts Home\">MacPorts Home</a></li>\n";
	    }
	    else {
	      echo "<li><a href=\"/macports/index.php\" title=\"MacPorts Home\">MacPorts Home</a></li>\n";
	    }
	    if($PHP_SELF == $getmp) {
	      echo "<li class=\"selected\"><a href=\"/macports/getmp.php\" title=\"Get MacPorts\">Get MacPorts</a></li>\n";
	    }
	    else {
	      echo "<li><a href=\"/macports/getmp.php\" title=\"Get MacPorts\">Get MacPorts</a></li>\n";
	    }
	  ?>
	    <li class="last"><a href="http://trac.macports.org/" title="Bugzilla">Support & Development</a></li>
	  </ul>
	</div>
	<div id="r">
	  <ul>
	    <li><a href="/macports/docs/" title="Documentation">Documentation</a></li>
	    <?php
	      if($PHP_SELF == $ports) {
		echo "<li class=\"selected\"><a href=\"/macports/ports.php\" title=\"Available Ports\">Available Ports</a></li>\n";
	      }
	      else {
		echo "<li><a href=\"/macports/ports.php\" title=\"Available Ports\">Available Ports</a></li>\n";
	      }
	      if($PHP_SELF == $help) {
		echo "<li class=\"sellast\"><a href=\"/macports/help.php\" title=\"Get Help\">Get Help</a></li>\n";
	      }
	      else {
		echo "<li class=\"last\"><a href=\"/macports/help.php\" title=\"Get Help\">Get Help</a></li>\n";
	      }
	    ?>
	  </ul>
	</div>
      </div>
