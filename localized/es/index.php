	<?php
		$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
		include_once("$DOCUMENT_ROOT/es/includes/common.inc");
		include_once("$DOCUMENT_ROOT/es/includes/functions.inc");
		include_once("$DOCUMENT_ROOT/includes/db.inc");
		print_header('Home de DarwinPorts', 'utf-8');
	?>

		<div id="content">
			<h2 class="hdr">Introducción a DarwinPorts</h2>

			<p>El objetivo principal del proyecto DarwinPorts es proveer una forma
			sencilla de instalar varios programas de código abierto en la familia
			de sistemas operativos Darwin (<a href="http://www.opendarwin.org/">OpenDarwin</a>,
			<a href="http://www.apple.com/macosx/">Mac OS X</a> y
			<a href="http://developer.apple.com/darwin/projects/darwin/">Darwin</a>).</p>

<?
                $result = mysql_query("SELECT count(*) from darwinports.portfiles");
                if ($result) {
                        $row = mysql_fetch_array($result);
                        $count = $row[0];
                } else {
                        $count = 0;
                }
?>

			<p>En la actualidad hay alrededor de <?= $count; ?> <a href="/es/ports/">portes</a>
			completados y funcionales, mientras que más son agregados regularmente a la colección.
			Para estar al día con las últimas adiciones, puede susbcribirse a la
			lista de correo <a href="http://www.opendarwin.org/mailman/listinfo/cvs-darwinports-all">cvs-darwinports-all</a>.</p>

			<p>Para más información sobre la obtención e instalación de DarwinPorts, por
			favor refiérase la sección <a href="/es/getdp/">Obtención de DarwinPorts</a>
			de nuestra página. También asegúrese de revisar la <a href="/docs/">documentación</a>
			(en Inglés) y si tiene preguntas o experimenta algún problema, puede buscar ayuda en nuestra
			<a href="/es/help/">sección de ayuda</a>. Nuestro
			<a href="http://wiki.opendarwin.org/index.php/DarwinPorts">Wiki</a> también es un
			buen recurso para ayuda general y variada, especialmente el proyecto vivo de
			<a href="http://wiki.opendarwin.org/index.php/DarwinPorts:FAQ">Preguntas Frecuentes y Respuestas (FAQ)</a>
            (en Inglés).</p>

			<p>Reportes de "bugs", peticiones de funcionalidad y nuevos portes deben ser
			introducidos en <a href="http://www.opendarwin.org/bugzilla/">Bugzilla</a>. Por
			favor consulte nuestra <a href="docs/ch01s05.html#user_bugs">documentación sobre reportes de bugs</a>
			(en Inglés) para mejorar el procesamiento de su(s) reporte(s).</p>

		<div id="news">
			<h2 class="hdr">Noticias del Proyecto</h2>
			
		<?php
			print_headlines();
		?>

		<p>También puede buscar noticias viejas en nuestro <a href="/es/archives.php">archivo de noticias</a>.</p>

       </div>
      </div>
     </div>

<?php
	print_footer();
?>
