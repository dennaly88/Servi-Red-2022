<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <?php include "sql/conexion.php";?>
  <style type="text/css">
      img.pequeña{width: 50px; height: 50px;}
      img.mediana{width: 100px; height: 100px;}
      img.grande{width: 200px; height: 200px;}
    </style>

  <body class="skin-blue">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">MODULO USUARIO</h3>
                </div>
                <div class="box-body">
                <center><a href="#registro_usuario" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
      </div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Id</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Usuario</th>
                                <th>Contraseña</th>
                                <th>Perfil</th>
                                <th>Accion</th>
                            </tr>
                    </thead> 
                    <tbody> 
                    <?php
                     $sql="SELECT * from usuarios";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                     $imagen = '<img src="'.$row["imagen"].'" class="img-thumbnail" width="50" height="35" />';
                   
  
								   echo 
								"<tr>
                  <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span >$imagen</a></td>
									<td>".$row['id']."</td>
									<td>".$row['nombres']."</td>
									<td>".$row['apellidos']."</td>
                  <td>".$row['telefono']."</td>
                  <td>".$row['corre']."</td>
                  <td>".$row['usuario']."</td>
                  <td> <a href='#contraseña_".$row['id']."' class='btn btn-dark btn-lg' data-toggle='modal'><span class='fa fa-eye'></span> </a></td>
                  <td> <a href='#perfil_".$row['id']."' class='btn btn-dark btn-lg' data-toggle='modal'><span class='fa fa-user'></span> </a></td>

								
									<td>
										<a href='#edit_".$row['id']."' class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Editar</a>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Eliminar</a>
									</td>
								</tr>";
                include('registrar-usuario.php');
								include('actualizar-usuario.php');
								include('eliminar-usuario.php');
                include('cambiar-foto.php');
                include('contraseña.php');
                include('perfil.php');
							}
						?>
                    </tbody>
                        <tfoot>
                              <tr>
                                <th>Foto</th>
                                <th>Id</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Usuario</th>
                                <th>Contraseña</th>
                                <th>Perfil</th>
                                <th>Accion</th>
                              </tr>
                        </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>   
    </div>
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
  </body>
</html>
