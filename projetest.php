<?php
  include "header.php" ;
  include "headwhite.php";
  include "config.php";
?>
<?php


try {

$stmt = $conn->prepare("UPDATE projet SET titre = :titre, description = :desription, gallery = :gallery  WHERE id_projet=9");
$stmt->bindParam(':titre',$_POST['titreedit']);
$stmt->bindParam(':desription',$_POST['descredit']);
$stmt->bindParam(':gallery',$_POST['galleryedit']);
$stmt->execute();
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$sql = "SELECT titre, description, gallery FROM projet ";
    foreach ($conn -> query($sql) as $row) {
}

?>

<div class="bodyblack text-light pt-4">
  <div class="container">

    <form name="formedit" action =""  method="post" id="formedit">
    <textarea name="titreedit" id="titreedit" contenteditable="true" class="text-center"><?php echo $row['titre'] ?></textarea>

    <textarea name="descredit" id="descredit" contenteditable="true" ><?php echo $row['description'] ?></textarea>

    <textarea name="galleryedit" id="galleryedit" contenteditable="true" ><?php echo $row['gallery'] ?></textarea>

      <input type="submit" value="Submit">
      </form>

  </div>
</div>

<script src="main.js"></script>

<?php
  include "footerwhite.php";
  include "footer.php";
  ?>
