<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container-fluid mb-3">
    <h3 class="text-center">Actualizar Venta</h3>
    <form action="<?php echo  base_url('Ventas/actualizar_venta/') . $venta->id_venta; ?>" method="post">
        <label class="form-label">Cantidad de Tickets</label>
        <input  class="form-control"type="number" name="cantidad" value="<?php echo $venta->cant_tickets; ?>" placeholder="Cantidad Tickets" required>
        <br>
        <label class="form-label">Estado</label>
        <input  class="form-control"type="text" name="estado" value="<?php echo $venta->estado; ?>" placeholder="Estado" required>
        <button  class="btn btn-primary"type="submit">Actualizar</button>
    </form>
</div>