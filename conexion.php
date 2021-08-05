<?php 
require('Config.php');
$db =@mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
   $route = 'C:\xampp\htdocs\CR5\Loteria';

   if(!$db){
    die("imposible conectarse: ".mysqli_connect_error($db));
}
if (@mysqli_connect_errno()) {
    die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}
else{
    //echo "Conexion exitosa";
}
?>