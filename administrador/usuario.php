<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Servi-Red | VTV</title>
    <link rel="shortcut icon" href="../images/logo-vtv.ico">
  </head>
  <body class="skin-blue">
    
  <?php
            session_start();
		            $usuario=$_SESSION['usuario'] ;
		          	$perfil=$_SESSION['perfil'] ;
                $imagen=$_SESSION['imagen'];

                
                
  ?> 


        <?php require ("librerias.php");?>
        <?php include ('paginas/menu-horizontal.php');  ?>
        <?php

$usu=$_GET["usu"];




switch ($usu) { 
    case 1:
     
require ("usuario-editado.php"); 
        break;
    case 2:
        

require ("usuario-agregado.php"); 

        break;
    case 3: 
    require ("usuario-eliminado.php"); 
      
break;
       
}



   
?>
       
       
       <div class="wrapper">
       <div class="content-wrapper">
              <?php include ('paginas/menu-vertical.php');  ?>
              <?php include ('paginas/cuerpo-principal.php');  ?>
              <?php include ('principal-usuario.php');  ?> 
              <?php include ('paginas/footer.php');  ?> 
    </div>

   
    </div>





 
  </body>
</html>
