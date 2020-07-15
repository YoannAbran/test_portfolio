<?php
      include "config.php";
      $sql = "SELECT id_projet, titre, description, gallery FROM projet ";
      foreach ($conn -> query($sql) as $row) {} ?>

<header id="headwhite" class="d-flex justify-content-between">
<div class=" container d-flex justify-content-between">


<div class="d-flex  col-6">


<nav class="navbar navbar-expand-lg navbar-light align-self-start pt-4 ">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNavDropdown">
   <ul class="navbar-nav">
     <li class="nav-item active">
       <a class="nav-link" href="index.php">Acceuil <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Projets
       </a>
       <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">

           <?php  foreach ($conn -> query($sql) as $row) {
         echo "<a class='dropdown-item' href='projetest.php?id=".$row['id_projet']."'>".$row['titre']."</a>";
            } ?>

       </div>
     </li>
     <li class="nav-item">
        <a class="nav-link text-dark" href="about.php">À propos de moi</a>
     </li>
     <li class="nav-item">
       <a class="nav-link text-dark" href="#">Article</a>

     </li>
   </ul>
 </div>
</nav>
</div>
<div class="d-flex flex-column text-dark col-6">
 <h1 class="align-self-end p-4" id="logo">Y<span id="logoa">A</span></h1>
 <h2 class=" d-none d-lg-block align-self-end pl-4"><span class="gold">Portfolio</span> Yoann Abran</h2>
</div>
</div>
</header>
<div id="transidownwhite" class="d-flex align-self-end container-fluid"></div>
