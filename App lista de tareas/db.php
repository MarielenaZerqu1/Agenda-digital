<?php

    $host = "localhost";
    $dbname = "Agenda";
    $username = "root";
    $password = "";

    $mysqli = mysqli_connect($host, $username, $password, $dbname);

    if($mysqli->connect_errno){
        die("Conection error: " . $mysqli->connect_error);
    }
return $mysqli;

?>