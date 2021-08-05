<?php include '../conexion.php'; 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="animation.css" />
    <link rel="stylesheet" href="..\Style\bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="..\js\odoo.js"></script>
</head>
<body>
<div class="marco">
    <div class="row">
    <form action="" method="POST" id="contenedor_premio">
        <div class="col col-md-12">
        <div class="input-group input-group-lg" id="text_premio">
              <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="premio" placeholder="Ingrese Premio" />
              <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="num_premio" placeholder="0" />
              </div>
      
        </div>
        

        <!--<div class="col col-md-12">
        <div class="input-group input-group-lg">
            <select class="custom-select d-block " id="n" required>
              <option value="">0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
         </div>
         </div>-->
            
        <div class="col col-md-12">
            <div class="botones">
                <div class="row">
                    <div class="col col-4">
                    <button type="submit" class="boton" id="boton_premio" onclick="location.href='#ganadores'"  //href="javascript:document.getElementById('contenedor_premio').style.display='none';void0"/*><a>Rifar Premio</a></button>

                    </div>
                    <div class="col col-4">
                    <button type="button" class="boton" id="nuevo" onclick="location.href='../Seleccion_Premio_n'">Nuevo</button>

                    </div>
                    <div class="col col-4">
                    <button type="button" class="boton" id="ganadores_premio" onclick="location.href='../Ganadores'">Ganadores</button>

                    </div>
                </div>
                <p id="random"></p>
            </div>
            
      </div>
    </form>
