<?php

include "config.php";


session_start();

if (isset($_POST["user"]) && isset($_POST["password"])) {
    $user = $_POST["user"];
    $password = $_POST["password"];

    $sql = "SELECT password, user FROM admin WHERE user = :user";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':user', $user);
    $stmt->execute();
    $result = $stmt->fetch();
    $isValid = password_verify($password, $result[0]);

    if ($isValid) {
        $_SESSION['isAdmin'] = true;
        $_SESSION['authUser'] = $user;
        $_SESSION['id'] = $result[1];
        header('Location: index.php');
    }
}
?>

<form class="" action="" method="post">
  <input type="text" name="user" value="">
  <input type="password" name="password" value="">
  <input type="submit" name="" value="Submit">
</form>

<?php
$username = $_POST["user"];
$password = $_POST["password"];
?>
