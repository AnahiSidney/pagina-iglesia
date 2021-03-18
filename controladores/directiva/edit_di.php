<!--JQUERY-->
<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
	<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script 
		src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script 
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    
    <!-- Nuestro css-->
	<link rel="stylesheet" type="text/css" href="../css_personalizado/usuario_form.css"
		th:href="@{/css_personalizado/usuario_form.css}">


<?php

require '../../db.php';

// lo que hace es trae la tupla de un reglon de latabla de la bd
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM directiva WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
             $row = mysqli_fetch_array($result);
             $nombre = $row['nombre'];
             $apellido = $row['apellido'];
             $imagen = $row['imagen'];
             $descripcion = $row['descripcion'];
             $cargo = $row['cargo'];
             $gestion = $row['gestion'];
             $celular = $row['celular'];
             $id_usuario = $row['id_usu'];
             
        }

    }
    // loque hace es seguir una instruccion al precionar el boton actulaizar del formulario

    if (isset($_POST['fb_actualizar'])) {
        $id = $_GET['id'];
        $nombre = $_POST['f_nombre'];
        $apellido = $_POST['f_apellido'];
        $imagen = subirfoto();
        $descripcion = $_POST['f_descripcion'];
        $cargo = $_POST['f_cargo'];
        $gestion = $_POST['f_gestion'];
        $celular = $_POST['f_celular'];
        $id_usuario = $_POST['f_id_usuario'];

        $query = "UPDATE directiva set nombre = '$nombre', apellido = '$apellido', imagen = '$imagen', 
                    descripcion = '$descripcion', cargo = '$cargo', gestion = '$gestion', celular = '$celular', id_usu = '$id_usuario' WHERE id = $id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'actualizacion exitosa';
        $_SESSION['message_type'] = 'warning';
        header("Location: ../../vistas/form_directivas.php");//redirecionamos una locacion o archivo

       
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
<!-- este es el otro formulario que se lleva los datos del la tabla actualizar se hara -->

<div class="container p-4">
    <div class="row">
        <div class="col-md-6 mx-auto">
<!--  -->
            <div class="card">
				
                <div class="card-header">
                    <h4>Informacion de usuario</h4>
                </div>
                <div class="card-body">
                    <form action="edit_di.php?id=<?php echo $_GET['id'];?>"  method="POST" enctype="multipart/form-data" class="form" role="form" autocomplete="off">
                    
                    <div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label"> Nombre </label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="f_nombre" value="<?php echo $nombre;?>">
								</div>
                            </div>
                            <div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label"> Apellido </label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="f_apellido" value="<?php echo $apellido;?>">
								</div>
                            </div>
                            
							<div class="form-group row">
								<label for="exampleFormControlFile1" class="col-lg-3 col-form-label form-control-label">Imagen</label>
								<div class="col-lg-9">
                                    <input type="file" class="form-control-file" name="f_imagen" id="imagen" value="<?php echo $imagen;?>">
								</div>
                            </div>
                            <form>

							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Descripcion</label>
								<div class="col-lg-9">
                                <textarea name="f_descripcion" id="" cols="30" rows="6" placeholder="Descripcion..." class="form-control"><?php echo $descripcion;?></textarea>
								</div>
                            </div>
                            <div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label"> Cargo </label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="f_cargo" value="<?php echo $cargo;?>">
								</div>
                            </div>
                            <div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label"> Gestion </label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="f_gestion" value="<?php echo $gestion;?>">
								</div>
                            </div>
                            <div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label"> Celular </label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="f_celular" value="<?php echo $celular;?>">
								</div>
                            </div>

                            <div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label"> Usuario </label>
								<div class="col-lg-9">
                                    <?php
                                    $query = "SELECT * FROM usuario";
                                    $result = mysqli_query($conn, $query);?>
                                    <select  class="form-control" name="f_id_usuario"  value="<?php echo $id_usuario;?>">
                                    <?php
                                    while($row = mysqli_fetch_array($result)){?>
                                    <option value="<?php echo $row['id']?>"><?php echo $row['usuario_f']?> </option>
                                    <?php } ?>
                                    </select>
								</div>
                            </div>
                        <div class="form-group row">
                            <div class="col-lg-12 text-center">
                                <input type="submit" class="btn btn-success btn-block" name="fb_actualizar" value="Actualizar directiva">
                            </div>

                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>