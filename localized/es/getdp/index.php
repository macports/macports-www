	<?php
		$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
		include_once("$DOCUMENT_ROOT/es/includes/common.inc");
		/* include_once("$DOCUMENT_ROOT/es/includes/functions.inc"); */
		print_header('Obtención de DarwinPorts', 'utf-8');
	?>
	
	<div id="content">
		<h2 class="hdr">Obtención de DarwinPorts</h2>

		<p>La versión <? print "$dp_version_dmg"; ?> de DarwinPorts está disponible en forma
		binaria como una imagen de disco dmg <a href="/downloads/DarwinPorts-<? print "$dp_version_dmg"; ?>-10.4.dmg">para Tiger (PowerPC)</a>
		o <a href="/downloads/DarwinPorts-<? print "$dp_version_dmg"; ?>-10.3.dmg">para Panther</a>,
		ambas conteniendo un instalador pkg, o la version <? print "$dp_version"; ?> en forma de código fuente bien sea como un paquete
		<a href="/downloads/DarwinPorts-<? print "$dp_version"; ?>.tar.bz2">tar.bz2</a>
		o uno <a href="/downloads/DarwinPorts-<? print "$dp_version"; ?>.tar.gz">tar.gz</a>.
		Checksums para todos estos están disponibles <a href="/downloads/DarwinPorts-<? print "$dp_version"; ?>.chk.txt">aquí</a>.</p>

		<p>Para obtener un listado de todas nuestras descargas disponibles puede revisar la
		<a href="/es/downloads/">sección de downloads</a>.</p>
		
		<p>Por favor note que para instalar y usar DarwinPorts en Mac OS X debe tener instalado el paquete
		Xcode de Apple, que puede encontrar en la <a href="http://developer.apple.com/">Página de Progamadores de Apple</a>
		(en Inglés) o en sus CDs/DVD de instalación del sistema.</p>
		
		<p>Si desea usar DarwinPorts en alguna otra plataforma además de Mac OS X, por favor note
		los siguientes requisitos (se asume que ya posee lo básico como gcc):</p>
		<ul>
			<li>TCL (8.3 u 8.4)</il>
			<li>curl</li>
			<li>OpenSSL o libmd</li>
		</ul>
		
		<h5 class="subhdr">Paquete de instalación para Mac OS X (.pkg)</h5>

		<p>La forma más fácil de instalar DarwinPorts en un sistema Mac OS X es bajando el
		<a href="/downloads/DarwinPorts-<? print "$dp_version_dmg"; ?>-10.4.dmg">dmg para Tiger</a>
		o el <a href="/downloads/DarwinPorts-<? print "$dp_version_dmg"; ?>-10.3.dmg">dmg para Panther</a>
		y correr Installer.app en el pkg ahí contenido al hacer doble click sobre ellos, siguendo
		las instrucciones del instalador hasta el final. Este procedimiento colocará una instalación
		de DarwinPorts completamente funcional y configurada con las opciones por defecto en su sistema,
		lista para su uso. De ser necesario, los documentos de configuración de su shell serán adaptados
		por el instalador para incluir los settings necesarios para usar DarwinPorts. Es posible que
		tenga que abrir un nuevo shell para que estos cambios se hagan efectivos.</p>

		<p>Aunque no es estrictamente necesario, se recomienda de todas formas sincronizar la reciente
		instalación de DarwinPorts con nuestro servidor de rsync para asegurar la disponibilidad de
		la última versión de la infraestructura de DarwinPorts y de los &#8220;Portfiles&#8221; que
		que contienen las instrucciones empleadas en la compilación e instalación de portes.
		Para lograr esto, simplemente ejecute:</p>

		<pre>sudo port selfupdate</pre>

		<p>También se recomienda ejecutar el comando antenrior de manera regular para mantener su instalación
		siempre al día. De aquí en adelante debería estar listo para disfrutar DarwinPorts!</p>

		<h5 class="subhdr">Instalación a Partir de las Fuentes</h5>

		<p>Si en cambio Ud. desea instalar DarwinPorts a partir de su código fuente, hay todavía un par de
		cosas que deberá hacer después de bajar el paquete tar antes de poder instalar un porte a través de DarwinPorts,
		compilar e instalar DarwinPorts en sí. &#8220;<kbd>cd</kbd>&#8221; al directorio al cual bajó el tar y corra
		&#8220;<kbd>tar xjvf <a href="/downloads/DarwinPorts-<? print "$dp_version"; ?>.tar.bz2">DarwinPorts-<? print "$dp_version"; ?>.tar.bz2</a></kbd>&#8221;
		o &#8220;<kbd>tar xzvf <a href="/downloads/DarwinPorts-<? print "$dp_version"; ?>.tar.gz">DarwinPorts-<? print "$dp_version"; ?>.tar.gz</a></kbd>&#8221;,
		dependiendo de si bajó el tar bz2 o el gz, respectivamente. Esto desempaquetará las fuentes de DarwinPorts
		que procederá a compilar e instalar. Para esto, ejecute lo siguiente:</p>

