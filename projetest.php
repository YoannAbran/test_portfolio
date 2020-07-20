<?php
  include "header.php" ;
  include "headwhite.php";
  include "admin.php";

$id = $_GET['id'];

if (isset($_POST['titreedit'])&& isset($_POST['descredit']) && isset($_POST['galleryedit'])) {

// $patternp = '$<\s*p[^>]*>([^<]*)<\s*\/\s*p\s*>$';

$titredit = $_POST['titreedit'];
// preg_match($patternp,$titredit,$matchestitre);
// $titredit = $matchestitre[1];

$descredit = $_POST['descredit'];
// preg_match($patternp,$descredit,$matchesdes);
// $descredit = $matchesdes[1];

$galleryedit = $_POST['galleryedit'];
// preg_match($patternp,$galleryedit,$matchesgal);
// $galleryedit = $matchesgal[1];

try {
$stmt = $conn->prepare("UPDATE projet SET titre = :titre, description = :desription, gallery = :gallery WHERE id_projet= $id ");
$stmt->bindParam(':titre',$titredit);
$stmt->bindParam(':desription',$descredit);
$stmt->bindParam(':gallery',$galleryedit);
$stmt->execute();
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}
$sql = $conn->prepare("SELECT titre, description, gallery FROM projet WHERE id_projet= $id ");
$sql->execute();
$row = $sql->fetch();

?>

<div class="bodyblack text-light pt-4">



  <div class="container d-flex justify-content-center">
    <div class=" container d-flex justify-content-center bgabout">
    <form name="formedit" action ="" class="p-5 text-center text-dark" method="post" id="formedit">
    <textarea name="titreedit" id="titreedit" contenteditable="true" ><?php echo htmlspecialchars($row['titre']) ?></textarea>

    <textarea name="descredit" id="descredit" contenteditable="true" ><?php echo  htmlspecialchars($row['description']) ?></textarea>

    <textarea name="galleryedit" id="galleryedit" contenteditable="true" ><?php echo htmlspecialchars($row['gallery'])?></textarea>

      <input class="btn" type="submit" value="Submit">
      </form>
<div class="">
  <?php echo  $row['description'] ?>
</div>
  </div>
  </div>
</div>

<script>
CKEDITOR.config.disallowedContent = 'p';
CKEDITOR.disableAutoInline = true;
CKEDITOR.inline( 'titreedit' );
// CKEDITOR.instances.titreedit.updateElement();
CKEDITOR.inline( 'descredit' );
// CKEDITOR.instances.descredit.updateElement();
CKEDITOR.inline( 'galleryedit' );
// CKEDITOR.instances.galleryedit.updateElement();

</script>

<?php
  include "footerwhite.php";
  include "footer.php";
  ?>
