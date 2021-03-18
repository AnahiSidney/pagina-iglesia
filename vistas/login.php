
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form Design</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../css/bootstrap.min.css"><!-- estilo desl paquete de css deacargado -->

    <script src="https://kit.fontawesome.com/17961535be.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="../css/estilos_login.css">
</head>
<body> 
    <div class="container">
    <br>
    <br>
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn"> 
                        <form action="../validar.php" method="post" class="myForm text-center">
                    
                            <header>Ingresa con tu login</header>
                            
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input class="myInput" type="text" placeholder="Usuario" id="username" name="f_usuario" required> 
                            </div>

                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="myInput" type="password" id="password" placeholder="Contraseña" name="f_contraseña" required> 
                            </div>

                            <!-- <div class="form-group">
                                <label>
                                    <input id="check_1" name="check_1"  type="checkbox" required><small> I read and agree to Terms & Conditions</small></input> 
                                    <div class="invalid-feedback">You must check the box.</div>
                                </label>
                            </div> -->
                            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 150px; height: 2px;">
                            <a href="ingreso.php">
                             
                                <input type="submit" name="bg_login" class="butt" value="Ingresar a SJB" >
                                

                            </a>
                            
                            
         
                            
                        </form>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="myRightCtn">
                            <div class="box">
                                <header>Bienvenido </header>
                                <br>
                                <br>
                                
                                <br>
                            
                                <p>Así que no temas, porque yo estoy contigo; 
                                    no te desanimes, porque yo soy tu Dios. <br>
                                    Te fortaleceré y te ayudaré; Te sostendré 
                                    con mi justa mano derecha. <br>
                                    Isaias 41:10
                                </p>
                                
                                <div class="logo"  align="center">
                    
                                    <img src="../img/lo.png" alt="">
                                    
                                </div>
                                
                                <!-- <input type="button" class="butt_out" value="Learn More"/> -->
                            </div>
                                
                    </div>
                </div>
   
            </div>
        </div>
</div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    
      
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
 
</body>
</html>