<?php
  include "header.php";
  include "headwhite.php";
  include "admin.php";
?>

<form action ="testcreate.php"  method="post">

  <h1>Titre</h1>
      <textarea name="titre" id="titre">
        Titre
      </textarea>

      <h1>description</h1>
          <textarea name="description" id="description">
            Description
          </textarea>

      <h1>gallery</h1>
          <textarea name="gallery" id="gallery">
            Image
          </textarea>

            <input type="submit" value="Submit">
</form>


      <script>
        CKEDITOR.replace( 'titre' );
        CKEDITOR.replace( 'description' );
        CKEDITOR.replace( 'gallery' );
      </script>

<?php
  include "footerwhite.php";
  include "footer.php";
 ?>
