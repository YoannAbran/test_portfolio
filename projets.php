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


<div class="scene">
  <div class="carousel">
<?php

  foreach ($rows as $row){
if (!empty($row['image'])){

  echo "	<div class='carousel__cell '>";
  echo "<div class=' card shadow-sm bgcard text-dark' >";
  	echo "<img src='".$row['image']."' class='card-img-top' alt='...'>";
  	echo "<div class='card-body d-flex flex-column justify-content-between'>";
  		echo "<h5 class='card-title'>".$row['titre']."</h5>";
  		echo "<a href='projet.php?id=".$row['id_projet']."' class='btn'>GO !!</a>";

  	echo "</div>
  </div>
  </div>";

}

else{

  echo "	<div class='carousel__cell'>";
  echo "<div class=' card shadow-sm bgcard text-dark' >";
    echo "<img src='img/projet.jpg' class='card-img-top' alt='...'>";
    echo "<div class='card-body d-flex flex-column justify-content-between'>";
      echo "<h5 class='card-title'>".$row['titre']."</h5>";
      echo "<a href='projet.php?id=".$row['id_projet']."' class='btn'>GO !!</a>";

    echo "</div>
  </div>
  </div>";
}
}
	 ?>


</div>
</div>
<div class="carousel-options">
  <!-- <p>
    <label>
      Cells
      <input class="cells-range" type="range" min="3" max="15" value="3" />
    </label>
  </p> -->
  <p>
    <button class="previous-button">Previous</button>
    <button class="next-button">Next</button>
  </p>
  <p>
    Orientation:
    <label>
      <input type="radio" name="orientation" value="horizontal" checked />
      horizontal
    </label>
    <label>
      <input type="radio" name="orientation" value="vertical" />
      vertical
    </label>
  </p>
</div>
<script src="main.js">

</script>

<?php
include "footerwhite.php";
?>
