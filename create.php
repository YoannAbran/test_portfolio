<?php
  include "header.php";
  include "headwhite.php";
  // include "admin.php";
?>
<div class="bodyblack text-center">
  <!-- <form id='create' action ="testcreate.php"  method="post"> -->
<form  class="text-light" method='post' action='testcreate.php' enctype='multipart/form-data'>
    <h1 class="gold p-4">Titre</h1>
        <input type="text" name="titre" value="titre">

        <h1 class="gold p-4">description</h1>
            <textarea name="description" id="description">
              Description
            </textarea>
<h1 class="gold p-4">gallery</h1>
<input type='file' name='files[]' multiple />
<button  class="m-4" type="submit" value="Submit" name="submit">Submit</button>

</form>
</div>



      <script>
        // CKEDITOR.replace( 'titre');
        // CKEDITOR.replace( 'description');
        // CKEDITOR.replace( 'gallery');
        // CKEDITOR.config.autoParagraph = false;
      </script>

<?php
  include "footerwhite.php";
  include "footer.php";
 ?>
