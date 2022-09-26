
<?php $imagen = '<img src="'.$row["imagen"].'" class="img-thumbnail" width="50" height="35" />'; 	?>

<div class="modal fade" id="foto_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Cambiar Foto</h4></center>
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

							
                            <div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Foto Nueva:</label>
								</div>
								<div class="col-sm-10">
	                     <input type="file" id="imagen" name="imagen" accept=".jpg, .jpeg, .png, .git" class="form-control"  id="exampleInputEmail1" placeholder="IMAGEN DE PERFIL" required>	
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


