@extends('inicio.layout')
@section('content')
<?php
        $host = "localhost";
 
 // Nombre de usuario del servidor MySQL
 $usuario = "root";

  // Contraseña del usuario
 $contrasena = "";

 // Nombre de la base de datos
 $baseDeDatos ="lenguas";

 // Nombre de la tabla a trabajar
  
  $tabla2 = "alumnos";
  $table1 = "calificaciones";
  function Conectarse()
 {
   global $host, $usuario, $contrasena, $baseDeDatos, $tabla1, $tabla2;

   if (!($link = mysqli_connect($host, $usuario, $contrasena))) 
   { 
      echo "Error conectando a la base de datos.<br>"; 
     exit(); 
          }
   else
    {
     //echo "Listo, estamos conectados.<br>";
    }
   if (!mysqli_select_db($link, $baseDeDatos)) 
    { 
      echo "Error seleccionando la base de datos.<br>"; 
      exit(); 
    }
   else
    {
     //echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
   }
 return $link; 
  } 

  $link = Conectarse();

 $query = "SELECT $tabla2.nombreAlumno FROM $tabla2 ";

  $result = mysqli_query($link, $query); 

 ?>
  <table BORDER="3PX" width="1000" align="center">
     
      <div class ="contenedor-inputs">
        
     <tr ALING=center>
     <th scope="col">nombre</th>
      <th scope="col">Unidad 1</th>
      
      <th scope="col">Unidad 2</th>
      <th scope="col">Unidad 3</th>
    </tr>
    
   
    
     
   
      
   
  </form>




      
   
  <?php




while($mostrar = mysqli_fetch_array($result)){
?>

   <tr>
   <td><?php echo $mostrar['nombreAlumno'] ?></td>
   <form action="form_base.php" method="post">
        <td><input type ="text" id="calif1" name="calif1" placeholder="Calificacion" class ="input-48" required></td>
        <td><input type ="text" id="calif2" name="calif2" placeholder="Calificacion" class ="input-48" required></td>
        <td><input type ="text" id="calif3" name="calif3" placeholder="Calificacion" class ="input-48" required></td>
       
</tr>

 <!-- printf("<tr><th>%s</th></tr>", $row["nombreAlumno"], ); -->
<?php
} 
?>
<?php
mysqli_free_result($result); 

mysqli_close($link); 

?>
<input type="submit" value="Guardar" class="btn-guardar" >
</table>
@stop