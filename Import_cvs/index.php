<?php  include '../conexion.php'; 
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
        $item1 = mysqli_real_escape_string($db, $data[0]);  
        $item2 = mysqli_real_escape_string($db, $data[1]);
        $item3 = mysqli_real_escape_string($db, $data[2]);
        $item4 = mysqli_real_escape_string($db, $data[3]);
        $item5 = mysqli_real_escape_string($db, $data[4]);
        $item6 = mysqli_real_escape_string($db, $data[5]);
        $query = "INSERT into participantes_cvs(Codigo_Empleado,Nombre,Cedula,Departamento,Facilidad,Ticket) values('$item1','$item2','$item3','$item4','$item5','$item6')";
        mysqli_query($db, $query);
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?>  
<!DOCTYPE html>  
<html>  
 <head>  
  <title>Webslesson Tutorial</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 </head>  
 <body>  
  <h3 align="center">Import</h3><br />
  <form method="post" enctype="multipart/form-data">
   <div align="center">  
    <label>CSV File:</label>
    <input type="file" name="file" />
    <br />
    <input type="submit" name="submit" value="Import" class="btn btn-info" />
   </div>
  </form>
 </body>  
</html>