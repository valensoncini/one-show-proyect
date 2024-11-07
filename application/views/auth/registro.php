<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $errors = $this->session->flashdata('errors')?>
<div class="container-fluid mb-3 mt-5">
   
    
    <div class="auth-main">
        <div>
            <img src="<?php echo base_url('assets/imgs/logo-pagina.png');?>" alt="logo pagina">
        </div>
        <h3>Registrarse</h3><br>
       
        <?php if(isset($errors)):?>
            <?php foreach($errors as $error):?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error;?>
                </div>
            <?php endforeach;?> 
        <?php endif;?>
        <form action="<?= base_url(); ?>Auth/registro" method="post">
            <label class="form-label">Nombre Completo</label>
            <input  class="form-control"type="text" name="nombre_completo" >
            <br>
            <label class="form-label">Email</label>
            <input  class="form-control" type="email" name="mail" >
            <br>
            <label class="form-label">Identificacion (Dni u otra identificacion) </label>
            <input class="form-control" type="number" name="iden"  >
            <br>
            <label class="form-label">Telefono</label>
            <input class="form-control" type="number" name="tel"  >
            <br>
            <label class="form-label">Contraseña</label>
            <input class="form-control" type="password" name="pass"  >
            <br>
            <label class="form-label">Confirmar Contraseña</label>
            <input class="form-control" type="password" name="confirm-pass"  >
            <br>
            <button  type="submit">Registrarse</button>
        </form>
        <p>Ya tenes una cuenta?<a href="<?php echo base_url('Auth/forms_login'); ?>">Ingresa aca</a></p>
    </div>

</div>