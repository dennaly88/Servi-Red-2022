
<?php $imagen = '<img src="'.$row["imagen"].'" class="img-thumbnail" width="50" height="35" />'; 	?>

<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Usuario</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/editar-usuario.php?usu=<?php echo $row['imagen']; ?>" enctype="multipart/form-data">
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
									<label class="control-label modal-label">Nombres:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_nombres" value="<?php echo $row['nombres']; ?>">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Apellidos:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_apellidos" value="<?php echo $row['apellidos']; ?>">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Telefono:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_telefono" value="<?php echo $row['telefono']; ?>">
								</div>
							</div>


							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Correo:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_correo" value="<?php echo $row['corre']; ?>" >
								</div>
							</div>

							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Usuario:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_usuario" value="<?php echo $row['usuario']; ?>">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Contraseña:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_contraseña" value="<?php echo $row['contraseña']; ?>" >
								</div>
							</div>


						
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Perfil:</label>
					</div>
					<div class="col-sm-10">
						
					   <select class="form-control form-control-sm" placeholder="Seleccione el Perfil" name="edit_id_rol"  required>
					   <option>-- Seleccione el Perfil--</option>
					                   <option value="1">Administrador</option>
										<option value="2">Coordinador</option>
										<option value="3">Basico</option>
					   </select>
						
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


