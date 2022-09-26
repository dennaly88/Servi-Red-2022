<?php



include('conexion.php');
$edit_id=$_POST['edit_id'];
$edit_nombres=$_POST['edit_nombres'];
$edit_apellidos=$_POST['edit_apellidos'];
$edit_telefono=$_POST['edit_telefono'];
$edit_correo=$_POST['edit_correo'];
$edit_usuario=$_POST['edit_usuario'];
$edit_contraseña=$_POST['edit_contraseña'];
$edit_id_rol=$_POST['edit_id_rol'];

















if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "UPDATE usuarios SET id='$edit_id', nombres='$edit_nombres', apellidos='$edit_apellidos',telefono='$edit_telefono', corre='$edit_correo' ,usuario='$edit_usuario',contraseña='$edit_contraseña' ,id_rol='$edit_id_rol' 
                                      WHERE id='$edit_id'" ;
 

if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../usuario.php?usu=1");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>

