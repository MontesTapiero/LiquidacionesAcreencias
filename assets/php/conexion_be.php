<?php

    $conexion = new mysqli("localhost", "root", "", "login_register_db");
    // if ($conexion->connect_error) {
    //     die("Conexión fallida: " . $conexion->connect_error);
    //     }
    //     else{
    //         echo "Conexión exitosa";
    //     }
        $sql = "SELECT * FROM usuarios";
        $result = $conexion->query($sql);


?>