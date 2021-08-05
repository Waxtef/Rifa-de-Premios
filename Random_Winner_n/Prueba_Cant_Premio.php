<?php include '../conexion.php'; 

$nombre_premio = $_GET['premio'];
$cantidad_premio = "SELECT * FROM premio_cant(cantidad) WHERE premio =$nombre_premio";
$sacar_premio = mysqli_query($db,$cantidad_premio);

echo $nombre_premio;
echo $sacar_premio;


 $sql = "SELECT * FROM invitados_participando_actualizada";
 $data = mysqli_query($db,$sql); 
 $count = mysqli_num_rows($data);
 $random = mt_rand(1,$count); 
 
 
 

?>