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
        <?php include ('paginas/menu-vertical.php');  ?>
            

 <div class="content-wrapper">
            <?php include ('paginas/cuerpo-principal.php');  ?>
            <?php include ('principal-general.php');  ?> 
            <?php include ('paginas/footer.php');  ?> 
 </div>
  </body>
</html>
