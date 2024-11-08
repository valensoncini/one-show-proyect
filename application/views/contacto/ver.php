
<div class="eventos-container">
    <h1 class="text-center">Contacto</h1>
        <div class="container-fluid caption-top">
            <caption><?php echo $contacto->id_contacto ?></caption>
            <p><strong><?php echo "Nombre: "
            . $contacto->nombre_contacto ?></strong></p>
            <p><?php echo "Consulta: ". $contacto->consulta  ?></p>
            <hr>
            <p><?php echo "Email: " . $contacto->email_contacto  ?></p>
            <p><?php echo "Telefono: " . $contacto->telefono_contacto  ?></p>
            <br><br>
            <div class="d-flex">
                <a href="<?php echo base_url('Contacto/index');?>"><button type="button" class="btn btn-primary">Volver</button></a>
            </div>

        </div>
</div>
