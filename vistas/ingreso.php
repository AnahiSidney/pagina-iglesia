<?php require_once "sidebar_ariba.php" ?>

<?php require '../db.php';?>   
<link rel="stylesheet" href="../css_personalizado/ingreso.css">


<!-- contenido -->

<div class="container">

<!--  -->
    
    <?php

    $query = "SELECT count(*) total FROM ministerio";
   
    $result = mysqli_query($conn, $query);

    $numero = mysqli_fetch_assoc($result)?>


    <div class="card">
        
        <div class="imgBx">
            <img src="../img/minis.jpg">
        </div>
        <div class="content">
            <h5>**Ministerios**</h5>
            <p><?php echo 'Nro. total de ministerios: '. $numero['total']?></p>
        </div>
    </div>
    

    <!--  -->
    <!--  -->

     
    <?php

    $query = "SELECT count(*) total FROM directiva";
   
    $result = mysqli_query($conn, $query);

    $numero = mysqli_fetch_assoc($result)?>


    <div class="card">
        
        <div class="imgBx">
            <img src="../img/direcs.jpg">
        </div>
        <div class="content">
            <h5>**Directivas**</h5>
            <p><?php echo 'Nro. total de directivas: ' . $numero['total']?></p>
        </div>
    </div>

    
    <!--  -->
    <!--  -->
    
    <?php

    $query = "SELECT count(*) total FROM contacto";
   
    $result = mysqli_query($conn, $query);

    $numero = mysqli_fetch_assoc($result)?>


    <div class="card">
        
        <div class="imgBx">
            <img src="../img/cont.jpg">
        </div>
        <div class="content">
            <h5>**Se contactaron**</h5>
            <p><?php echo 'Nro. total de contactos: ' . $numero['total']?></p>
        </div>
    </div>


    
    <!--  -->
</div>

<!-- fin contenido -->

<?php require_once "sidebar_footer.php" ?>

  
