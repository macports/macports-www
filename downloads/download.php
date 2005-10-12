<?
$tableau = explode (".", $file);
$nb_element_1 = count ($tableau) -1;
if ($tableau[$nb_element_1] != "php") {
	header("Content-disposition: attachment; filename=$file");
	header("Content-Type: application/force-download");
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: ".filesize("./".$file));
	header("Pragma: no-cache");
	header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
	header("Expires: 0");
	readfile("./".$file);
}
else {
	header("Location: index.php");
}
?>