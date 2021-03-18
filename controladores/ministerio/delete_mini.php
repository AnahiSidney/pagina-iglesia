<?php

require '../../db.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM ministerio WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("consulta fallida");
        }

        $_SESSION['message'] = 'tarea eliminada exitosa';
        $_SESSION['message_type'] = 'danger';

        header("Location: ../../vistas/form_ministerios.php");//redirecionamos una locacion o archivo
    }
?>