<?php include '../conexion.php'; 
 $sql = "SELECT * FROM invitados_participando";
 $data = mysqli_query($db,$sql); 
 $count = mysqli_num_rows($data);
 $rand = mt_rand(1,$count); 
 
 $price = 'Viaje a Colombia';
 $sql2 ="SELECT * FROM invitados_participando WHERE id=$rand";
 $data2=mysqli_query($db,$sql2); 

 $sql4 = "INSERT INTO conteo(Codigo_Empleado) SELECT Codigo_Empleado FROM invitados_participando_actualizada WHERE id = $rand";
 if($db->query($sql4) === true){
    //if($db->query($sql2) === true){
    //echo'<p class="border-bottom border-gray pb-3 mb-3 text-success">Ganador elejido</p>';
 }else{
     //echo'<p class="border-bottom border-gray pb-3 mb-3 text-danger">error al elejir</p>';
     die("Error al Insertar datos". $db->error);
 }
 $sql5 = "SELECT * FROM conteo";
 $contando = mysqli_query($db,$sql5); 
 $rango = mysqli_num_rows($contando);

 $sql4 = "INSERT INTO Premios(premio) VALUES('$price')";
 if($db->query($sql4) === true){
    //if($db->query($sql2) === true){
    //echo'<p class="border-bottom border-gray pb-3 mb-3 text-success">Ganador elejido</p>';
 }else{
     //echo'<p class="border-bottom border-gray pb-3 mb-3 text-danger">error al elejir</p>';
     die("Error al Insertar datos". $db->error);
 }

 $asignar ="SELECT * FROM Premios WHERE id=$rango";
 $premio=mysqli_query($db,$asignar); 

 while($pe = mysqli_fetch_array($premio)){
    $price = $pe['premio'];}

 $sql3 = "INSERT INTO ganadores(Codigo_Empleado,Codigo_Alternativo,Nombre,Cedula,Departamento,Facilidad,Ticket,Participacion,Nombre_Util,Apellido_Util,Premio) SELECT Codigo_Empleado,Codigo_Alternativo,Nombre,Cedula,Departamento,Facilidad,Ticket,Participacion,Nombre_Util,Apellido_Util,'$price' FROM invitados_participando_actualizada WHERE id = $rand";
 if($db->query($sql3) === true){
    //if($db->query($sql2) === true){
    //echo'<p class="border-bottom border-gray pb-3 mb-3 text-success">Ganador elejido</p>';
 }else{
     //echo'<p class="border-bottom border-gray pb-3 mb-3 text-danger">error al elejir</p>';
     die("Error al Insertar datos". $db->error);
 }

                
  while($p = mysqli_fetch_array($data2)){
    $winner_name = $p['Nombre_Util'];
    $winner_last = $p['Apellido_Util'];
    $winner_depar = $p['Departamento'];
    $winner_ticket = $p['Ticket'];
  }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="..\Style\bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="marco">
    <div class="row">
        <div class="col col-md-6">
        <div class="js-odoo d-inline-block"></div>
       
        </div>
        <div class="col col-md-6">
        
        <div class="js-odoo2 d-inline-block"></div>
        </div>
        <div class="col col-md-12">
        <div class="js-odoo3">Quien se Ganara Viaje a Colombia?</div>
        </div>  
        </div>
        <div class="col col-md-12">
        <div class="botones">
    <button class="boton" id="demo" onclick="myFunction();">Ganador</button>
    <p id="random"></p>
</div>
            
            </div>
    </div>
    </div>
</body>
<script src="..\js\odoo.js"></script>
    <!--<script src="main.js"></script>-->
    <script type="text/javascript">
    var participantes = ["Juan","Felipe","Jose","Roberto","Manuel","Lauraa","Maria","Eddy","Moises","Leila","Enrique"];
    var ganadorname= ["<?php echo($winner_name);?>"];
    var ganadorlast= ["<?php echo($winner_last);?>"];
    var ganadordepar= ["<?php echo($winner_depar);?>"];
    var ganadorticket= ["<?php echo($winner_ticket);?>"];
var apellidos = ["Ortiz","Constanzo","Manuel","Corte","Diaz","Lora","Callas","Duran","Duran","Parra","Ortiz","D.Cruz"];

document.getElementById("demo").onclick = function() {myFunction()};

function myFunction() {
    var nun = Math.floor(Math.random() * 12);
    //document.getElementById("random").innerHTML = nun;
    odoo.default({ el:'.js-odoo', from: '@#$%##$@$%^&#@*&$%@#^&%#$@$$^&&#$#$^%$#', to: (ganadorname), animationDelay: 1000 ,animationDuration:3000});
    odoo.default({ el:'.js-odoo2', from: '@#$%##$@$%^&#@*&$%@#^&%#$@$$^&&#$#$^%$#', to: (ganadorlast), animationDelay: 1000 ,animationDuration:3000});
    odoo.default({ el:'.js-odoo3', from: '@#$%##$@$%^&#@*&$%@#^&%#$@$$^&&#$#$^%$#', to: (ganadorticket), animationDelay: 1000 ,animationDuration:3000});

}
    
    </script>
</html>