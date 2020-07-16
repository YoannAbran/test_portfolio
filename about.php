<?php
include "header.php";
include "headwhite.php";
// include "config.php";
include "admin.php";

if (isset($_POST['photoedit'])&& isset($_POST['descriptionedit']) && isset($_POST['coordedit'])) {

try {
$stmt = $conn->prepare("UPDATE about SET photo = :photo, description = :desription, coordonnee = :coordonnee");
$stmt->bindParam(':photo',$_POST['photoedit']);
$stmt->bindParam(':desription',$_POST['descriptionedit']);
$stmt->bindParam(':coordonnee',$_POST['coordedit']);
$stmt->execute();
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}
$sql = "SELECT photo, description, coordonnee FROM about ";
    foreach ($conn -> query($sql) as $row) {
}
?>
<div class="bodyblack justify-content-center text-light">
  <div class="d-flex justify-content-center">
    <div id="bgabout"class="container d-flex row">
      <div class="container d-flex flex-column align-items-center p-4 col-lg-6 col-xs">

<form id="aboutedit" action="" method="post">

  <textarea class="" name="photoedit" contenteditable="true"><?php echo $row['photo'] ?></textarea>

  <textarea class="" name="descriptionedit" contenteditable="true"><?php echo $row['description'] ?></textarea>

  <textarea name="coordedit" class = "" contenteditable="true"><?php echo $row['coordonnee'] ?></textarea>

  <input type="submit" value="Submit" >
</form>

      </div>
    </div>
  </div>
</div>
  <script>
  CKEDITOR.disableAutoInline = true;
  CKEDITOR.inline( 'photoedit' );
  CKEDITOR.instances.photoedit.updateElement();
  CKEDITOR.inline( 'descriptionedit' );
  CKEDITOR.instances.descriptionedit.updateElement();
  CKEDITOR.inline( 'coordedit' );
  CKEDITOR.instances.coordedit.updateElement();
</script>


<?php
include "footerwhite.php";
include "footer.php";


 ?>
