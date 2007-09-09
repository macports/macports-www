<?php
  $MPWEB = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']);
  include_once("$MPWEB/includes/news.inc");
  create_rss();
  /* $Id$ */
?>
