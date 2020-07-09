<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Yoann Abran">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test-Portfolio</title>
  <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/3bd5358b64.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/main.css">
</head>
<body >
<?php
  include "headwhite.php";
?>



<form action="test.php" method="post">

  <h1>Titre</h1>
      <textarea name="titre" id="titre">
            &lt;p&gt;This is some sample content.&lt;/p&gt;
        </textarea>

      <h1>description</h1>
          <textarea name="description" id="description">
                &lt;p&gt;This is some sample content.&lt;/p&gt;
            </textarea>
            <p><input type="submit" value="Submit"></p>
          </form>


      <script>
       ClassicEditor
           .create( document.querySelector( '#titre' ) )
           .catch( error => {
               console.error( error );
           } );
   </script>
      <script>
          ClassicEditor
              .create( document.querySelector( '#description' ) )
              .catch( error => {
                  console.error( error );
              } );
</script>

<?php
  include "footerwhite.php";
  include "footer.php";
 ?>
