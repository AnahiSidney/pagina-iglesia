<?php require_once 'sidebar_ariba.php'?>

<?php require '../db.php';?>
	
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
	
	<!-- Los iconos tipo Solid de Fontawesome-->
	<link rel="stylesheet"
		href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	
	<!-- Nuestro css-->
	<link rel="stylesheet" type="text/css" href="../css_personalizado/usuario_form.css"
		th:href="@{/css_personalizado/usuario_form.css}">
	<!-- DATA TABLE -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

	<script type="text/javascript">
	    $(document).ready(function() {
	        //Asegurate que el id que le diste a la tabla sea igual al texto despues del simbolo #
	        $('#userList').DataTable();
	    } );
	</script>
	<!-- fin de script personal -->
<!-- contenido -->
<div class="container">
	<div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
	<!-- mensaje de registros exitosos -->
	<?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> 
                alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
    <?php session_unset();} ?>
        
		<ul class="nav nav-tabs justify-content-end">
			<li class="nav-item">
			<a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Listado</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Formulario</a>				   	
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
				<div class="card">
					<div class="card-header">
						<h4>Listado de usuarios</h4>


					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="userList" class="table table-bordered table-hover table-striped">
								<thead class="thead-light">
								<tr>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>Coreo</th>
									<th>Usuario</th>	
								    <th>Contrase??a</th>								
									<th>Accion</th>
								</tr>
								</thead>
								<tbody>

								<?php
                         		$query = "SELECT * FROM usuario";
                         		$result = mysqli_query($conn, $query);

                         		while($row = mysqli_fetch_array($result)) { ?>

								<tr>
                            	<!-- aqui van los datos de la bd lon nombre de los campos -->
									<td><?php echo $row['nombre']?></td>
									<td><?php echo $row['apellido']?></td>
									<td><?php echo $row['coreo']?></td>
									<td><?php echo $row['usuario_f']?></td>
                           	 		<td><?php echo $row['contrase??a']?></td>
									<td>								
                                	<a href="../controladores/usuario/edit_usu.php?id=<?php echo $row['id']?>">
                                    	<i class="fas fa-edit"></i>
                                	</a> |
                                	<a href="../controladores/usuario/delete_usu.php?id=<?php echo $row['id']?>">
                                    	<i class="fas fa-user-times"></i>
                                	</a> 
									</td>
								</tr>
                        		<?php } ?>

								
						  		</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
				<div class="card">
				
					<div class="card-header">
						<h4>Informacion de usuarios</h4>
					</div>
					<div class="card-body">
						<form action="../controladores/usuario/save_usu.php" method="post" enctype="multipart/form-data" class="form" role="form" autocomplete="off">
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Nombre</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="f_nombre">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Apellido</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="f_apellido">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Coreo</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="f_coreo">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Usuario</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="f_usuario">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Contrase??a</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="f_contrase??a">
								</div>
							</div>
							

							<div class="form-group row">
						        <div class="col-lg-12 text-center">
                                <input type="submit" class="btn btn-success btn-block" name="bg_usuario" value="Registrar usuario">
						    </div>
						
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
</div>
<!-- fin contenido -->


  
<?php require_once 'sidebar_footer.php'?>