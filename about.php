<?php
include "header.php";
include "headwhite.php";
include "admin.php";

if (isset($_POST['photoedit'])&& isset($_POST['descriptionedit']) && isset($_POST['coordedit'])) {
// $patternp = '$<\s*p[^>]*>([^<]*)<\s*\/\s*p\s*>$';

  $coordedit = $_POST['coordedit'];
  // preg_match_all('$<\s*p[^>]*>([^<]*)<\s*\/\s*p\s*>$',$coordedit, $matches,PREG_PATTERN_ORDER);

  $descriptionedit = $_POST['descriptionedit'];

  // preg_match_all('$<\s*p[^>]*>([^<]*)<\s*\/\s*p\s*>$',$descriptionedit,$m);
  // $descriptionedit = $matchesdesc[1];

  $photoedit = $_POST['photoedit'];
  // $patternimg = '$src="([^"]+)$';
  // preg_match_all('$<\s*p[^>]*>([^<]*)<\s*\/\s*p\s*>$',$photoedit);

try {
$stmt = $conn->prepare("UPDATE about SET photo = :photo, description = :desription, coordonnee = :coordonnee");
$stmt->bindParam(':photo',$photoedit);
$stmt->bindParam(':desription',$descriptionedit);
$stmt->bindParam(':coordonnee',$coordedit);
$stmt->execute();
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}
$sql = $conn->prepare("SELECT photo, description, coordonnee FROM about ");
$sql->execute();
$row = $sql->fetch();
?>
<div class="bodyblack justify-content-center text-light">
  <div class="d-flex justify-content-center ">
    <div class=" container d-flex row bgabout">
      <div class="container d-flex flex-column align-items-center p-4 col-lg-6 col-xs">

<form id="aboutedit" class="text-center text-dark" action="" method="post">

  <textarea class="" name="photoedit" contenteditable="true"><?php echo htmlspecialchars($row['photo']) ?></textarea>

  <textarea class="" name="descriptionedit" contenteditable="true"><?php echo htmlspecialchars($row['description']) ?></textarea>

  <textarea name="coordedit" class = "" contenteditable="true"><?php echo htmlspecialchars($row['coordonnee']) ?></textarea>

  <input class="btn" type="submit" value="Submit" >
</form>

<div class="">
  <?php echo $row['coordonnee'] ?>
</div>

      </div>
    </div>
  </div>
</div>
  <script>

  CKEDITOR.disableAutoInline = true;
  CKEDITOR.inline( 'photoedit');
  CKEDITOR.instances.photoedit.updateElement();
  CKEDITOR.inline( 'descriptionedit');
  CKEDITOR.instances.descriptionedit.updateElement();
  CKEDITOR.inline( 'coordedit');
  CKEDITOR.instances.coordedit.updateElement();
    CKEDITOR.config.disallowedContent = 'p';
</script>


<?php
include "footerwhite.php";
include "footer.php";


 ?>
