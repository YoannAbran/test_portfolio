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
