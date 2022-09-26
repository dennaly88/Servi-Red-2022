








<?php $imagen = '<img src="'.$row["imagen"].'" class="img-thumbnail" width="50" height="35" />'; 	?>

<div class="modal fade" id="perfil_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Perfil</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/foto-usuario.php?usu=<?php echo $row['imagen']; ?>" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">

							
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Foto Actual:</label>
								</div>
								<div class="col-sm-10">
								<?php $imagen = '<img src="'.$row["imagen"].'" class="img-thumbnail" width="90" height="60" />';?>

								<?php echo  $imagen; ?>
							
									
								</div>
							</div>

							
                            <?php 


$perfil=$row['id_rol'];

                            switch ($perfil) { 
    case 1:
     $estado='Administrador';
; 
        break;
    case 2:
        

        $estado='Coordinador'; 

        break;
    case 3: 
        $estado='Tecnico';
      
break;
       
}

?>                     



                           
			
                            <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Perfil:</label>
					</div>
					<div class="col-sm-10">
						
                    <div class="col-sm-10">
									<input type="text" class="form-control" name="edit_contraseña" value="<?php echo $estado; ?>" >
								</div>
						
					</div>
				</div>
						

						
							

						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>


