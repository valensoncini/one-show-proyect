<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>




	<div class="container-fluid">
		<h2>Perfil One-Show</h2>
		
			<div class="contenedor-perfil">
				<p><strong>Nombre: </strong><?php echo $cliente->nombre_completo;?></p>
				<p><strong>Identificacion: </strong><?php echo $cliente->identificacion;?></p>
				<p><strong>Email: </strong> <?php echo $cliente->email;?></p>
				<p><strong>Telefono:</strong> <?php echo $cliente->telefono;?></p>
				<a class="btn btn-primary" href="<?php echo base_url('User_Cliente/vista_modificar_perfil/') . $cliente->id_cliente?>">Modificar</a>
				<!-- Button trigger modal -->
					<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
					  Desactivar Mi Cuenta One-Show
					</button>
					<?php if($this->session->flashdata('error_desactivacion')): ?>
						<div class="alert alert-danger" role="alert">
							<?php echo $this->session->flashdata('error_desactivacion');?>
						</div>
					<?php endif; ?>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Desactivar Cuenta</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						  </div>
						  <div class="modal-body">
							<p>Estas a punto de Desactivar tu cuenta, estas seguro de esta accion?</p>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<form action="<?php echo base_url('User_Cliente/desactivar_cuenta/') . $cliente->id_cliente ?>" method="POST">
								<button type="submit" class="btn btn-primary">Desactivar Cuenta</button>
							</form>
						  </div>
						</div>
					  </div>
					</div>
			</div>
	</div>