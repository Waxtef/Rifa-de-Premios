<?php  include '../conexion.php'; 
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

if (isset($_POST["import"]))
{
    
    
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                $Codigo_Empleado = "";
                if(isset($Row[0])) { $Codigo_Empleado = mysqli_real_escape_string($db,$Row[0]); }
                
                $Nombre = "";
                if(isset($Row[1])) { $Nombre = mysqli_real_escape_string($db,$Row[1]); }

                $Cedula = "";
                if(isset($Row[2])) { $Cedula = mysqli_real_escape_string($db,$Row[2]); }
                
                $Departamento = "";
                if(isset($Row[3])) { $Departamento = mysqli_real_escape_string($db,$Row[3]); }

                $Facilidad = "";
                if(isset($Row[4])) { $Facilidad = mysqli_real_escape_string($db,$Row[4]); }
                
                $Ticket = "";
                if(isset($Row[5])) { $Ticket = mysqli_real_escape_string($db,$Row[5]); }
                
                if (!empty($Codgio_Empleado) || !empty($Nombre) || !empty($Ticket)) {
                    $query = "INSERT INTO participantes_cvs(Codigo_Empleado,Nombre,Cedula,Departamento,Facilidad,Ticket) values('".$Codgio_Empleado."','".$Nombre."','".$Cedula."','".$Departamento."','".$Facilidad."','".$Ticket."')";
                    $result = mysqli_query($db, $query);
                
                    if (! empty($result)) {
                        $type = "success";
                        $message = "Importado";
                    } else {
                        $type = "error";
                        $message = "Error Importando";
                    }
                }
             }
        
         }
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
?>

<!DOCTYPE html>
<html>    
<head>
<style>    
body {
	font-family: Arial;
	width: 550px;
}

.outer-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 40px 20px;
	border-radius: 2px;
}

.btn-submit {
	background: #333;
	border: #1d1d1d 1px solid;
    border-radius: 2px;
	color: #f0f0f0;
	cursor: pointer;
    padding: 5px 20px;
    font-size:0.9em;
}

.tutorial-table {
    margin-top: 40px;
    font-size: 0.8em;
	border-collapse: collapse;
	width: 100%;
}

.tutorial-table th {
    background: #f0f0f0;
    border-bottom: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

.tutorial-table td {
    background: #FFF;
	border-bottom: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

#response {
    padding: 10px;
    margin-top: 10px;
    border-radius: 2px;
    display:none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
</style>
</head>

<body>
    <h2>Importar Archivo</h2>
    
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
        
            </div>
        
        </form>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
         
<?php
    $sqlSelect = "SELECT * FROM participantes_cvs";
    $result = mysqli_query($db, $sqlSelect);

if (mysqli_num_rows($result) > 0)
{
?>
        
    <table class='tutorial-table'>
        <thead>
            <tr>
                <th>Codigo Empleado</th>
                <th>Nombre</th>
                <th>Cedula</th>
                <th>Departamento</th>
                <th>Facilidad</th>
                <th>Ticket</th>

            </tr>
        </thead>
<?php
    while ($row = mysqli_fetch_array($result)) {
?>                  
        <tbody>
        <tr>
            <td><?php  echo $row['Codigo_Empleado']; ?></td>
            <td><?php  echo $row['Nombre']; ?></td>
            <td><?php  echo $row['Cedula']; ?></td>
            <td><?php  echo $row['Departamento']; ?></td>
            <td><?php  echo $row['Facilidad']; ?></td>
            <td><?php  echo $row['Ticket']; ?></td>
        </tr>
<?php
    }
?>
        </tbody>
    </table>
<?php 
} 
?>

</body>
</html>