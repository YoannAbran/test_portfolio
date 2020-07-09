<?php
  include "header.php" ;
  include "headwhite.php";
  include "config.php";
?>
<?php
$sql = "SELECT titre, description FROM projet ";
    foreach ($conn -> query($sql) as $row) {
}

 ?>
<div class="bodyblack text-light pt-4">
  <div  class="container">
    <h1 id="editor" class="text-center"><?php echo $row['titre'] ?></h1>
    <div id="edit" ><?php echo $row['description'] ?></div>
    <div class="container d-flex">
      <div><img src="img/projet.jpg" class="img-fluid" alt="..."></div>
      <div><img src="img/laptop.jpg" class="img-fluid" alt="..."></div>
      <div><img src="img/article.jpg" class="img-fluid" alt="..."></div>
    </div>
  </div>
</div>
<script>
        InlineEditor
            .create( document.querySelector( '#edit' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
<script>
        InlineEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

<?php
  include "footerwhite.php";
  include "footer.php";
  ?>
