<?php

require '../../db.php';


if (isset($_POST['bg_usuario'])){
   $nombre = $_POST['f_nombre'];
   $apellido = $_POST['f_apellido'];
   $coreo = $_POST['f_coreo'];
   $usuario = $_POST['f_usuario'];
   $contraseña = $_POST['f_contraseña'];
   
   $query = "INSERT INTO usuario(nombre,apellido,coreo,usuario_f,contraseña) VALUES ('$nombre','$apellido','$coreo','$usuario','$contraseña')";
   $result = mysqli_query($conn, $query);
   if (!$result){
       die("consulta fallida a la bd");
   }

    //almacenaremos un mesaje y color con boosttrap
    $_SESSION['message'] = 'Registro guardado';
    $_SESSION['message_type'] = 'success';//color de mensaje


   header("Location: ../../vistas/form_usuarios.php");//redirecionamos una locacion o archivo
}

?>