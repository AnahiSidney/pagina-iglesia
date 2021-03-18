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

</head>

<body>
	<div class="container">
	<!-- mensaje -->
	<?php if(isset($_SESSION['message'])) { ?>
                 <div class="alert alert-<?= $_SESSION['message_type']?> 
                     alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <?php session_unset();} ?>
                <!-- mensaje fin -->
	 <!-- tabla inicio -->
	 <div class="card">
		<div class="card-header">
			<h4>Listado de personas que se contactaron</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped">
					<thead class="thead-light">
						<tr>
							<th >Nombre</th>
							<th >Apellido</th>
							<th >Coreo</th>
							<th >Celular</th>
							<th >Mensaje</th>
							<th >Accion</th>
						</tr>
					</thead>
					<tbody>

                    <?php
                         $query = "SELECT * FROM contacto";
                         $result = mysqli_query($conn, $query);

                         while($row = mysqli_fetch_array($result)) { ?>

						<tr>
                            <!-- aqui van los datos de la bd lon nombre de los campos -->
							<td><?php echo $row['nombre']?></td>
							<td><?php echo $row['apellido']?></td>
							<td><?php echo $row['coreo']?></td>
							<td><?php echo $row['celular']?></td>
							<td><?php echo $row['mensaje']?></td>
                       
							<td>
								
                                <a href="../controladores/contacto/edit_con.php?id=<?php echo $row['id']?>">
                                    <i class="fas fa-edit"></i>
                                </a> |
                                <a href="../controladores/contacto/delete_con.php?id=<?php echo $row['id']?>">
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
    <br>
    <br>
    <br>
    </div>
  
<?php require_once 'sidebar_footer.php'?>