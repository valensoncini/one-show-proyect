<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
    

<div class="container-fluid mt-5">
    <h4>Contactanos!</h4>
    <p>Si tenes alguna duda sobre alguna compra, algun evento o cualquier problema, llena esta formulario y nosotros nos estaremos contactando via mail o via whatsapp</p>
    <?php $errores_consulta = $this->session->flashdata('errors_consulta');?>
    <?php if(isset($errores_consulta)):?>
        <?php foreach($errores_consulta as $error): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error;?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <form action="<?php echo base_url('User_Cliente/recibir_contacto'); ?>" method="post">
            <label class="form-label">Nombre Completo</label>
            <input  class="form-control"type="text" name="name" placeholder="Nombre Completo">
            <br>
            <label class="form-label">Email</label>
            <input  class="form-control" type="email" name="mail" placeholder="Email">
            <br>
            <label class="form-label">Telefono</label>
            <input class="form-control" type="number" name="tel" placeholder="Telefono" >
            <br>
            <label for="exampleFormControlTextarea1" class="form-label">Consulta</label>
            <textarea class="form-control"  name="consulta" id="exampleFormControlTextarea1" rows="3"></textarea>
            <br>
        <button  class="btn btn-secondary" type="submit">Contactanos</button>
    </form>
    
    <?php $success = $this->session->flashdata('success');?>
    <?php if(isset($success)):?>
        <div class="alert alert-success" role="alert">
            <?php echo $success;?>
        </div>
    <?php endif; ?>
</div>