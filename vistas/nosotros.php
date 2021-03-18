<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/17961535be.js" crossorigin="anonymous"></script>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet"> 
    <!-- botstrap ira su estilo -->
    <link rel="stylesheet" href="../css/bootstrap.min.css"><!-- estilo desl paquete de css deacargado -->
    <!-- scroll revealjs -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- customs css nustro s css propios -->
    <link rel="stylesheet" href="../css/nosotros.css">
    <!-- <link rel="stylesheet" href="estilos.css"> -->
    
<body>
    <!-- navegacion -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
      
        <div class="container">
            <a class="navbar-brand" href="#">Departamento Juvenil Bautista</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#header">¿Quienes Somos?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#vi-mi">Mision Y Vision</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#historias">Historia</a>
            </li>
           
          </ul>
        </div>
        </div>
        
    </nav>
    <!-- header -->
    <header id="header">
      <!-- carrusel -->
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="font-family: 'Times New Roman', Times, serif;" >
          <div class="carousel-item active">
            <img src="../img/HISTORIA.jpg" class="d-block w-100" alt="..." style="height: 400px;">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color: rgb(19, 10, 73);">Inicios de la construcion</h5>
              <p style="color: rgb(19, 10, 73);">se realizo la contrucion dela socieda 19989 por el pastor miguel  fernandes y la xon villa adela</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/SOMOS.jpg" class="d-block w-100" alt="..." style="height: 400px;">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color: rgb(19, 10, 73);">Inauguracion de la sociedad</h5>
              <p style="color: rgb(19, 10, 73);">Lorem ipsum dolor sit amet, consectetur adipiscing elit dgdfgf.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/SOMOS.jpg" class="d-block w-100" alt="..." style="height: 400px;">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color: rgb(19, 10, 73);">Los pastores de inicio</h5>
              <p style="color: rgb(19, 10, 73);">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>




      <!--  -->
        <div class="container mt-5">
            <div class="row">
              <div class="col-md-6">
                    <div class="header-content-left">
                        <img src="../img/MISION.jpg" style="width: 100%;">

                    </div>

              </div>
              
                <div class="col-md-6">
                  <div class="header-content-right">
                        <h1>¿QUIENES SOMOS?</h1>
                        <P class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Laboriosam hic sed blanditiis reprehenderit. Eligendi
                           accusamus vel nobis dolore assumenda! Rem commodi eaque
                            ipsa modi perspiciatis pariatur alias quidem, odit porro.</P>

                            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                              Laboriosam hic sed blanditiis reprehenderit. Eligendi
                               Laboriosam hic sed blanditiis reprehenderit. Eligendi.</P>

                  </div>
                  
    </header>
             
         

                <!-- la linea del centro en galeria -->
              <section class="galeria">

                <div class="sesgoariba"></div>
                <div class="imagenes nones">
                    <img src="../img/3.jpg" alt="">
                </div>
                <div class="imagenes">
                    <img src="../img/14.jpg" alt="">
                </div>
                <div class="imagenes">
                    <img src="../img/24.jpg" alt="">
                    <div class="encima">
                        <h2>Sociedad Juvenil </h2>
                        <h2>Bautista</h2>
                        <div></div>
                    </div>
                </div>
                <div class="imagenes">
                    <img src="img/16.jpg" alt="">               
                </div>
                <div class="imagenes nones">
                    <img src="../img/25.jpg" alt="">
                </div>
                <div class="sesgoabajo"></div>
            </section>
              <!-- fin galeroa -->
            
              <!-- tarjetas de caraterizacion -->
              <section id="vi-mi">
                <div class="col-md-12 mt-5" style="padding-left: 5%;">
                  <div class="card-deck">
                    <div class="card">
                      <img src="../img/vision1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Nuestra Mision</h5>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit
                          . Non ratione assumenda, perferendis exercitationem 
                          ducimus consectetur!
                        </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">romanos 8:4</small>
                      </div>
                    </div>
    
                    <div class="card">
                      <img src="../img/mision1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Nuestra Vision</h5>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit
                          . Non ratione assumenda, perferendis exercitationem 
                          ducimus consectetur!
                        </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">romanos 8:4</small>
                      </div>
                    </div>
    
                   <div class="card">
                      <img src="../img/car.jpg" class="card-img-top" alt="..." style="height: 230px;">
                      <div class="card-body">
                        <h5 class="card-title">Que nos caracteriza</h5>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit
                          . Non ratione assumenda, perferendis exercitationem 
                          ducimus consectetur!
                        </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">romanos 8:4</small>
                      </div>
                    </div>
                  </div>
                  <!-- fin -->
                </div>

              </section>
             

              <!--historia  -->
              <section id="historias">
                <section class="his1">
                  <div class="container">
                  
                    <p class="mb-2">
                      <h2 class="titulo">Nuestra Historia</h3>
                      <h5 class="sub">Departamento Juvenil Bautista</h4>
                        <p class="parrafo">
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque voluptatem incidunt nostrum
                           blanditiis perferendis tenetur cupiditate obcaecati, sunt molestias 
                          veritatis, hic officiis nobis commodi? Necessitatibus quia reprehenderit totam magnam corporis!</p>

                          <p class="parrafo">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque voluptatem incidunt nostrum
                             blanditiis perferendis tenetur cupiditate obcaecati, sunt molestias 
                            veritatis, hic officiis nobis commodi? Necessitatibus quia reprehenderit totam magnam corporis!</p>
  
                    </p>
                </div>

                </section>
                
                <!-- info gistoria -->
              <section id="info-historia" style="background: azure;">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="info-left">
                        <img src="../img/HISTORIA.jpg" style="width: 100%;">
                      </div>

                    </div>
                    <div class="col-md-6 my-auto">
                      <div class="info-right" style="text-align: justify;">
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut nihil libero
                           exercitationem eum fuga fugiat aperiam tempore porro accusamus ut 
                          placeat dolorem autem maiores ducimus, non debitis eius optio magni.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut nihil libero
                           exercitationem eum fuga fugiat aperiam tempore porro accusamus ut 
                          placeat dolorem autem maiores ducimus, non debitis eius optio magni.
                        </p>

                      </div>
                    </div>
                  </div>

                </div>

              </section>
              <!-- info -->
              <section id="info-two">
                <div class="container especial">
                  <div class="row my-5" style="text-align: justify;">
                    <div class="col-md-6">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, molestias minima quia, aliquid repellat labore ut eum asperiores aut 
                        officiis ducimus! Molestias est repellendus id distinctio ipsa temporibus sint eligendi!
                      </p>


                    </div>
                    <div class="col-md-6">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, molestias minima quia, aliquid repellat labore ut eum asperiores aut 
                        officiis ducimus! Molestias est repellendus id distinctio ipsa temporibus sint eligendi!
                      </p>
                      
                    </div>
                  </div>
                </div>

              </section>



            </section> -->

               <!-- finhistoria -->

              
              

            </div>

              
               


            </div>

        </div>

    <!-- fin -->
    <footer class="page-footer">
      <div class="bg-success">
          <div class="container">
              <div class="row py-4 d-flex align-center">
                  <div class="col-md-12 text-center">
                      <a href="#"><i class="fab fa-facebook text-white mr-4"></i></a>
                      <a href="#"><i class="fab fa-instagram text-white mr-4"></i></a>
                      <a href="#"><i class="fab fa-twitter-square text-white mr-4"></i></a>
                      <a href="#"><i class="fab fa-youtube-square text-white mr-4"></i></a>
                  </div>
  
              </div>
  
          </div>
      </div>
  
      <div class="container text-center text-md-left mt-5 text-white">
          <div class="row">
              
  
              <div class="col-md-3 mx-auto">
                  <h6 class="text-uppercase font-weight-bold">Cita Biblica</h6>
                  <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px;">
                  <blockquote class="blockquote">
                      <p class="mt-2">Ni la altura ni la profundidad, ni ninguna otra cosa en toda la creación, podrán separarnos del amor de
                          Dios que está en Cristo Jesús nuestro Señor.</p>
                      <footer class="blockquote-footer">Romanos  <cite title="Source Title">8:39</cite></footer>
                  </blockquote>
              </div>
              <div class="col-md-2 mx-auto mb-4">
                  <h6 class="text-uppercase font-weight-bold">Ministerios</h6>
                  <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; height: 2px;">
  
                  <ul class="list-unstyled ">
                      <li class="my-2"><a href="#">Niños</a></li>
                      <li class="my-2"><a href="#">Adultos</a></li>
                      <li class="my-2"><a href="#">Alabanzas</a></li>
  
                  </ul>
                  <h6 class="text-uppercase font-weight-bold">Ubicacion</h6>
                  <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 90px; height: 2px;">
  
                  <ul class="list-unstyled ">
                    <a href="https://www.google.com/maps/place/Convenci%C3%B3n+Bautista+Boliviana/@-17.7614258,-63.1855137,17.28z/data=!4m8!1m2!2m1!1sAv.+Cesar+Cronembold+N%C2%BA+109+Convenci%C3%B3n+Bautista+Boliviana+Santa+Cruz+de+la+Sierra,+Bolivia!3m4!1s0x93f1e7e89a3f2363:0xbd3d4f15f25d71ad!8m2!3d-17.7635122!4d-63.1837665">
                      <button type="button" class="btn btn-outline-warning">Ver por google maps</button>
                  </a>
                    
  
                  </ul>
              </div>
              <div class="col-md-3 mx-auto mb-4">
                  <h6 class="text-uppercase font-weight-bold">Contacto</h6>
                  <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 90px; height: 2px;">
  
                  <ul class="list-unstyled ">
                      <li class="my-2"><i class="fas fa-home mr-2"></i> Av. Buenos aires, Calle 14</li>
                      <li class="my-2"><i class="fas fa-envelope mr-2"></i>juvenilbau@gmail.com</li>
                      <li class="my-2"><i class="fas fa-phone mr-2"></i>+591 7685624</li>
  
                  </ul>
              </div>
          </div>
      </div>
  
     
    
  </footer>

        
   

    <!-- botstrap scrip para que se adpate -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- script reveal -->
    <script>
      window.sr = ScrollReveal()
      sr.reveal('.navbar', {
        duration: 2000,
        origin: 'bottom'
      });
      sr.reveal('.header-content-left', {
        duration: 2000,
        origin: 'top',
        distance: '300px'
      });
      sr.reveal('.header-content-right', {
        duration: 2000,
        origin: 'right',
        distance: '300px'
      });
      sr.reveal('.galeria', {
        duration: 2000,
        origin: 'top',
        distance: '300px'
      });
      sr.reveal('.card', {
        duration: 2000,
        origin: 'right',
        distance: '300px'
      });
      sr.reveal('.his1', {
        duration: 2000,
        origin: 'top',
        distance: '300px'
      });
      sr.reveal('.info-left', {
        duration: 2000,
        origin: 'top',
        distance: '300px'
      });
      sr.reveal('.info-right', {
        duration: 2000,
        origin: 'top',
        distance: '300px'
      });
     
      
    </script>
    
    <?php include("pie.php");?>
</body>
</html>