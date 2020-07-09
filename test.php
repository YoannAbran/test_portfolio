<?php
include 'config.php';

$titre = $_POST['titre'];
$description = $_POST['description'];


try{
  $sql = "INSERT INTO projet (titre,description,gallery) VALUES ('$titre','$description','')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;


?>
