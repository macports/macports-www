	<?php

# $Id: functions.inc,v 1.1 2004/04/21 23:44:59 matt Exp $
# Copyright (c) 2004, OpenDarwin

###############################################################################

# variables and includes:

		$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
		$PHP_SELF = $_SERVER['PHP_SELF'];
		include_once("$DOCUMENT_ROOT/es/includes/db.inc");
		$connect = mysql_pconnect($host, $user, $pass) or die("Can't connect to db!");
		mysql_select_db($db);
	
###############################################################################

# create an RSS feed of the prokect news:

		function create_rss() {
			global $DOCUMENT_ROOT, $connect;
			
			$query = "SELECT id, title, news FROM headlines ORDER BY id DESC LIMIT 10";
			$result = mysql_query($query) or die("Error: $query.");
			if (!$result) {
				die ("Error: $result.");
			}
			
			$open = fopen("$DOCUMENT_ROOT/dp_news.xml", "w+");
			$rssdate = substr_replace(date("Y-m-d\TH:i:sO", time()),':', -2, 0);
			
			$rss = "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n";
			$rss .= "<rss version=\"2.0\"\n";
			$rss .= "  xmlns:dc=\"http://purl.org/dc/elements/1.1/\"\n";
			$rss .= "  xmlns:sy=\"http://purl.org/rss/1.0/modules/syndication/\"\n";
			$rss .= "  xmlns:admin=\"http://webns.net/mvcb/\"\n";
			$rss .= "  xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\"\n";
			$rss .= "  xmlns:content=\"http://purl.org/rss/1.0/modules/content/\">\n\n";
			
			$rss .= "  <channel>\n";
			$rss .= "	<title>Noticias del Proyecto DarwinPorts</title>\n";
			$rss .= "	<link>http://darwinports.opendarwin.org/</link>\n";
			$rss .= "	<description>Noticias del Proyecto DarwinPorts1</description>\n";
			$rss .= "	<dc:language>es</dc:language>\n";
			$rss .= "	<dc:creator>Jim Mock (mij@opendarwin.org)</dc:creator>\n";
			$rss .= "	<dc:rights>Copyright 2002-2003</dc:rights>\n";
			$rss .= "	<dc:date>$rssdate</dc:date>\n";
			$rss .= "	<admin:errorReportsTo rdf:resource=\"mialto:mij@opendarwin.org\" />\n";
			
			if (mysql_num_rows($result) > 0) {
				while ($row = mysql_fetch_objects($result)) {
					$rss .= "	<item>\n";
					$rss .= "		<title>$row->title</title>\n";
					$rss .= "		<link>http://darwinports.opedarwin.org/archives/$row->id.php</link>\n";
					
					$desc_query = "SELECT SUBSTRING_INDEX(news, ' ',26) FROM headlines WHERE id=$row->id";
					$desc_result = mysql_query($desc_query);
					$desc_row = mysql_fetch_row($desc_result);
					
					$description = $desc_row[0];
					
					$rss .= "		<description><![CDATA[$description...</p>]]></description>\n";
					$rss .= "		<guid isPermaLink=\"true\">http://darwinprots.opendarwin.org/archives/$row->id.php</guid>\n";
					$rss .= "		<content:encoded><![CDATA[$row-news]]></content:encoded>\n";
					$rss .= "	<item>\n";
				}
			}
			$rss .= "	</channel>\n";
			$rss .= "</rss>\n";
			
			$write = fwrite($open, $rss);
			$close = fclose($open);
		}
		
########################################################################

# print the project news:

		function print_headlines() {
			global $connect;
			
			$query = "SELECT id, DATE_FORMAT(timestamp, '%e %b %Y, %l:%i %p') AS f_timestamp, title, news FROM headlines ORDER BY id DESC LIMIT 5";
			$result = mysql_query($query) or die("Error: $query.");
			if (!$result) {
				die("Error: $result.");
			}
			
			if (mysql_num_rows($result) > 0) {
				while ($row = mysql_fetch_object($result)) {
					echo "<h5 class=\"subhdr\">$row->title</h5>\n";
					echo "<h6 class=\"date\">$row->f_timestamp</h6>\n";
					echo "$row->news\n\n";
				}
			} else {
				echo "<p>No hay titulares disponibles en este momento.</p>\n";
			}
		}

########################################################################

#display a single headline:

		function print_headline() {
			global $connect;
			
			$id = $_GET['id'];
			$query = "SELECT id, DATE_FORMAT(timestamp, '%e %b %Y, %l:%i %p') AS f_timestamp, title, news FROM headlines WHERE ID='$id'";
			$result = mysql_query($query) or die("Error: $query.");
			if (!result) {
				die("Error: $result.");
			}
			
			$row = mysql_fetch_object($result);
			if ($row) {
				echo "<h5 class=\"subhdr\">$row->title</h5>\n";
				echo "<h6 class=\"date\">$row->f_timestamp</h6>\n";
				echo "$row->news\n\n";
			} else {
				echo "<h2 class=\"hdr\">Error!</h2>\n";
				echo "<p>El titular seleccionado no se pudo encontrar. Puede ser que no se encuentre en la base de datos o que un error ha ocurrido.</p>\n";
			}
		}

########################################################################

