<h1 class="text-center">Venta</h1>
    <div class="container-fluid caption-top">
        <caption><?php echo $venta->id_venta ?></caption>
        <p><?php echo  "id Cliente: " . $venta->fk_id_cliente ?></p>
        <p><?php echo "Id Evento: ". $venta->fk_id_evento  ?></p>
        <p><?php echo "Fecha: " . $venta->fecha  ?></p>
        <p><?php echo "Cantidad de Tickets: " . $venta->cant_tickets  ?></p>
        <p><?php echo "Total: " . $venta->total  ?></p>
        <p><?php echo "Estado: " . $venta->estado  ?></p>
        <br><br>
        <div class="d-flex">
            <a href="<?php echo base_url('Ventas/vista_actualizar/') . $venta->id_venta; ?>"><button type="button" class="btn btn-primary">Editar</button></a>
        </div>

    </div>


