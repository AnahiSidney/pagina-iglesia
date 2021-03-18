<?php

require '../../db.php';


if (isset($_POST['bg_ministerio'])){
   $titulo = $_POST['f_titulo'];
   $imagen = subirfoto();
   $descripcion = $_POST['f_descripcion'];
   $id_usuario = $_POST['f_id_usuario'];
   
   $query = "INSERT INTO ministerio(titulo,imagen,descripcion,id_usu) 
             VALUES ('$titulo','$imagen','$descripcion','$id_usuario')";
   $result = mysqli_query($conn, $query);
   if (!$result){
       die("consulta fallida a la bd");
    }

    //almacenaremos un mesaje y color con boosttrap
    $_SESSION['message'] = 'Registro guardado';
    $_SESSION['message_type'] = 'success';//color de mensaje
 header("Location: ../../vistas/form_ministerios.php");//redirecionamos una locacion o archivo
}



function subirfoto() {

    if($_FILES['f_imagen']['error']){
        switch($_FILES['f_imagen']['error']){
            case 1: //error exceso de tamaño en php.ini
                echo "el tamaño del archivo eccede lo permito por el servidor";
            break;

            case 2: //error tamaño da rchivo marcado desde el formulario
                echo "el tamaño del archivo excede 2 mb";
            break;

            case 3: //coruupcion de archibo
                echo "el envio de archivo se interrumpio";
            break;

            case 4: //no hay fichero
                echo "no se ha enviado ningun archivo";
            break;

        }
      // si no hay error
    }else{
       
        if((isset($_FILES['f_imagen']['name']) && ($_FILES['f_imagen']['error'] == UPLOAD_ERR_OK))){
            $destino_de_ruta = '../../ver_imagen/';
            move_uploaded_file($_FILES['f_imagen']['tmp_name'], $destino_de_ruta.$_FILES['f_imagen']['name']);
            return $_FILES['f_imagen']['name']; 
           
        

        }else{
            echo "el archivo no se podido copiar en el directorio de imagenes";
        }
    }
}

?>