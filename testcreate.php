<?php
include 'config.php';



//creation nouvel article/projet
if(!empty($_POST['titre'])&& !empty($_POST['description'])&& !empty($_POST['gallery'])){

$titre = htmlspecialchars($_POST['titre']);
$description = htmlspecialchars($_POST['description']);
$gallery = $_POST['gallery'];
$pattern = '$src="([^"]+)$';
preg_match($pattern,$gallery,$matches);
$gallery = $matches[1];

try{
  if(isset($_POST['titre'])){
  $sql = "INSERT INTO projet (titre,description,gallery) VALUES ('$titre','$description','$gallery')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "
            <script>
                alert('Record updated successfully!');
            </script>";

        $last_id = $conn->lastInsertId();
header("Location: projetest.php?id=".$last_id );
exit;
}
}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;

}
// function getsrc(){
// $pattern = '$src="([^"]+)$';
// preg_match($pattern,$gallery,$matches);
// return $matches[1];
// }
//   }
