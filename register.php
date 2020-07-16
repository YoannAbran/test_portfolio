<?php
    require_once('config.php');

    $password = password_hash("2527", PASSWORD_DEFAULT);
    $user = "yoann";

    $sql = "INSERT INTO admin (user, password) VALUES (:user, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':user', $user);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    echo $user . "admin user had been created";
?>
