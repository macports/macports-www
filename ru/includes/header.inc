      <div id="nav">
	<div id="logo">
	  <a href="/ru/" title="DarwinPorts"><img src="/img/dp.jpg" alt="DarwinPorts" /></a>
	</div>
	<div id="l">
	  <ul>
	  <?php
	    $PHP_SELF = $_SERVER['PHP_SELF'];
	    $home = '/ru/index.php';
	    $getdp = '/ru/getdp/index.php';
	    $ports = '/ru/ports/index.php';
	    $help = '/ru/help/index.php';

	    if($PHP_SELF == $home) {
	      echo "<li class=\"selected\"><a href=\"/ru/\" title=\"В начало\">В начало</a></li>\n";
	    }
	    else {
	      echo "<li><a href=\"/ru/\" title=\"В начало\">В начало</a></li>\n";
	    }
	    if($PHP_SELF == $getdp) {
	      echo "<li class=\"selected\"><a href=\"/ru/getdp/\" title=\"Получить DarwinPorts\">Получить DarwinPorts</a></li>\n";
	    }
	    else {
	      echo "<li><a href=\"/ru/getdp/\" title=\"Получить DarwinPorts\">Получить DarwinPorts</a></li>\n";
	    }
	  ?>
	    <li class="last"><a href="http://www.opendarwin.org/bugzilla/" title="Bugzilla">Bugzilla</a></li>
	  </ul>
	</div>
	<div id="r">
	  <ul>
	    <li><a href="/docs/" title="Документация">Документация</a></li>
	    <?php
	      if($PHP_SELF == $ports) {
		echo "<li class=\"selected\"><a href=\"/ru/ports/\" title=\"База портов\">База портов</a></li>\n";
	      }
	      else {
		echo "<li><a href=\"/ru/ports/\" title=\"База портов\">База портов</a></li>\n";
	      }
	      if($PHP_SELF == $help) {
		echo "<li class=\"sellast\"><a href=\"/ru/help/\" title=\"Помощь\">Помощь</a></li>\n";
	      }
	      else {
		echo "<li class=\"last\"><a href=\"/ru/help/\" title=\"Помощь\">Помощь</a></li>\n";
	      }
	    ?>
	  </ul>
	</div>
      </div>