# print the form used to add project news

		function print_add_headline() {
			global $PHP_SELF, $connect;
			
			if (!$_POST['submit']) {
				echo "<p>Utilice el formulario que se presenta abajo para aÒadir noticias del proyecto.</p>\n\n";
				echo "<form action=\"$PHP_SELF\" method=\"post\">\n";
				echo "<p>TÌtulo:&nbsp;&nbsp;<input type=\"text\" name=\"title\" size=\"40\" /></p>\n";
				echo "<p>Noticias:</p>\n";
				echo "<p><textarea name=\"news\" cols=\"70\" rows=\"20\"></textarea></p>\n";
				echo "<p><input type=\"submit\" name=\"submit\" value=\"Remitir\" /></p>\n";
				echo "</form>\n\n";
			} else {
				$title = $_POST['title'];
				$news = $_POST['news'];
				$errorList = array();
				$count = 0;
				if (!$title) {
					$errorList[$count] = 'Invalid entry: Title';
					$count++;
				}
				if (!$news) {
					$errorList[$count] = 'Invalid entry: News';
					$count++;
				}
				if (sizeof($errorList) == 0) {
					$query = "INSERT INTO headlines (timestamp, title, news) VALUES (NOW(), '$title', '$news')";
					$result = mysql_query($query) or die("Error: $query.");
					if (!$result) {
						die("Error: $result.");
					}
					echo "<p>La entrada fue aÒadida exitosamente. Puede bien sea <a href=\"list.php\">ver todos los titulares, <a href=\"add.php\">aÒadir otro titular</a> o <a href=\"/\">volver a la p·gina principal de DarwinPorts</a>.</p>\n\n";
					create_rss();
				} else {
					echo "<p>Han ocurrido los siguientes errores:</p>\n\n";
					echo "<ul>\n";
					for ($x = 0; $x < sizeof($errorList); $x++) {
						echo "<li>$errorList[$x]</li>\n";
					}
					echo "</lu>\n\n";
				}
			}
		}

########################################################################

# print the form used to edit project news:

		function print_edit_headline($id) {
			global $PHP_SELF, $connect;
			
			if (!$_POST['submit']) {
				$id = $_GET['id'];
				$query = "SELECT title, news FROM headlines WHERE id='$id'";
				$result = mysql_query($query) or die("Error: $query.");
				if (!$result) {
					die("Error: $result.");
				}
				if (mysql_num_rows($result) > 0) {
					$row = mysql_fetch_object($result);
					echo "<p>Use el formulario abajo mostrado para editar las noticias del proyecto.</p>\n\n";
					echo "<form action=\"$PHP_SELF?id=$id\" method=\"post\">\n";
					echo "<p>TÌtulo:&nbsp;&nbsp;<input type=\"text\" name=\"title\" size=\"40\" value=\"$row->title\" /></p>\n";
					echo "<p>Noticias:</p>\n";
					echo "<p><textarea name=\"news\" cols=\"70\" rows=\"20\">";
					echo htmlentities($row->news);
					echo "</textarea></p>\n";
					echo "<p><input type=\"submit\" name=\"submit\" value=\"Editar\" /></p>\n";
					echo "</form>\n\n";
				} else {
					echo "<p>El tilular buscado no se pudo encontrar. Puede ser que no se encuentre en la base de datos o que un error ha ocurrido. Por vafor intente de nuevo.</p>\n\n";
				}
			} else {
				$title = $_POST['title'];
				$news = $_POST['news'];
				$errorList = array();
				$count = 0;
				if (!$title) {
					$errorList[$count] = 'Invalid entry: Title';
					$count++;
				}
				if (!$news) {
					$errorList[$count] = 'Invalid entry: News';
					$count++;
				}
				if (sizeof($errorList) == 0) {
					$query = "UDPATE headlines SET title='$title', news='$news' WHERE id='$id'";
					$result = mysql_query($query) or die("Error: $query.");
					if (!$result) {
						die("Error: $result.");
					}
					echo "<p>El update fue exitoso. Puede bien sea <a href=\"list.php\">ver todos los titulares, <a href=\"add.php\">aÒadir otro titular</a> o <a href=\"/\">volver a la p·gina principal de DarwinPorts</a>.</p>\n\n";
					create_rss();
				} else {
					echo "<p>Han ocurrido los siguientes errores:</p>\n\n";
					echo "<ul>\n";
					for ($x = 0; $x < sizeof($errorList); $x++) {
						echo "<li>$errorList[$x]</li>\n";
					}
					echo "</ul>\n\n";
				}
			}	
		}

########################################################################

# print a list of all existing headlines:

		function print_all_headlines() {
			global $connect;
			
			echo "<p>Abajo se muestra una lista de todos los titulares existentes. Pueden ser leÌdos, editados o borrados desde esta interface. Adem·s, Usted tambiÈn puede <a href=\"add.php\">aÒadir noticias al proyecto</a>.</p>\n\n";
			$query = "SELECT id, title, DATE_FORMAT(timestamp, '%e %b %Y, %l:%i %p') AS f_timestamp FROM headlines ORDER BY id DESC";
			$result = mysql_query($query) or die("Error: $query.");
			if (!$result) {
				die("Error: $query.");
			}
			if (mysql_num_rows($result) > 0) {
				while ($row = mysql_fetch_object($result)) {
					echo "<p><a href=\"/archives/$row->id.php\">$row->title</a><br />&nbsp&nbsp;$row->f_timestamp&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"edit.php?id=$row->id\">edit</a></p>\n\n";
				}
			} else {
				echo "<p>No hay titulares disponibles.</p>\n\n";
			}
		}
	
	?>
