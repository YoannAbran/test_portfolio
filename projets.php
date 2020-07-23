<?php
include "headwhite.php";
// include "config.php";


try {
$sql = $conn->prepare("SELECT projet.titre, projet.description, projet.id_projet, images.id_image, images.image, images.idprojet
                        FROM projet
                        LEFT JOIN images ON projet.id_projet = images.idprojet
                        GROUP BY projet.id_projet
                      ");
$sql->execute();
$rows = $sql->fetchAll();
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


foreach ($rows as $row) {
}
?>

<div class=" contain-carou container-fluid d-flex flex-column justify-content-center align-items-center">


<div class="container-fluid scene d-flex justify-content-center align-items-center ">
  <div class="container carousel d-flex justify-content-center align-items-center  ">
<?php

  foreach ($rows as $row){
if (!empty($row['image'])){

    echo "	<div class='carousel__cell '>";
  	echo "<img class='img-fluid imgcarou' src='".$row['image']."'  alt='...'>";
  	echo "</div>";

}
else{

    echo "	<div class='carousel__cell'>";
    echo "<img class='img-fluid imgcarou' src='img/projet.jpg'  alt='...'>";
    echo "</div>";
}
}
	 ?>
</div>
</div>
</div>
<div class="carousel-options">
  <p>
    <button class="previous-button">Previous</button>
    <button class="next-button">Next</button>
  </p>



  <p class="d-none">
    Orientation:
    <label>
      <input type="radio" name="orientation" value="horizontal" />
      horizontal
    </label>
    <label>
      <input type="radio" name="orientation" value="vertical" checked/>
      vertical
    </label>
  </p>
</div>

<script src="main.js"></script>

<?php
include "footerwhite.php";
?>
