
<?php
$usuario=$_POST['f_usuario'];
$contraseña=$_POST['f_contraseña'];

// session_start();
$_SESSION['usuario']=$usuario;
require 'db.php';

$consulta = "SELECT * FROM usuario WHERE  usuario_f='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
   
    header("Location: vistas/ingreso.php");//redirecionamos una locacion o archivo
    

}else{
   
    header("Location: vistas/login.php");//redirecionamos una locacion o archivo


}
mysqli_free_result($resultado);
mysqli_close($conn);
?>