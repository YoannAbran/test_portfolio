<!-- <!DOCTYPE html>
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
<body > -->
<?php
include "header.php";
  include "headwhite.php";
?>

<form action ="testcreate.php"  method="post">

  <h1>Titre</h1>
      <textarea name="titre" id="titre">
            &lt;p&gt;This is some sample content.&lt;/p&gt;
        </textarea>

      <h1>description</h1>
          <textarea name="description" id="description">
                &lt;p&gt;This is some sample content.&lt;/p&gt;
            </textarea>

      <h1>gallery</h1>
          <textarea name="gallery" id="gallery">

            </textarea>
<input type="submit" value="Submit">
          </form>


      <script>
       CKEDITOR.replace( 'titre' );
   </script>
      <script>
        CKEDITOR.replace( 'description' );
</script>
      <script>
        CKEDITOR.replace( 'gallery' );
</script>

<?php
  include "footerwhite.php";
  include "footer.php";
 ?>
