

<h1 class="text-center">Cliente</h1>
    <div class="container-fluid caption-top">
        <caption><?php echo $cliente->id_cliente ?></caption>
        <h2><?php echo $cliente->nombre_completo ?></h2>
        <hr>
        <p><?php echo "Identificacion: ". $cliente->identificacion  ?></p>
        <p><?php echo "Email: " . $cliente->email  ?></p>
        <p><?php echo "Telefono: " . $cliente->telefono  ?></p>
        <p><?php echo "Estado: " . $cliente->estado  ?></p>
        <br><br>
        <div class="d-flex">
        <a href="<?php echo base_url('Clientes/vista_actualizar/') . $cliente->id_cliente; ?>"><button type="button" class="btn btn-primary">Editar</button></a>
        </div>

    </div>


