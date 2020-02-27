<?php

    include("db.php");

    if (isset($_POST['saveTask'])){                                                        // comprobando si existe una solicitud HTTP 
        $title = $_POST['title'];                                                          // guardando una variable el titulo de la tarea
        $description = $_POST['description'];                                              // guardando una variable la descripcion de la tarea
        
        $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')"; // definiendo el query de guardado en MySQL
        $result = mysqli_query($conn, $query);                                             // guadando los datos de los campos

        if(!$result){                                                                      // verificando si se guardo correctamente
            die("Query Failed");                                                           // finalizando el programa en caso de haya un error
        }

        $_SESSION['message'] = 'Tarea Guardada Correctamente';                          // generando mensaje de session
        $_SESSION['message_type'] = 'success';
        header("location: index.php");                                                     // redirecionando al terminar de guardar
    }
?>