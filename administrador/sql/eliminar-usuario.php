
	

	




<?php

session_start();
    $id = $_GET['id'];
	include('conexion.php');


if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 

 
$sql = "DELETE FROM usuarios WHERE id ='$id'";
if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../usuario.php?usu=3");
    
  
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>