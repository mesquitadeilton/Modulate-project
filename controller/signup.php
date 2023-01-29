<?php
    include '../model/people.php';

    session_start();

    foreach($_POST as $key => $value) {
        if(empty($value)) {
            $_SESSION['errorEmptySignUp'] = true;
            header("location: ../view/signup.php");
            exit;
        }
    }

    $user = new people($_POST['name'], $_POST['email'], $_POST['password']);
    
    $connection = mysqli_connect("localhost", "root", "");
    if(!$connection) throw new Exception("falha na conexão com o banco de dados");

    $db = mysqli_select_db($connection, "projeto_modulate");
    if(!$db) throw new Exception("banco de dados não encotrado");

    $query = "CREATE TABLE IF NOT EXISTS `projeto_modulate`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
    mysqli_query($connection, $query);

    $query = "SELECT email FROM users WHERE email='".$user->get_email()."'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    if($row) {
        mysqli_close($connection);

        $_SESSION['errorSignUp'] = true;
        header("location: ../view/signup.php");
        exit;
    }

    $query = "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '".$user->get_name()."', '".$user->get_email()."', '".$user->get_password()."')";
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);

    if(!$result) throw new Exception("falha na inserção no banco de dados");

    $_SESSION['signUpSuccessful'] = true;
    header("location: ../index.php");
?>