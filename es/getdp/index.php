	<?php
		$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
		include_once("$DOCUMENT_ROOT/es/includes/common.inc");
		/* include_once("$DOCUMENT_ROOT/es/includes/functions.inc"); */
		print_header('Obtenci&oacute;n de DarwinPorts', 'iso-8859-1');
	?>
	
	<div id="content">
		<h2 class="hdr">Obtenci&oacute;n de DarwinPorts</h2>
		
		<p>Si Usted desea instalar DarwinPorts, primero debe realizar un &ldquo;checkout&rdquo;
		del proyecto desde el repositorio CVS de OpenDarwin.</p>
		
		<p>Por favor note que para instalar y usar DarwinPorts, debe tener instalado bien sea 
		los &ldquo;Developer Tools&rdquo; de Mac OS X (para 10.2.x) o Xcode (para 10.3.x).</p>
		
		<p>Si desea usar DarwinPorts en alguna otra plataforma adem&aacute;s de Mac OS X, por favor note
		las siguientes dependencias (se asume que ya posee lo b&aacute;sico como gcc):
		<ul>
			<li>TCL (8.3 u 8.4)</il>
			<li>curl</li>
			<li>OpenSSL o libmd</li>
		</ul>
		
		<p>Use los siguientes comandos para comenzar el &ldquo;checkout&rdquo; del proyecto del
		repositorio CVS:</p>
		
			      <pre>cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od login
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od co -P darwinports</pre>

		<p>Cuando el servidor le pregunte por un password, simplemente pulse <kbd>return</kbd>
		en su teclado&mdash; el campo del password se encuentra vac&iacute;o.</p>
		
		<p>Si no se quiere molestar con CVS para obtener DarwinPorts, Usted puede bajar un <a href="http://darwinports.opendarwin.org/darwinports-nightly-cvs-snapshot.tar.gz">
		snapshot de CVS nocturno</a>. Una vez extra&iacute;do, Ud. lo puede mantener acutalizado con
		los comandos de CVS de costumbre.</p>
		
		<p>Si desea simplemente ver el repositorio CVS sin realizar un &ldquo;checkout&rdquo;,
		lo puede hacer via <a href="http://www.opendarwin.org/cgi-bin/cvsweb.cgi/proj/darwinports/">CVSweb</a>.</p>
		
		<h5 class="subhdr">Instalaci&oacute;n</h5>
		
		<p>Una vez que el proyecto ha sido obtenido del repositorio CVS, todav&iacute;a hay un par de
		cosas que deber&aacute; hacer para poder instalar un porte.</p>
		
		<p>Para instrucciones de instalaci&oacute;n, por favor vea el documento <tt>README.es</tt> en
		el directorio donde realiz&oacute; el &ldquo;checkout&rdquo; de CVS. Tambi&eacute;n est&aacute; el <a href="http://darwinports.opendarwin.org/docs/ch01s03.html">cap&iacute;tulo</a>
		(en ingl&eacute;s) de la <a href="http://darwinports.opendarwin.org/docs/">Gu&iacute;a de DarwinPorts</a>
		que provee instrucciones de instalaci&oacute;n y uso de DarwinPorts.</p>
		
		<p><a href="/es/help">Ayuda</a> tambi&eacute;n se encuentra disponible en caso que la necesite.</p>
	
	</div>
</div>

	<?php
		print_footer();
	?>
