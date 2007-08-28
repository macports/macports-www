	<div id="nav">
	
		<div id="logo">
			<a href="/es/" title="DarwinPorts"><img src="/img/dp.jpg"
				alt="DarwinPorts" /></a>
		</div>
		
		<div id="l">
			<ul>
				<?php
					$PHP_SELF = $_SERVER['PHP_SELF'];
					$home = '/es/index.php';
					$getdp = '/es/getdp/index.php';
					$ports = '/es/ports/index.php';
					$help = '/es/help/index.php';
				
					if ($PHP_SELF == $home) {
						echo "<li class=\"selected\"><a href=\"/es/\" title=\"Home de DarwinPorts\">Home de DarwinPorts</a></li>\n";
					} else {
						echo "<li><a href=\"/es/\" title=\"Home de DarwinPorts\">Home de DarwinPorts</a></li>\n";
					}
					if ($PHP_SELF == $getdp) {
						echo "<li class=\"selected\"><a href=\"/es/getdp/\" title=\"Obtención de DarwinPorts\">Obtención de DarwinPorts</a></li>\n";
					} else {
						echo "<li><a href=\"/es/getdp/\" title=\"Obtención de DarwinPorts\">Obtención de DarwinPorts</a></li>\n";
					}
				?>
				<li class="last"><a href="http://www.opendarwin.org/bugzilla/" title="Bugzilla">Bugzilla</a></li>
			</ul>
		</div>
		
		<div id="r">
			<ul>
				<li><a href="/docs/" title="Documentación">Documentación</a></li>
				<?php
					if ($PHP_SELF == $ports) {
						echo "<li class=\"selected\"><a href=\"/es/ports/\" title=\"Portes Disponibles\">Portes Disponibles</a></li>\n";
					} else {
						echo "<li><a href=\"/es/ports/\" title=\"Portes Disponibles\">Portes Disponibles</a></li>\n";
					}
					if ($PHP_SELF == $help) {
						echo "<li class=\"selected\"><a href=\"/es/help/\" title=\"Ayuda\">Ayuda</a></li>\n";
					} else {
						echo "<li class=\"last\"><a href=\"/es/help/\" title=\"Ayuda\"> Ayuda</a></li>\n";
					}
				?>
			</ul>
		</div>
		
	</div>
		
