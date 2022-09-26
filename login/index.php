<!-------------------------------------------------------------------------------   
PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ
COORDINADOR DE DESRROLLO
VENEZOLANA DE TELEVISION 
CANAL 8 
0416-611-38-45   
---------------------------------------------------------------------------------->
<script type="text/javascript">
window.history.replaceState({},'','');
</script>
<!doctype html>
<html lang="es">
  <head>
   <link rel="shortcut icon" href="images/logo-vtv.ico">
   <title>Servi-Red | VTV</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	</head><br><br><br><br>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
 


			

				<BR>
				</center>
					<img src="images/logo-pequeño.png" alt="logo">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	
							<?php
							unset($usu);
							$usu8 = $_GET["usu"];
							if ($usu8 < 8) {
								} else 
								{
									include 'error-usuario.php';
									
									}  
							?>
							<?php
								unset($usc);
								$usuc = $_GET["usc"];
								if ($usuc < 8) {
									} else 
									{
										include 'error-usuario-2.php';
										
										}  
								?>
		      	<form action="sql/validar.php"  method="POST">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Usuario" name="usuarios" required>
							</div>
						<div class="form-group">
						      <input id="password-field" type="password" class="form-control" placeholder="Contraseña" name="contraseñas" required>
						      <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						</div><br>
						<div class="form-group">
							<button type="submit" class="form-control btn btn submit px-3">Entrar</button>
						</div>	
	            </form>
	          <center><br><br><br><img src="images/logo.png" alt="logo">
		      </div><br>
			  <center>
			  © Venezolana de Television Todos los Derechos Reservados- 2022
				</div></center>
			</div>
		</div>
	</section>
	<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	</body>
</html>
<!-------------------------------------------------------------------------------   
PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ
COORDINADOR DE DESRROLLO
VENEZOLANA DE TELEVISION 
CANAL 8 
0416-611-38-45   
---------------------------------------------------------------------------------->
