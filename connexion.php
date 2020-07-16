<?php
require_once('config.php');
session_start();
  if ($_SESSION['isAdmin']) {
      echo "Welcome " . $_SESSION['authUser'];
      header('Location: index.php');
  }
  else {
      echo "Get out you're not authorized";
  }
?>
