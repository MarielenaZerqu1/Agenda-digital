<?php
include "db.php";

if(isset($_POST['add'])){
    if (empty($_POST["nombre"])) {
        die("Name is required");
    }
    if (empty($_POST["email"])) {
        
        die("email is required");
    }
    if (empty($_POST["clave"])) {
        
        die("password is required");
    }
    
    if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        die("Email must be valid");
    }

    if (strlen($_POST["email"]) > 50) {
        die("Email must be valid");
    }
    
    if (strlen($_POST["nombre"]) > 25) {
        die("Name must be at least 15 characters");
    }
    if (strlen($_POST["clave"]) < 6) {
        die("Password must be at least 6 characters");
    }
    if ( ! preg_match("/[a-z]/i", $_POST["clave"])) {
        die("Password must contain at least one letter");
    }
    
    if ( ! preg_match("/[0-9]/", $_POST["clave"])) {
        die("Password must contain at least one number");
    }

    $password_hash = password_hash($_POST['clave'], PASSWORD_DEFAULT);

    $mysqli =  require __DIR__ . "/db.php";

    $sql = "INSERT INTO usuarios (nombre, email, clave_hash)
            VALUES (?,?,?)";

    $stmt = $mysqli->stmt_init();

    if( ! $stmt->prepare($sql)){
        die("SQL ERROR : " . $mysqli->error);
    }

    $stmt->bind_param("sss",
                      $_POST["nombre"],
                      $_POST["correo"],
                      $password_hash);

    $stmt->execute()
}


?>