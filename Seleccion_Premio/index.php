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
    <link rel="stylesheet" href="..\Style\bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="marco">
    <div class="row">
    <form action="" method="POST">
        <div class="col col-md-12">
        <div class="input-group input-group-lg">
              <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="premio" placeholder="Ingrese Premio" />
              </div>
      
        </div>
        <div class="col col-md-12">
            <div class="botones">
                <button type="submit" class="boton" id="demo" >Sacar Ganador</button>
                <p id="random"></p>
            </div>
            
      </div>
    </form>
    <?php  if(isset($_POST['premio'])){
                        $premio = $_POST['premio'];
                        $sql = "INSERT INTO Premios(premio) VALUES('$premio')";
                        if($premio == ""){
                            echo'<p class="border-bottom border-gray pb-3 mb-3 text-danger">Escriba un premio</p>';

                        }else{
                            if($db->query($sql) === true){
                                echo'<p class="border-bottom border-gray pb-3 mb-3 text-success">Pregunta Guardada Exitosamente</p>';
                                header('Location: ../Random_Winner_n/index.php');
                             }else{
                                 echo'<p class="border-bottom border-gray pb-3 mb-3 text-danger">Error al Guardar</p>';
                                 die("Error al Insertar datos". $db->error);
                             }

                        }

                    //echo $pregunta;
                 }?>
    </div>
    </div>
</body>
<script src="..\js\odoo.js"></script>
    <!--<script src="main.js"></script>-->
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