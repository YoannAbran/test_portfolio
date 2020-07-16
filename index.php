
<?php
  include "header.php";
  include "headwhite.php";
  // require_once('config.php');
  include "admin.php";

    $sql = "SELECT id_projet, titre, description, gallery FROM projet ";
    foreach ($conn -> query($sql) as $row) {}
  ?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>

        <?php  foreach ($conn -> query($sql) as $row) {
        echo "<tr><td><a href='projetest.php?id=".$row['id_projet']."'>".$row['titre']."</a></td>";
        echo "<td>".$row['description']."</td> </tr>";
          } ?>

 </tbody>
</table>
<?php
  include "footerwhite.php";
  include "footer.php";
 ?>
