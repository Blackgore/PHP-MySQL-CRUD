<?php

    session_start();

    $conn = mysqli_connect(    //  Guardado en la variable "conn" el objeto de conexion con la base de dato MySQL
        'localhost',           //  Definiendo el servido en este caso  localhost
        'root',                //  definiendo la ruta de acceso
        '',                    //  añadiendo la contraseña en este caso vacia 
        'php-mysql-crud'       //  Definiendo la Base de datos
    );

    // if(isset($conn)){                             // verificando la conexion con la base de datos
    //     echo 'La base de datos esta conectada';   // mensajes de verificacion
    // }

?>