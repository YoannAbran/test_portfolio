<?php
  include "header.php" ;
  include "headwhite.php";




$id = $_GET['id'];

if (isset($_POST['submit'])) {
extract($_POST);

try {
$stmt = $conn->prepare("UPDATE projet SET titre = :titre, description = :desription WHERE id_projet= $id ");
$stmt->bindParam(':titre',$titredit);
$stmt->bindParam(':desription',$descredit);

$stmt->execute();
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}
try {
$sql = $conn->prepare("SELECT titre, description FROM projet WHERE id_projet= $id ");
$sql->execute();
$row = $sql->fetch();
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
try {
$sqlimg = $conn->prepare("SELECT id_image,image,idprojet FROM images WHERE idprojet= $id ");
$sqlimg->execute();
// $rowimg = $sqlimg->fetch();
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


?>

<div class="bodyblack text-light pt-4">



  <div class="container d-flex justify-content-center">

  <div class=" container d-flex flex-column align-items-center bgabout">

    <form name="formedit" action ="" class="p-5 text-center text-dark" method="post" id="formedit">
      <div class="">
        <input type="text" name="titreedit" value="<?php echo htmlspecialchars($row['titre']) ?>">
      </div>
      <div class="">
        <textarea name="descredit" id="descredit" ><?php echo  htmlspecialchars($row['description']) ?></textarea>
      </div>

      <div class="d-flex row">

<?php

foreach ($sqlimg as $rowimg) {

  echo"<div class='form-check d-flex flex-column align-items-center col-3'>
  <img class='py-3 col' src='".$rowimg['image']."' alt=''>
  <form action ='delete.php?imgdel=".$rowimg['id_image']."' method='post' onsubmit='return submitResult();'><input type='submit' value='Supprimer'></form>

</div>";

}

 ?>


</div>

<div class="">
  <input type='file' name='files[]' multiple />
  <button  class="m-4" type="submit" value="Submit" name="submit">modif</button>
</div>

    <div class="">
      <input class="btn" type="submit" value="Submit">
    </div>

      </form>

  </div>
  </div>
</div>

<script>
function submitResult() {
   if ( confirm("Etes vous sur de vouloir effacer ce fichier?") == false ) {
      return false ;
   } else {
      return true ;
   }
}
</script>

<?php
  include "footerwhite.php";
  include "footer.php";
  ?>
