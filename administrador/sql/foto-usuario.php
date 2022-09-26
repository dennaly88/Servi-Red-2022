<?php



include('conexion.php');
$edit_id=$_POST['edit_id'];
$imagen=$_POST['imagen'];


$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamaño_imagen=$_FILES['imagen']['size'];
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/Servi-Red/administrador/perfil/';
$ruta="perfil";
$ruta=$ruta."/".$nombre_imagen;
move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);







if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 

$sql = "UPDATE usuarios SET id='$edit_id',imagen='$ruta'
                                      WHERE id='$edit_id'" ;


 

if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../usuario.php?usu=1");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>








