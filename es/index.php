	<?php
		$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
		include_once("$DOCUMENT_ROOT/es/includes/common.inc");
		include_once("$DOCUMENT_ROOT/es/includes/functions.inc");
		print_header('Home de DarwinPorts', 'utf-8');
	?>

		<div id="content">
			<h2 class="hdr">Introducción a DarwinPorts</h2>

			<p>El objetivo principal del proyecto DarwinPorts es proveer una forma
			sencilla de instalar varios productos de código abierto en un sistema
			Darwin, Mac OS X, FreeBSD o Linux.</p>

			<p>En la actualidad hay unos cuantos cientos de <a href="/es/ports/">portes</a>
			completados y usables, mientras que más son agregados regularmente. Usted
			puede conocer sobre los portes recientemente añadidos al susbcribirse a la
			lista de correo <a href="http://www.opendarwin.org/mailman/listinfo/cvs-darwinports-all">cvs-darwinports-all</a>.</p>

			<p>Para más información sobre la obtención e instalación de DarwinPorts, por
			favor refiérase la sección <a href="/es/getdp/">Obtención de DarwinPorts</a>
			de esta página. También asegúrese de revisar la <a href="/docs/">documentación</a>
			y si tiene preguntas o sufre de algún problema, puede <a href="/es/help/">buscar ayuda</a>.</p>

			<p>Reportes de "bugs", peticiones de funcionalidad y nuevos portes deberían ser
			introducidos en <a href="http://www.opendarwin.org/bugzilla/">Bugzilla</a>.</p>

		<div id="news">
			<h2 class="hdr">Noticias del Proyecto</h2>
			
		<?php
			print_headlines();
        ?>
       </div>
      </div>
     </div>

<?php
	print_footer();
?>
