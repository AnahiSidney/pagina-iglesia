
    <?php include("header.php");?>
 
    <link rel="stylesheet" href="../css_personalizado/estilos.css">
    
    <main>
        <section class="acerca-de">
            <div class="contenedor">
                <h2 class="sobre-nosotros">Sobre Nosotros</h2>
                <h3 class="sloga">Nuestra iglesia</h3>
                <p class="parrafo">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, corporis quas perferendis ratione inventore dolor laboriosam eligendi nisi possimus aliquid, quasi maiores dolores in eum, fuga placeat dolore. Minus dolores assumenda nam voluptate at voluptas in illum nisi laboriosam tempora temporibus nesciunt distinctio, quidem quam impedit explicabo iure ullam earum quis placeat? Quam, quos dolorem laborum perferendis dicta deleniti architecto quibusdam est sequi doloribus similique earum. Eaque maiores saepe alias?</p>
                <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni explicabo repudiandae quod esse nesciunt dolorum culpa laborum animi rerum corrupti. Quia facere tempore, obcaecati temporibus dolorem quaerat tenetur vel aspernatur. Sunt, quisquam possimus cupiditate pariatur minima accusamus vitae ipsum libero, veritatis nulla dolor exercitationem saepe error! Ipsum deserunt enim eaque obcaecati et explicabo rem magnam reiciendis in quos. Voluptatibus alias minus et illum. Iste nihil quam ducimus consequatur quidem ullam.</p>
                <a href="nosotros.php">
                <button type="button" class="btn btn-outline-success">Ver mas...</button>
                </a>
            </div>     
        </section> 
        <section class="galeria">
            <div class="sesgoariba"></div>
            <div class="imagenes none">
                <img src="../img/3.jpg" alt="">
            </div>
            <div class="imagenes">
                <img src="../img/14.jpg" alt="">
            </div>
            <div class="imagenes">
                <img src="../img/24.jpg" alt="">
                <div class="encima">
                    <h2>Departamento Juvenil </h2>
                    <h2>Bautista</h2>
                    <div></div>
                </div>
            </div>
            <div class="imagenes">
                <img src="../img/16.jpg" alt="">               
            </div>
            <div class="imagenes none">
                <img src="../img/25.jpg" alt="">
            </div>
            <div class="sesgoabajo"></div>
        </section>
        <section class="acerca-de">
            <div class="contenedor">
                <h2 class="sobre-nosotros">Bienvenidos</h2>
                <h3 class="sloga"> A Nuestra iglesia</h3>
                <div class="cards">
                    <div class="card">
                        <div class="bienvenido">
                            <img src="../img/Bien.jpg" alt="">
                            <h6>Past. Arturo jose murilo</h6>
                        </div>                      
                    </div>
                </div>   
                <p class="parrafo">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, corporis quas perferendis ratione inventore dolor laboriosam eligendi nisi possimus aliquid, quasi maiores dolores in eum, fuga placeat dolore. Minus dolores assumenda nam voluptate at voluptas in illum nisi laboriosam tempora temporibus nesciunt distinctio, quidem quam impedit explicabo iure ullam earum quis placeat? Quam, quos dolorem laborum perferendis dicta deleniti architecto quibusdam est sequi doloribus similique earum. Eaque maiores saepe alias?</p>
                <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni explicabo repudiandae quod esse nesciunt dolorum culpa laborum animi rerum corrupti. Quia facere tempore, obcaecati temporibus dolorem quaerat tenetur vel aspernatur. Sunt, quisquam possimus cupiditate pariatur minima accusamus vitae ipsum libero, veritatis nulla dolor exercitationem saepe error! Ipsum deserunt enim eaque obcaecati et explicabo rem magnam reiciendis in quos. Voluptatibus alias minus et illum. Iste nihil quam ducimus consequatur quidem ullam.</p>
                <p class="parrafo">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, corporis quas perferendis ratione inventore dolor laboriosam eligendi nisi possimus aliquid, quasi maiores dolores in eum, fuga placeat dolore. Minus dolores assumenda nam voluptate at voluptas in illum nisi laboriosam tempora temporibus nesciunt distinctio, quidem quam impedit explicabo iure ullam earum quis placeat? Quam, quos dolorem laborum perferendis dicta deleniti architecto quibusdam est sequi doloribus similique earum. Eaque maiores saepe alias?</p>
            </div>     
        </section> 
       
        <!-- <section class="mienbros">
            <div class="contenedor">
                <h2 class="sobre-nosotros">Nuestros Eventos </h2>
                <h3 class="sloga">Conoce los eventos proximos...</h3>
                
                
                $query = "SELECT * FROM enventos";
                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result)) { 
                <div clas="eventos">
                    <div class="cards-e">
                        <div class="card">
                      
								$foto = '../ver_imagen/' . $row['imagen'];
								if(file_exists($foto)){
							?>
								<img src=" ">
							} 
                            <h3></h3>
                            
                            <p><</p>
                            <p>Fecha : </p>
                            <p>Hora : </p>
                        </div>
                        
                        
    
                    </div>

                </div>
                 } 
                <button type="button" class="btn btn-outline-success btn-lg btn-block">Ver mas eventos....</button>
               
            </div>

        </section> -->
        <!-- <section class="fondo">
            <div class="sesgoariba"></div>
            <div class="contenedor">
                <h2 class="titulo-pastores">Nuestros Pastores</h2>
                <h3 class="subtitulo-pastores">Conoce a algunos de nuestros pastores</h3>
                <div class="pastores">
                    <div class="pastor"><img src="../img/lo1.jpg" alt=""></div>
                    <div class="pastor"><img src="../img/lo2.jpg" alt=""></div>
                    <div class="pastor"><img src="../img/lo3.jpg" alt=""></div>
                </div>
                <h3 class="subtitulo-pastores especial">y muchos mas admistrativos</h3> 
            </div>
            <div class="sesgoabajo-unico"></div>
        </section> -->

        
    </main>

    <?php include("pie.php");?>
   
    
