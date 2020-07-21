<?php
  include "header.php" ;
  include "headwhite.php";


$id = $_GET['id'];

if (isset($_POST['titreedit'])&& isset($_POST['descredit']) && isset($_POST['imageedit'])) {

$titredit = $_POST['titreedit'];

$descredit = $_POST['descredit'];

$imageedit = $_POST['imageedit'];


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
?>

<div class="bodyblack text-light pt-4">



  <div class="container d-flex justify-content-center">
    <div class=" container d-flex justify-content-center bgabout">
    <form name="formedit" action ="" class="p-5 text-center text-dark" method="post" id="formedit">

    <input type="text" name="titreedit" value="<?php echo htmlspecialchars($row['titre']) ?>">

    <textarea name="descredit" id="descredit" ><?php echo  htmlspecialchars($row['description']) ?></textarea>

    <textarea name="imageedit" id="imageedit" ></textarea>

      <input class="btn" type="submit" value="Submit">
      </form>
<div class="">
  <?php echo  $row['description'] ?>
</div>
  </div>
  </div>
</div>



<?php
  include "footerwhite.php";
  include "footer.php";
  ?>
