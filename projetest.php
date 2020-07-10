<?php
  include "header.php" ;
  include "headwhite.php";
  include "config.php";
?>
<?php
$sql = "SELECT titre, description, gallery FROM projet ";
    foreach ($conn -> query($sql) as $row) {
}

 ?>
<div class="bodyblack text-light pt-4">
  <div class="container">

    <form action ="testupdate.php"  method="post">
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
