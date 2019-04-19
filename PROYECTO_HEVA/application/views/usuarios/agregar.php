<form id="agregar" name="agregar" method="post" action="<?=base_url()?>index.php/usuarios/crear_usuario">
	<center style="padding: 1%">
		<table>
			<tbody>
				<td colspan="3">
					<h1>Agregar Usuario</h1>
					<div class="form-group">
						<label>Nombre de usuario:</label>
						<input type="text" name="nombre" maxlength="30" class="form-control" required>
					</div>
					<div class="form-group">
						<label>correo:</label>
						<input type="text" name="correo" maxlength="50" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input type="Password" name="contrasena" maxlength="20" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Enviar</button>
						<input type="cancel" value="Cancelar" class="btn btn-danger" onclick="location.href='<?=base_url()?>index.php/usuarios'">
					</div>
				</td>
			</tbody>
		</table>
	</center>
</form>