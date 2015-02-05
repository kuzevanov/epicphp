<?php

require_once 'header.php';

$page = $_GET['page'];

if ($page == 'about') {
  require_once 'about.php';

if ($page == 'contakts') {
  require_once 'contakts.php';

}

require_once 'footer.php';

?>
