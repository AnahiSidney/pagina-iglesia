<?php include("header.php");?>


<?php require '../db.php';?>

<link rel="stylesheet" href="../css_personalizado/nueva_directiva.css">




    <section id="team">

        <div class="container my-3 py-5 text-center">
            <div class="row mb-5">
                <div class="col">
                    <h1 class="sloga">NUESTROS  PASTORES Y DIRECTIVAS</h1>
                    <p class="parrafos mt-3">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                         Blanditiis, fuga voluptatum! Ut, mollitia iure. Accusamus.

                    </p>

                </div>

            </div>
            <?php
            $query = "SELECT * FROM directiva";
                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result)) { ?>
            <div class="row">

                <div class="card-container mx-auto">
                    <div class="header">
                        <?php 
						$foto = '../ver_imagen/' . $row['imagen'];
						if(file_exists($foto)){
						?>
						<img src=" <?php echo $foto;?>">
						<?php } ?>
                        <h4><?php echo $row['nombre'].' '.$row['apellido']?></h4>
                        <h5><?php echo $row['cargo']?></h5>

                    </div>
                    <div class="descripcion">
                    <p><?php echo $row['descripcion']?></p>
                    </div>
       
                </div>
             </div>
             <br> 
             <br>
             <?php } ?>

             <br> 
             <br>




        </div>

    </section>


    <?php include("pie.php");?>