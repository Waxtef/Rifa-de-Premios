<?php include 'conexion.php';
$error = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
  //email and password
  $cedula1= mysqli_real_escape_string($db,$_POST['cedula1']);
  $cedula2= mysqli_real_escape_string($db,$_POST['cedula2']);
  $cedula3= mysqli_real_escape_string($db,$_POST['cedula3']);
  $mycedula= $cedula1."-".$cedula2."-".$cedula3;
  $nombreutil =mysqli_real_escape_string($db,$_POST['nombre']);
  $apellidoutil =mysqli_real_escape_string($db,$_POST['apellido']);
  echo($mycedula);
  /*$myticket= mysqli_real_escape_string($db,$_POST['ticket']);
  $myname= mysqli_real_escape_string($db,$_POST['nombre']);
  $myradio= mysqli_real_escape_string($db,$_POST['radio']);*/
  

    
    $sql = "SELECT id FROM invitados WHERE Cedula = '$mycedula'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$active = $row['active'];
    
    $count = mysqli_num_rows($result);

    
    // If result matched $myusername and $mypassword, table row must be 1 row
  
    if($count == 1) {
       //header('location:../Moving_Text/index.php');
       if(isset($_POST['ticket'])){
        $ticket = $_POST['ticket'];
        $radio = $_POST['radio'];
        echo $ticket;
        echo $radio;
        echo $mycedula;
        if($radio == 'false'){

        }else{
       //$sql2 = "INSERT INTO cvs_select(nombre,apellido,email,age,ticket,participara) SELECT nombre,apellido,email,age,'$ticket','$radio' FROM cvs WHERE email = '$mycedula'";
       $sql2 = "INSERT INTO invitados_participando(Codigo_Empleado,Codigo_Alternativo,Nombre,Cedula,Departamento,Facilidad,Ticket,Participacion,Nombre_Util,Apellido_Util) SELECT Codigo_Empleado,Codigo_Alternativo,Nombre,Cedula,Departamento,Facilidad,'$ticket','$radio','$nombreutil','$apellidoutil' FROM invitados WHERE Cedula = '$mycedula' ";
       $sql3 = "INSERT INTO invitados_participando_actualizada(Codigo_Empleado,Codigo_Alternativo,Nombre,Cedula,Departamento,Facilidad,Ticket,Participacion,Nombre_Util,Apellido_Util) SELECT Codigo_Empleado,Codigo_Alternativo,Nombre,Cedula,Departamento,Facilidad,'$ticket','$radio','$nombreutil','$apellidoutil' FROM invitados WHERE Cedula = '$mycedula' ";
       if(($db->query($sql2) === true) && ($db->query($sql3)== true)){
        //if($db->query($sql2) === true){
        echo'<p class="border-bottom border-gray pb-3 mb-3 text-success">Partcipante agregado</p>';
     }else{
         echo'<p class="border-bottom border-gray pb-3 mb-3 text-danger">Error al ingresar datos</p>';
         die("Error al Insertar datos". $db->error);
     }

       //header('location:index.php');\
    }

    }
  }
  else{
    $error = "El usuario no fue encontrado o los datos son incorrectos";
 }
 }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ticket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="Style\bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="js\jquery-3.3.1.js"></script>
</head>
<body>
<div class="checkout">
  <div class="credit-card-box">
    <div class="flip">
      <div class="front"><!-- Desing-->
        <div class="chip"></div><!-- Desing-->
        <div class="number"></div>
      </div>
      <div class="back"><!-- Desing-->
        <div class="strip"></div><!-- Desing-->
        <div class="ccv">
          <label class="mono">Nombre</label>
          <div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <form class="form was-validated" autocomplete="off" novalidate action = "" method = "POST">
    <fieldset>
      <p class="mono" for="card-number">Numero de Ticket</p>
      <input type="num" id="card-number" name="ticket" class="input-cart-number" maxlength="8" required placeholder="000000000" />
    </fieldset>
    <fieldset class="fieldset-ccv">
      <p  class="mono" for="card-ccv">Nombre Y Apellido</p>
      <div class="row">
      <div class="col col-md-6">
      <input type="text" id="card-ccv" name="nombre" maxlength="30" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Nombre" required/>
      </div>
      <div class="col col-md-6">
      <input type="text" id="card-ccv2" name="apellido" maxlength="30" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Solo un Apellido" required/>
      </div>
      </div>
    </fieldset>
    <fieldset>
      <p  class="mono" for="cedula">Cedula</p>
      <div class="row">
      <div class="col-3">
      <input type="text" id="cedula1"  name="cedula1" required="required" maxlength="3" placeholder="---" required/>
      </div>
      <div class="col-7">
      <input type="text" id="cedula2"  name="cedula2" required="required" maxlength="7" placeholder="-------" required/>
      </div>
      <div class="col-2">
      <input type="text" id="cedula3"  name="cedula3" required="required" maxlength="1"placeholder="-" required />
      </div>
      </div>
    </fieldset>
    <fieldset>
        <p for="">Participara?</p>
        <div class="row">
        <div class="col col-sm-9">
        <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="customControlValidation2" value="true" name="radio" required checked>
    <label class="custom-control-label" for="customControlValidation2">Si</label>
  </div>
  <div class="custom-control custom-radio mb-3">
    <input type="radio" class="custom-control-input" id="customControlValidation3" value="false" name="radio" required>
    <label class="custom-control-label" for="customControlValidation3">No</label>
        </div>
        <div class="col col-sm-3">
        <button class="btn"><i class="fa fa-lock "></i>Subir</button>
        </div>
        <div class="col col-sm-12">
        </div>

        </div>
    </fieldset>
    <div class="clear"> </div>
				<span class="text-danger"><?php echo $error; ?></span>
			</div>
  </form>
  <div class="row">
    <div class="col col-md-5"></div>
  <div class="col col-md-2"><a class="nav-link btn" href="Seleccion_Premio/index.php">Concluir Ingreso</a></div>
  <div class="col col-md-5"></div>
</div>
  
</div>
    
</body>
<script src="main.js"></script>
</html>