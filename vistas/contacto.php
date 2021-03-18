
    
    <?php include("header.php");?>



    <link rel="stylesheet" href="../css_personalizado/contacto.css">

    <br><br>
    <div class="con-form">
        <div class="container">
            <h2 class="heading">Contactenos</h2>
            <div class="textos">
                <h3 style="text-align: center;">Sociedad Juvel Bautista</h3>
                <p style="text-align: center;">Para cualquier duda Contactanos ala Sociedad Juvenil Bautis</p>

            </div>
            <br>

            <div class="row">
                <div class="col-md-6">

               

                    <form action="../controladores/contacto/save_con.php" method="POST" enctype="multipart/form-data" class="form" role="form" autocomplete="off">
                        <input type="text" name="f_nombre" required="" placeholder="ingrese su nombre" class="form-control">
                    
                        <input type="text" name="f_apellido" required="" placeholder="ingrese su apellido" class="form-control">

                        <input type="email" name="f_coreo" required="" placeholder="ingrese su correo" class="form-control">

                        <input type="text" name="f_celular" required="" placeholder="ingrese su celular" class="form-control">

                        <textarea name="f_mensaje" id="" cols="30" rows="6" placeholder="Escriba su mensaje..." class="form-control"></textarea>
                        <br>
                        <center>
                        <div class="col-lg-12 text-center">
                            <input type="submit" class="btn btn-success btn-block" name="bg_contacto" value="Registrar Contacto">
						</div>
                        </center>
                        <br><br><br>
                        
                    </form>
                     
                    


                </div>
                <div class="col-md-1">

                </div>

                <div class="caja col-md-5">
                    <br>
                    <p class="icn"><i class="fa fa-map-marker"></i>&nbsp;&nbsp; 23 Main, calle nueva ramada</p>
                    <p class="icn"><i class="fa fa-envelope"></i>&nbsp;&nbsp; ejemplo@gmaol.com</p>

                    <hr>

                    <div class="sociales">

                        <p class="icn"><a href=""> <i class="fa fa-instagram"></i></a>&nbsp;&nbsp; SJ_Bautista</p>
                        <p class="icn"> <a href="https://www.facebook.com/dejubacbb"> <i class="fa fa-facebook-f"></i></a>&nbsp;&nbsp; Juvenil Bautista</p>
                        <p class="icn"> <a href=""> <i class="fa fa-youtube"></i></a>&nbsp;&nbsp; SJB al servicio</p>


                       
                    </div>
                </div>
            </div>
            
    
        </div>

    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3799.6257478248185!2d-63.18539363018894!3d-17.76226483786872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e7e89a3f2363%3A0xbd3d4f15f25d71ad!2sConvenci%C3%B3n%20Bautista%20Boliviana!5e0!3m2!1ses!2sbo!4v1606769200359!5m2!1ses!2sbo" 
    width="1500" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

   







    <?php include("pie.php");?>