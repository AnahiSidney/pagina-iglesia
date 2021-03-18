<?php include("header.php");?>


<?php require '../db.php';?>

<link rel="stylesheet" href="../css_personalizado/es-ministerios.css">




    <section id="team">
        <div class="container my-3 py-5 text-center">
            <div class="row mb-5">
                <div class="col">
                    <h1>NUESTROS EVENTOSS</h1>
                    <p class="mt-3">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                         Blanditiis, fuga voluptatum! Ut, mollitia iure. Accusamus.

                    </p>

                </div>

            </div>

            <?php
                $query = "SELECT * FROM enventos";
                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result)) { ?>

            <div class="row">
                <div class="col-lg-6 col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                           <?php 
								$foto = '../ver_imagen/' . $row['imagen'];
								if(file_exists($foto)){
							?>
								<img src=" <?php echo $foto;?>" class="testi">
							<?php } ?>
                            
                            <h3><?php echo $row['titulo']?></h3>
                            
                            <p><?php echo $row['descripcion']?></p>
                            <p>Fecha : <?php echo $row['fecha']?></p>
                            <p>Hora : <?php echo $row['hora_evento']?></p>
                            
                           
                        </div>

                    </div>
                </div>
            </div>
              <?php } ?>



        </div>

    </section>


    <?php include("pie.php");?>