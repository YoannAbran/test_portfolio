<?php
include 'config.php';

//creation nouvel article/projet
if(!empty($_POST['titre'])&& !empty($_POST['description'])&& !empty($_POST['gallery'])){

$titre = $_POST['titre'];
$description = $_POST['description'];
$gallery = $_POST['gallery'];

try{
  $sql = "INSERT INTO projet (titre,description,gallery) VALUES ('$titre','$description','$gallery')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;

}



?>
