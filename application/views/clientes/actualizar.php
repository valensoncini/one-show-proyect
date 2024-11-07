<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container-fluid mb-3">
    <h3 class="text-center">Actualizar Cliente</h3>
    <form action="<?php echo  base_url('Clientes/actualizar_client/') . $cliente->id_cliente; ?>" method="post">
        <label class="form-label">Nombre Completo</label>
        <input  class="form-control"type="text" name="nombre_completo" value="<?php echo $cliente->nombre_completo; ?>" placeholder="Nombre" required>
        <br>
        <label class="form-label">Identificacion</label>
        <input  class="form-control"type="number" name="identificacion" value="<?php echo $cliente->identificacion; ?>" placeholder="identificacion" required>
        <br>
        <label class="form-label">Email</label>
        <input class="form-control" type="email" name="email" value="<?php echo $cliente->email; ?>"  placeholder="email" required>
        <br>
        <label class="form-label">Telefono</label>
        <input class="form-control" type="number" name="tel"  value="<?php echo $cliente->telefono; ?>" required  placeholder="Codigo pais + Telefono" >
        <br>
        <label class="form-label">Estado</label>
        <input class="form-control" type="text" name="estado"  value="<?php echo $cliente->estado ?>" placeholder="estado" required>
        <br>
        <button  class="btn btn-primary"type="submit">Actualizar</button>
    </form>
</div>