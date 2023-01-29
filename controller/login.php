<?php
    session_start();

    foreach($_POST as $key => $value) {
        if(empty($value)) {
            $_SESSION['errorLogin'] = true;
            header("location: ../index.php");
            exit;
        }
    }
    
    $connection = mysqli_connect("localhost", "root", "");
    if(!$connection) throw new Exception("erro na conexão com o banco de dados");

    $db = mysqli_select_db($connection, "projeto_modulate");
    if(!$db) throw new Exception("banco de dados não encotrado");

    $query = "CREATE TABLE IF NOT EXISTS `projeto_modulate`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
    mysqli_query($connection, $query);

    $query = "SELECT * FROM users WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    mysqli_close($connection);

    if(!$row) {
        $_SESSION['errorLogin'] = true;
        header("location: ../index.php");
        exit;
    }

    $_SESSION['connected']['name'] = $row['name'];
    $_SESSION['connected']['email'] = $row['email'];

    header("location: ../view/home.php");
?>