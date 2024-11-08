<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>



<div class="container-fluid mb-3">
    <h3 class="text-center">Actualizar Evento</h3>
  
    <form action="<?php echo  base_url('Eventos/actualizar_evento/') . $evento->idEvento; ?>" method="post" enctype="multipart/form-data">
        <label class="form-label">Nombre Evento</label>
        <input  class="form-control"type="text" name="nombre" value="<?php echo $evento->nombre; ?>" placeholder="Nombre" required>
        <br>
        <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
        <textarea class="form-control"  name="desc" value=""  id="exampleFormControlTextarea1" rows="3"><?php echo $evento->descripcion; ?></textarea>
        <br>
        <label class="form-label">Precio</label>
        <input class="form-control" type="number" name="precio" value="<?php echo $evento->precio; ?>"  placeholder="Precio" required>
        <br>
        <label class="form-label">Fecha Y Horario</label>
        <input class="form-control" type="text" name="fecha"  value="<?php echo $evento->fecha; ?>" required  placeholder="Fecha y Hora"  maxlength="20">
        <br>
        <label class="form-label">Disponibilidad</label>
        <input class="form-control" type="number" name="dispo"  value="<?php echo $evento->disponibilidad ?>" placeholder="Disponibilidad" required>
        <br>
        <label class="form-label">Estado</label>
        <input class="form-control" type="text" name="estado"  value="<?php echo $evento->estado ?>" placeholder="estado" required>
        <br>
        <label class="form-label">Lugar</label>
        <input class="form-control" type="text" name="lugar" placeholder="Lugar" required value="<?php echo $evento->lugar?>">
        <br>
        <button  class="btn btn-primary"type="submit">Actualizar</button>
    </form>
</div>