<?php

require '../../db.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM usuario WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("consulta fallida");
        }

        $_SESSION['message'] = 'tarea eliminada exitosa';
        $_SESSION['message_type'] = 'danger';

        header("Location: ../../vistas/form_usuarios.php");//redirecionamos una locacion o archivo
    }
?>