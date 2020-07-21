<?php
include 'config.php';


if(isset($_POST['submit'])){


  $countfiles = count($_FILES['files']['name']);

   // Prepared statement
   $query = "INSERT INTO images (name,image) VALUES(?,?)
              INNER JOIN projetest
              ON id_projet = id_projet";

   $statement = $conn->prepare($query);

   // Loop all files
   for($i=0;$i<$countfiles;$i++){

     // File name
     $filename = $_FILES['files']['name'][$i];

     // Location
     $target_file = 'img/'.$filename;

     // file extension
     $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
     $file_extension = strtolower($file_extension);

     // Valid image extension
     $valid_extension = array("png","jpeg","jpg");

     if(in_array($file_extension, $valid_extension)){

        // Upload file
        if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$target_file)){

           // Execute query
 	  $statement->execute(array($filename,$target_file));

        }
     }

   }
   echo "File upload successfully";
 }


extract($_POST);
try{

  $sql = $conn->prepare( "INSERT INTO projet (titre,description) VALUES (:titre,:description)");
  $sql->execute(array(
              ':titre' => $titre,
              ':description' => $description,
            ));
  echo "
            <script>
                alert('Record updated successfully!');
            </script>";

        $last_id = $conn->lastInsertId();
header("Location: projetest.php?id=".$last_id );
exit;

}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


// }

// function getsrc(){
// $pattern = '$src="([^"]+)$';
// preg_match($pattern,$gallery,$matches);
// return $matches[1];
// }
//   }
