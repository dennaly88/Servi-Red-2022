

<?php
    include "sql/conexion.php";
 
?>

        
        <section class="content">
        <div class="box box-primary">
        <div class="box-header">
                  <h3 class="box-title">MODULO DE USUARIO</h3>
                </div>
                <div class="box-body">

                <center><button type="button" class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#modalcrear">Agregar
  &#x2795;
</button>
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Foto</th>
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

     while($mostrar=mysqli_fetch_array($result)){


                ?>
            <tbody>
                <tr>

                <style type="text/css">
    img.pequeña{width: 50px; height: 50px;}
    img.mediana{width: 100px; height: 100px;}
    img.grande{width: 200px; height: 200px;}
  </style>
</head>
<body>



  <td><?php echo  ' <img src="'.$mostrar['imagen'].'" class="pequeña" alt="User Image">'  ?></td>
  <td><?php echo $mostrar['nombres'] ?></td>
  <td><?php echo $mostrar['apellidos'] ?></td>
  <td><?php echo $mostrar['telefono'] ?></td>
  <td><?php echo $mostrar['corre'] ?></td>
  <td><?php echo $mostrar['usuario'] ?></td>
  <td><?php echo $mostrar['contraseña'] ?></td>
  <td><?php echo $mostrar['perfil'] ?></td>
 



                    <td>

                   
<button type= 'button' class= 'btn btn-danger btn-sm' onclick="CanContinue ()" title="Eliminar">Eliminar&#x274e;</button>
<script type="text/javascript">

function CanContinue () {
var confRet = window.confirm ("Deseas Eliminar el Material");
if (confRet) {
window.location='sql/eliminar-material.php?id=<?php echo $mostrar['id'];?>'; 

}
else {


}
}
</script>



                    <a href="principal-editar-materiales.php?id=<?php echo $mostrar['id'];?> " > 
                     <button type= 'button' class= 'btn btn-info btn-sm'  title="Editar" data-target="#danny"> Editar&#x1f4dd; </button>


                     <div class="text-center">
          
        </div>   

                </td>
                </tr>
                
                 
                
            </tbody>
            
            <?php
}
?>









                    </tbody>
                    <tfoot>
                      <tr>
                      <th>Foto</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Perfil</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
  <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <script src="dist/js/demo.js" type="text/javascript"></script>
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
