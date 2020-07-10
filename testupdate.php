<?php
require_once 'config.php';


//update projet/article


try {

$stmt = $conn->prepare("UPDATE projet SET titre = :titre, description = :desription, gallery = :gallery  WHERE id_projet=9");
$stmt->bindParam(':titre',$_POST['titreedit']);
$stmt->bindParam(':desription',$_POST['descredit']);
$stmt->bindParam(':gallery',$_POST['galleryedit']);
$stmt->execute();
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
// $conn = null;
// if (isset($titre)) {
//   // code...
//
// $updti = "UPDATE projet SET titre = '$titre' WHERE id_projet=9 ";
//
//   // Prepare statement
//   $stmt = $conn->prepare($updti);
//
//   // execute the query
//   $stmt->execute();
//
//   // echo a message to say the UPDATE succeeded
//   echo $stmt->rowCount() . " records UPDATED successfully";
// $conn = null;
// }
//
// else if (isset($descr)) {
//   // code...
// $updde = "UPDATE projet SET description = '$descr' WHERE id_projet=9 ";
//
//   // Prepare statement
//   $stmt = $conn->prepare($updde);
//
//   // execute the query
//   $stmt->execute();
//
//   // echo a message to say the UPDATE succeeded
//   echo $stmt->rowCount() . " records UPDATED successfully";
//
// $conn = null;
// }
//
// elseif (isset($galledit)) {
//   // code...
//
// $updga = "UPDATE projet SET gallery = '$galledit' WHERE id_projet=9 ";
//
//   // Prepare statement
//   $stmt = $conn->prepare($updga);
//
//   // execute the query
//   $stmt->execute();
//
//   // echo a message to say the UPDATE succeeded
//   echo $stmt->rowCount() . " records UPDATED successfully";
//
// $conn = null;
// }
?>
