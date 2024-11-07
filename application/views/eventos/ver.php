

<div class="eventos-container">
    <h1 class="text-center">EVENTO</h1>
        <div class="container-fluid caption-top">
            <caption><?php echo $evento->idEvento ?></caption>
            <div class="evento-imagen">
                <img src="<?php echo base_url('assets/imgs/uploads/') . $evento->imagen ;?>" alt="imagen evento">
            </div>
            <h2><?php echo $evento->nombre ?></h2>
            <hr>
            <p><?php echo $evento->descripcion  ?></p>
            <hr>
            <p><?php echo "Precio: " . $evento->precio  ?></p>
            <p><?php echo "Fecha y Horario: " . $evento->fecha  ?></p>
            <p><?php echo "Disponibilidad: " . $evento->disponibilidad  ?></p>
            <p><?php echo "Estado: " . $evento->estado  ?></p>
            <p><?php echo "Lugar: " . $evento->lugar  ?></p>
            <br><br>
            <div class="d-flex">
            <a href="<?php echo base_url('Eventos/actualizar/') . $evento->idEvento; ?>"><button type="button" class="btn btn-primary">Editar</button></a>
            </div>

        </div>
</div>
