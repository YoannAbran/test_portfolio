<?php
  include "header.php" ;
  include "headwhite.php";
  include "edit.php";




?>

<div class="bodyblack text-light pt-4">

  <div class="container d-flex justify-content-center">

  <div class=" container d-flex flex-column align-items-center bgabout">

    <form  action ="" class="p-5 text-center text-dark" method="post" id="formedit">
      <div class="p-2">
        <input type="text" name="titreedit" value="<?php echo htmlspecialchars($row['titre']) ?>" size="50">
      </div>
      <div class="p-2">
        <textarea name="descredit" id="descredit" rows="8" cols="100" ><?php echo  htmlspecialchars($row['description']) ?></textarea>
      </div>
      <div class="p-2">
        <input class="btn" type="submit" value="Submit">
      </div>
        </form>

      <div class="d-flex row">

<?php

foreach ($sqlimg as $rowimg) {

  echo"<div class='form-check d-flex flex-column align-items-center col-3'>
  <img class='py-3 col' src='".$rowimg['image']."' alt=''>
  <form action ='editdelete.php?imgdel=".$rowimg['id_image']."&id=".$id."' method='post' name='delimg' onsubmit='return submitResult();'><input type='submit' value='Supprimer' name='delimg'></form>

</div>";

}

 ?>


</div>

<div class="">
  <form action="<?php echo "editimg.php?id=".$id.""; ?>"  method="post" enctype='multipart/form-data'>
    <input type='file' name='images[]' multiple />
    <button  class="m-4" type="submit" value="Submit" name="editimg">modif</button>
  </form>

</div>



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
