<?php 
	//echo $id_materia;
	if($DATA_CLIENTES!=FALSE){
		foreach ($DATA_CLIENTES->result() as $row) {
			$id_cliente=$row->id_cliente;
			$nombre=$row->nombre;
			$apellidos=$row->apellidos;
			$telefono=$row->telefono;
			$correo=$row->correo;
		}
	}
 ?>
 <form id="editar" name="editar" method="post" action="<?=base_url()?>index.php/clientes/actualizar_info/<?=$id_cliente?>">
	<center style="padding: 1%">
		<table>
			<tbody>
				<td colspan="3">
					<h1>Modificar Cliente</h1>
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="nombre" class="form-control" maxlength="50" value="<?=$nombre?>" required>
					</div>
					<div class="form-group">
						<label>Apellidos:</label>
						<input type="text" name="apellidos" maxlength="30" class="form-control" value="<?=$apellidos?>" required>
					</div>
					<div class="form-group">
						<label>Telefono:</label>
						<input type="text" name="telefono" maxlength="10" class="form-control" value="<?=$telefono?>" required>
					</div>
					<div class="form-group">
						<label>Correo:</label>
						<input type="text" name="correo" class="form-control" maxlength="30" value="<?=$correo?>" maxlength="30" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Enviar</button>
						<input type="cancel" value="Cancelar" class="btn btn-danger" onclick="location.href='<?=base_url()?>index.php/clientes'">
					</div>
				</td>
			</tbody>
		</table>
	</center>
</form>