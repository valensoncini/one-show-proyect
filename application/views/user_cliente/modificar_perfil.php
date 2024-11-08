<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container-fluid mb-3">
	<h2>Perfil One-Show</h2>
	<?php if($this->session->flashdata('error_modi')): ?>
			<div class="alert alert-danger" role="alert">
				<?php echo $this->session->flashdata('error_modi');?>
			</div>
	<?php endif; ?>
	<div class="contenedor-perfil">
		<form action="<?php echo  base_url('User_Cliente/modificar_perfil/') . $cliente->id_cliente; ?>" method="post">
			<label class="form-label">Nombre Competo</label>
			<input  class="form-control"type="text" name="nombre" value="<?php echo $cliente->nombre_completo; ?>" placeholder="Nombre" required>
			<br>
			<label class="form-label">Email</label>
			<input class="form-control" type="email" name="email" value="<?php echo $cliente->email; ?>"  placeholder="Email" required>
			<br>
			<label class="form-label">Identificacion</label>
			<input class="form-control" type="number" name="ide"  value="<?php echo $cliente->identificacion; ?>" required  placeholder="Identificacion">
			<br>
			<label class="form-label">Telefono</label>
			<input class="form-control" type="number" name="telefono"  value="<?php echo $cliente->telefono ?>" placeholder="Telefono" required>
			<br>
			<button  class="btn btn-primary"type="submit">Actualizar</button>
		</form>
	</div>
</div>
