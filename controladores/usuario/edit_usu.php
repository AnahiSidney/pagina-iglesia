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
        $query = "SELECT * FROM usuario WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
             $row = mysqli_fetch_array($result);
             $nombre = $row['nombre'];
             $apellido = $row['apellido'];
             $coreo = $row['coreo'];
             $usuario = $row['usuario_f'];
             $contraseña = $row['contraseña'];
             
        }

    }
    // loque hace es seguir una instruccion al precionar el boton actulaizar del formulario

    if (isset($_POST['fb_actualizar'])) {
        $id = $_GET['id'];
        $nombre = $_POST['f_nombre'];
        $apellido = $_POST['f_apellido'];
        $coreo = $_POST['f_coreo'];
        $usuario = $_POST['f_usuario'];
        $contraseña = $_POST['f_contraseña'];

        $query = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', coreo = '$coreo', usuario_f = '$usuario', contraseña = '$contraseña' WHERE id = $id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'actualizacion exitosa';
        $_SESSION['message_type'] = 'warning';
        header("Location: ../../vistas/form_usuarios.php");//redirecionamos una locacion o archivo

       
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
                    <form action="edit_usu.php?id=<?php echo $_GET['id'];?>"  method="POST" enctype="multipart/form-data" class="form" role="form" autocomplete="off">
                    
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="f_nombre" value="<?php echo $nombre;?>">
                            </div>
                        </div>		
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Apellido</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="f_apellido" value="<?php echo $apellido;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Coreo</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" name="f_coreo" value="<?php echo $coreo;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Usuario</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="f_usuario" value="<?php echo $usuario;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Contraseña</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" name="f_contraseña" value="<?php echo $contraseña;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12 text-center">
                                <input type="submit" class="btn btn-success btn-block" name="fb_actualizar" value="Actualizar Usuario">
                            </div>

                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
