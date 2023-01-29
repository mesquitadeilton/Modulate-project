<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "projeto_modulate";
    
    $connection = mysqli_connect($hostname, $username, $password);
    if(!$connection) throw new Exception("falha na conexão com o banco de dados");

    $mySql = mysqli_select_db($connection, $database);
    if(!$db) throw new Exception("banco de dados não encotrado");

    $query = "CREATE TABLE IF NOT EXISTS `projeto_modulate`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`))";
    mysqli_query($connection, $query);
?>