<pre>cd DarwinPorts-<? print "$dp_version"; ?>

./configure && make && sudo make install</pre>

		<p>Opcionalmente:</p>

		<pre>cd ../
rm -rf DarwinPorts-<? print "$dp_version"; ?>*</pre>

		<p>Estos pasos deben ser ejecutados desde una cuenta administradora, de la cual &#8220;<kbd>sudo</kbd>&#8221;
		pedirá el password al momento de instalar. Este procedimiento creará una instalación standard de DarwinPorts
		en su sistema y, si los pasos opcionales son ejecutados también, removerá las ahora innecesarias fuentes de
		DarwinPorts y el correspondiente paquete tar. Para personalizar su instalación debe leer el output de
		&#8220;<kbd>./configure --help | more</kbd>&#8221; y pasar las opciones apropiadas al script de configuración
		en los pasos arriba detallados.</p>

		<p>Deberá adaptar los documentos de configuración de su shell para encontrar los programas instalados por
		DarwinPorts. Finalmente, debe sincronizar su instalación reciente con los servidores de OpenDarwin:</p>

		<pre>sudo port -d selfupdate</pre>

		<p>Al completar, DarwinPorts estará listo para instalar portes. Nuevamente, es recomendado ejecutar el comando
		anterior regularmente para mantener su instalación siempre al día.</p>

		<p>También puede referirse al documento &#8220;<tt>README_RELEASE1.es</tt>&#8221; contenido en los paquetes tar de las fuentes
		<? print "$dp_version"; ?> de DarwinPorts para instrucciones básicas de instalación y uso.</p>

		<h5 class="subhdr">Ayuda</h5>

		<p><a href="/es/help">Ayuda</a> también se encuentra disponible en caso que la necesite.</p>

		<h5 class="subhdr">Fuentes de CVS</h5>

		<p>Si Ud. es un programador o un usuario que desea mantenerse siempre al día con los últimos cambios y adiciones
		a DarwinPorts, puede adquirir las fuentes del proyecto a través de CVS.</p>

		<p>Use los siguientes comandos para realizar el &#8220;checkout&#8221; del proyecto del
		repositorio anónimo CVS de OpenDarwin:</p>
		
		<pre>cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od login
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od co -P darwinports</pre>

		<p>Cuando el servidor le pregunte por el password, simplemente pulse <kbd>return</kbd>
		en su teclado&mdash; el campo se encuentra vacío.</p>
		
		<p>Si no se quiere molestar con CVS para obtener las fuentes en primera instancia, puede bajar el <a href="/downloads/darwinports-nightly-cvs-snapshot.tar.gz">
		snapshot nocturno</a> de éstas y, una vez extraído, mantenerlo actualizado con los comandos de CVS de costumbre,
		&#8220;<kbd>cvs update</kbd>&#8221;.</p>
		
		<p>Si desea simplemente ver el repositorio CVS sin realizar un &#8220;checkout&#8221;,
		lo puede hacer vía <a href="http://www.opendarwin.org/cgi-bin/cvsweb.cgi/proj/darwinports/">CVSweb</a>.</p>
	
	</div>
</div>

<?php
	print_footer();
?>
