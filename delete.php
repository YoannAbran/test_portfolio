<?php

include 'config.php';
if (isset($_GET['idel'])) {

$id = $_GET['idel'];
$del = "DELETE FROM projet WHERE id_projet = $id";
 $conn->exec($del);
  echo "Record deleted successfully";
header('Location: index.php');
exit;

}


if (isset($_GET['imgdel'])) {
$idimg = $_GET['imgdel'];
try {
  $del = $conn-> prepare("DELETE FROM images WHERE id_image = $idimg");
  $del->execute();
  echo "Record deleted successfully";
  header('Location: projetest.php');
  exit;
}
  catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}
