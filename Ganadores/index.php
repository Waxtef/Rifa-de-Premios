<?php include '../conexion.php'; 

$sql = "SELECT * FROM ganadores_cvs ";
$data = mysqli_query($db,$sql);
$count = mysqli_num_rows($data);?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="..\Style\bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
    <script src="main.js"></script>
</head>
<body>
<div class="container">
  <div class="row row--top-40">
    <div class="col-md-12">
      <h2 class="row__title">Ganadores <span class="badge badge-secondary badge-pill"><?php echo $count;?></span></h2>
    </div>
  </div>
  <div class="row row--top-20">
    <div class="col-md-12">
    <div class="table-wrapper">
      <div class="table-container">
        <table class="table">
          <thead class="table__thead">
            <tr>
              <th class="table__th"><input id="selectAll" type="checkbox" class="table__select-row"></th>
              <th class="table__th">Nombre</th>
              <th class="table__th">Codigo Empleado</th>
              <th class="table__th">Cedula</th>
              <th class="table__th">Departamento</th>
              <th class="table__th">N.Ticket</th>
              <th class="table__th">Premio</th>
              <th class="table__th"></th>
            </tr>
          </thead>
          <tbody class="table__tbody">
              <?php 
           while($w = mysqli_fetch_array($data)){?>
            <tr class="table-row table-row--chris">
              <td class="table-row__td">
              <?php echo $w['id']?>
              </td>
              <td class="table-row__td">
                <div class="table-row__img"></div>
                <div class="table-row__info">
                  <p class="table-row__name"><?php echo $w['Nombre_primero']?></p>
                  <span class="table-row__small"><?php echo $w['Departamento']?></span>
                </div>
              </td>
              <td data-column="Policy" class="table-row__td">
                <div class="">
                  <p class="table-row__policy"><?php echo $w['Codigo_Empleado']?></p>
                  <span class="table-row__small"></span>
                </div>                
              </td>
              <td data-column="Policy status" class="table-row__td">
                <p class="table-row__p-status status--green status"><?php echo $w['Cedula']?></p>
              </td>
              <td data-column="Destination" class="table-row__td">
              <?php echo $w['Facilidad']?>
              </td>
              <td  data-column="Status" class="table-row__td">
                <p class="table-row__status status--red status"><?php echo $w['Ticket']?></p>
              </td>
              <td data-column="Progress" class="table-row__td">
                <p class="table-row__progress status--blue status"><?php echo $w['Premio']?></p>
              </td>
              </td>
<td class="table-row__td">
               
                               
              </td>
            </tr>
           <?php }?>
            
            
 
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>


</div>
    
</body>
</html>