</div>
</div>
<div class="marco_ganadores">
    <div class="row text-center">
        <div class="col col-3"></div>
        <div class="col col-3">
            <h3 class="py-3 text-center">Ganadores</h3>
        </div>
        <div class="col col-3">
        <button type="button" class="boton" id="nuevo" onclick="location.href='../Seleccion_Premio_n'">Next</button>
        </div>
        <div class=col col-3></div>
        <div class="col col-12">
            <div class="row row-cols-3">
                <div class="col"></div>

    <?php    if(isset($_POST['premio'])){
                $num_premio = $_POST['num_premio'];
                //echo $num_premio;

            
            //for ($i=0; $i < $num_premio ; $i++) {     
            
                        $premio = $_POST['premio'];
                        $num_premio = $_POST['num_premio'];
                        $sql = "INSERT INTO Premio_Cant(premio,cantidad) VALUES('$premio','$num_premio')";
                        if(($premio == "" ) && ($num_premio == "")){
                            echo'<p class="border-bottom border-gray pb-3 mb-3 text-danger">Escriba un premio</p>';

                        }else{
                            //mysqli_query($db,$sql);
                            if($db->query($sql) === true){
                                $random_diferente = array($num_premio-1);

                                echo'<ul class="list-group list-group-flush">';
                                //bucle de ganadores
                                for ($i=0; $i <$num_premio ; $i++) { 
                                
                                //seleccion de tabla 
                                $sql_invitados = "SELECT * FROM participantes_cvs";
                                $data = mysqli_query($db,$sql_invitados); 
                                $count = mysqli_num_rows($data);

                                $random = mt_rand(1,$count);
                                $random_diferente[$i] = $random; 
                                $y=$i;
                                while ($y > 0) { 
                                    if($random != $random_diferente[$i])
                                    {
                                        $y--;
                                      
                                    }else{
                                        $random = mt_rand(1,$count); 

                                    }
                                }
                                
 
                                //Seleccion de ganador
                                $sql2 ="SELECT * FROM participantes_cvs WHERE id=$random";
                                $data2=mysqli_query($db,$sql2); 

                                //Entrada de ganador con su premio
                                $sql3 = "INSERT INTO ganadores_cvs(Codigo_Empleado,Nombre_primero,Nombre_segundo,Apellido_primero,Cedula,Departamento,Facilidad,Ticket,Premio) SELECT Codigo_Empleado,Nombre_primero,Nombre_segundo,Apellido_primero,Cedula,Departamento,Facilidad,Ticket,'$premio' FROM participantes_cvs WHERE id = $random";
                                if($db->query($sql3) === true){
                                //if($db->query($sql2) === true){
                                //echo'<p class="border-bottom border-gray pb-3 mb-3 text-success">Ganador elejido</p>';
                                }else{
                                //echo'<p class="border-bottom border-gray pb-3 mb-3 text-danger">error al elejir</p>';
                                 die("Error al Insertar datos". $db->error);
                                }
                                
                                /*Borrar ganador de la lista de participantes*/


                                $borrar_ganador = "DELETE FROM participantes_cvs WHERE id = $random";
                                mysqli_query($db,$borrar_ganador); 

                                mysqli_query($db,'CREATE TABLE mytable_tmp SELECT Codigo_Empleado,Nombre_primero,Nombre_segundo,Apellido_primero,Cedula,Departamento,Facilidad,Ticket FROM participantes_cvs;'); 
                                mysqli_query($db,'TRUNCATE TABLE participantes_cvs;');
                                mysqli_query($db,'ALTER TABLE participantes_cvs AUTO_INCREMENT = 1;');
                                mysqli_query($db,'INSERT INTO participantes_cvs(Codigo_Empleado,Nombre_primero,Nombre_segundo,Apellido_primero,Cedula,Departamento,Facilidad,Ticket) SELECT Codigo_Empleado,Nombre_primero,Nombre_segundo,Apellido_primero,Cedula,Departamento,Facilidad,Ticket FROM mytable_tmp ORDER BY Nombre_primero;');
                                mysqli_query($db,'DROP TABLE mytable_tmp;');
                                
                                /*$borrar_ganador = "DELETE FROM  invitados_participando_actualizada WHERE id = $rand";
                                mysqli_query($db,$borrar_ganador); 
                                
                                //Indenxar tablas de nuevo
                                mysqli_query($db,'CREATE TABLE mytable_tmp SELECT Codigo_Empleado,Codigo_Alternativo,Nombre,Cedula,Departamento,Facilidad,Ticket,Participacion,Nombre_Util,Apellido_Util FROM invitados_participando_actualizada;'); 
                                mysqli_query($db,'TRUNCATE TABLE invitados_participando_actualizada;');
                                mysqli_query($db,'ALTER TABLE invitados_participando_actualizada AUTO_INCREMENT = 1;');
                                mysqli_query($db,'INSERT INTO invitados_participando_actualizada(Codigo_Empleado,Codigo_Alternativo,Nombre,Cedula,Departamento,Facilidad,Ticket,Participacion,Nombre_Util,Apellido_Util) SELECT Codigo_Empleado,Codigo_Alternativo,Nombre,Cedula,Departamento,Facilidad,Ticket,Participacion,Nombre_Util,Apellido_Util FROM mytable_tmp ORDER BY Nombre;');
                                mysqli_query($db,'DROP TABLE mytable_tmp;');*/
                               
                                
                                //Sacar datos del ganador             
                                while($p = mysqli_fetch_array($data2)){
                                   $winner_name = $p['Nombre_primero'];
                                   $winner_name_second = $p['Nombre_segundo'];
                                   $winner_last = $p['Apellido_primero'];
                                   $winner_ticket = $p['Ticket'];
                                 }

                                 echo'<li class="list-group-item d-flex">';
                                 //echo'<div><h5 class="my-0">';
                                 //echo'<div class="row">';
                                 //echo'<div class="col"><div class="js-odoo d-inline-block"></div></div>';
                                 //echo'<div class="col"><div class="js-oddo2 d-inline-block"></div></div>';
                                 //echo'<div class="col"><div class="js-oddo3 d-inline-block"></div></div>';
                                 echo'<div class="sp-container"><div class="sp-content">';
                                 //echo'<div class="col col-3"></div>';
                                 echo'<div align="center">';
                                 ?> 
                                 <h4 class="frame-<?php echo $i ?>"><div class="num">

                                 <?php
                                 $nombre = "JOSE MANUEL";
                                 echo $winner_name." ".$winner_name_second." ".$winner_last." #".$winner_ticket;
                                 //echo'</h5></div>';
                                 echo'</div></h4>';
                                 echo'</div>';
                                 echo'</li>';
                                 ?>


                                 <script type="text/javascript">
                                 var i = ["<?php echo($i); ?>"]
                                 var ganadorname = new Array(i);
                        
                                 var ganadornam= ["<?php echo($winner_name);?>"];
                                 //var ganadorlast= ["<?php echo($winner_last);?>"];
                                 //var ganadordepar= ["<?php echo($winner_depar);?>"];
                                 var ganadorticket= ["<?php echo($winner_ticket);?>"];
                                 
                        
                        
                                 //ganadorname[i]= ["<?php echo($winner_name." ".$winner_last." ".$winner_ticket);?>"];
                                 //odoo.default({ el:'.js-odoo', from: '@#$%##$@$%^&#@*&$%@#^&%#$@$$^&&#$#$^%$#', to: (ganadorname[i]), animationDelay: 1000 ,animationDuration:3000});
                                 //odoo.default({ el:'.js-odoo2', from: '@#$%##$@$%^&#@*&$%@#^&%#$@$$^&&#$#$^%$#', to: ('Personas'), animationDelay: 1000 ,animationDuration:3000});
                                 //odoo.default({ el:'.js-odoo3', from: '@#$%##$@$%^&#@*&$%@#^&%#$@$$^&&#$#$^%$#', to: ('Personas'), animationDelay: 1000 ,animationDuration:3000});
                                </script>
                                <?php




                                }
                                echo'</ul>';

                                //echo'<p class="border-bottom border-gray pb-3 mb-3 text-success">Consulta Exitosamente</p>';
                                //header('Location: ../Random_Winner_n/Prueba_Cant_Premio.php');
                             }else{
                                 //echo'<p class="border-bottom border-gray pb-3 mb-3 text-danger">Error al Guardar</p>';
                                 die("Error al Insertar datos". $db->error);
                             }

                        }

                    //echo $pregunta;
                 //}
                }
            ?>
            <div class="col"></div>
            </div>
            </div>
            </div>
            </div>
            <div id="ganadores" name="ganadores"></div>
    

