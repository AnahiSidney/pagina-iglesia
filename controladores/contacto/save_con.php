<?php

require '../../db.php';


if (isset($_POST['bg_contacto'])){
   $nombre = $_POST['f_nombre'];
   $apellido = $_POST['f_apellido'];
   $coreo = $_POST['f_coreo'];
   $celular = $_POST['f_celular'];
   $mensaje = $_POST['f_mensaje'];
   
   $query = "INSERT INTO contacto(nombre,apellido,coreo,celular,mensaje) VALUES ('$nombre','$apellido','$coreo','$celular','$mensaje')";
   $result = mysqli_query($conn, $query);
   if (!$result){
       die("consulta fallida a la base de datos");
    }

    


   header("Location: ../../vistas/contacto.php");//redirecionamos una locacion o archivo
}

?>