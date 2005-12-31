	<?php
		$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
		include_once("$DOCUMENT_ROOT/es/includes/common.inc");
		/* include_once("$DOCUMENT_ROOT/es/includes/functions.inc"); */
		print_header('Ayuda', 'utf-8');
	?>
	
	<div id="content">
		<h2 class="hdr">Obtención de Ayuda</h2>
		
		<p>Si experimenta algún problema usando DarwinPorts que no puede resolver,
		tenemos varios recursos para ayudarle.</p>
		
		<h5 class="subhdr">Documentación</h5>
		
		<p>La <a href="/docs/">Guía de DarwinPorts</a> tiene una sección para usuarios,
		<a href="/docs/pt01.html">Parte 1: Usando DarwinPorts</a> (en Inglés).</p>

		<p>Las <a href="http://wiki.opendarwin.org/index.php/DarwinPorts:FAQ">Preguntas Frecuentes y Respuestas (FAQ)</a>
		(en Inglés) son un esfuerzo vivo y conducido por los usuarios, parte
		de nuestro <a href="http://wiki.opendarwin.org/index.php/DarwinPorts">Wiki</a>,
		donde cualquiera con una <a href="http://wiki.opendarwin.org/index.php?title=Special:Userlogin&returnto=DarwinPorts">cuenta de Wiki</a> y conocimiento sobre DarwinPorts puede contribuir
		con información para ayudar a otros.</p>
				
		<p>Toda nuestra documentación es un trabajo en progreso, por lo que si ubica
		algún error o tiene alguna pregunta sobre cualquier parte de ésta en específico, por favor infórmenos
		al respecto! Así nos estará ayudando.</p>
		
		<h5 class="subhdr">Listas de Correo</h5>
		
		<p>La <a href="http://www.opendarwin.org/mailman/listinfo/darwinports">lista
		general de correo de DarwinPorts</a> está abierta al público. Es el mejor lugar para
		hacer preguntas sobre DarwinPorts, para nuevos usuarios, programadores, todos
		por igual! Es también el lugar donde se lleva a cabo toda la discusión sobre
		DarwinPorts en sí. Por favor note que debido a problemas de spam, la lista de correos
		requiere que todos los mensajes de personas no suscritas a la lista sean aprobados.
		Es mejor suscribirse.</p>
		
		<p>Aunque no es necesariamente un requisito, puede revisar los
		<a href="http://www.opendarwin.org/pipermail/darwinports/"> archivos de la lista</a>
		antes de publicar algúna pregunta. Intentamos ayudar en lo posible, pero si la
		pregunta es algo común puede que nuestras respuestas sean relativamente cortas.</p>

		<p>Por otro lado, archivos indexados de esta lista se pueden explorar en
		<a href="http://gmane.org/">Gmane.org</a> o a través de <a href="nntp://news.gmane.org/">NNTP</a>.</p>
		
		<p>Cuando publique alguna pregunta en la lista, por favor incluya cualquier información
		que crea es relevante al problema, tal como el sistema operativo y versión
		que usa, Mac OS X 10.3.2 por ejemplo, si tiene algún otro software de terceros
		instalado, como en /usr/local, y cualquier mensaje de error que DarwinPorts
		ofrezca (el uso de las opciones -v y -d del programa  port(1) es recomendado para
		activar la información de depuración, es mucho más fácil para nosotros ayudar una vez
		estas son usadas).</p>

		<h5 class="subhdr">IRC</h5>
		
		<p>Para una discusión más en tiempo real, el canal #darwinports en la <a href="http://freenode">
		red Freenode de IRC</a> es generalmente donde compartimos.</p>
		
		<p>Aunque generalemte es de ayuda, por favor mantenga en mente que si entra al
		canal de IRC nadie está obligado a ayudar o hasta a responder sus preguntas. No lo
		tome personal, simplemente hágalas en la <a href="http://www.opendarwin.org/mialman/listinfo/darwinports">lista de correo</a>
		en vez.</p>
		
	</div>
</div>

	<?php
		print_footer();
	?>
