<form id="agregar" name="agregar" method="post" action="<?=base_url()?>index.php/clientes/crear_cliente">
	<center style="padding: 1%">
		<table>
			<tbody>
				<td colspan="3">
					<h1>Agregar Cliente</h1>
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="nombre" maxlength="50" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Apellidos:</label>
						<input type="text" name="apellidos" maxlength="50" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Telefono:</label>
						<input type="text" name="telefono" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Correo:</label>
						<input type="text" name="correo" maxlength="20" class="form-control" required>
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