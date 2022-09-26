<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Estás seguro de que quieres eliminar?</p>
				<h2 class="text-center"><?php echo $row['nombres'].' '.$row['apellidos']; ?></h2>
                <?php $imagen = '<img src="'.$row["imagen"].'" class="img-thumbnail" width="90" height="60" />';?>
                <h2 class="text-center"><?php echo $imagen; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="sql/eliminar-usuario.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span>Aceptar</a>
            </div>

        </div>
    </div>
</div> 