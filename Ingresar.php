<?php

include('BD.php');

$USUARIO=$_POST['Usuario'];
$PASSWORD=$_POST['Password'];


$consulta = "SELECT* FROM usuarios where  usuario = '$USUARIO' and password = '$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:Home.php");
    
}else{
    include("Index.php");
    ?>
    <h2> Error De Autentificación</h2>
    <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);





?>