</body>
<script type="text/javascript">

function ocultar(){
document.getElementById('contenedor_premio').style.display = 'none';
//document.getElementById('text_premio').style.display = 'none';
}
 </script>
    <!---------------------->

    <script type="text/javascript">

    var participantes = ["Juan","Felipe","Jose","Roberto","Manuel","Lauraa","Maria","Eddy","Moises","Leila","Enrique"];
var apellidos = ["Ortiz","Constanzo","Manuel","Corte","Diaz","Lora","Callas","Duran","Duran","Parra","Ortiz","D.Cruz"];

document.getElementById("demo").onclick = function() {myFunction()};


    var nun = Math.floor(Math.random() * 12);
    //document.getElementById("random").innerHTML = nun;
    odoo.default({ el:'.js-odoo', from: '@#$%##$@$%^&#@*&$%@#^&%#$@$$^&&#$#$^%$#', to: (), animationDelay: 1000 ,animationDuration:3000});
    odoo.default({ el:'.js-odoo2', from: '@#$%##$@$%^&#@*&$%@#^&%#$@$$^&&#$#$^%$#', to: (), animationDelay: 1000 ,animationDuration:3000});
    odoo.default({ el:'.js-odoo3', from: '@#$%##$@$%^&#@*&$%@#^&%#$@$$^&&#$#$^%$#', to: (), animationDelay: 1000 ,animationDuration:3000});


    
    </script>
</html>