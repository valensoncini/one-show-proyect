<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php $errors = $this->session->flashdata('image_errors');?>

<div class="container-fluid mb-3">
    <h3 class="text-center">Crear Evento</h3>
    <?php if(isset($errors)):?>
        <?php foreach ($errors as $error):?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error;?>
            </div>
        <?php endforeach;?>
    <?php endif;?> 

    <form action="<?= base_url(); ?>Eventos/guardar_evento" method="post" enctype="multipart/form-data">
        <label class="form-label">Nombre Evento</label>
        <input  class="form-control"type="text" name="nombre" placeholder="Nombre" >
        <br>
        <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
        <textarea class="form-control"  name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
        <br>
        <label class="form-label">Precio</label>
        <input class="form-control" type="number" name="precio" placeholder="Precio" >
        <br>
        <label class="form-label">Fecha Y Horario</label>
        <input class="form-control" type="text" name="fecha"   placeholder="Fecha y Hora"  maxlength="20">
        <br>
        <label class="form-label">Disponibilidad</label>
        <input class="form-control" type="number" name="dispo" placeholder="Disponibilidad" >
        <br>
        <label class="form-label">Lugar</label>
        <input class="form-control" type="text" name="lugar" placeholder="Lugar" >
        <br>
        <label class="form-label">Imagen</label>
        <input class="form-control" type="file" name="imagen"  >
        <br>
        <button  class="btn btn-primary"type="submit">Crear</button>
    </form>
</div>