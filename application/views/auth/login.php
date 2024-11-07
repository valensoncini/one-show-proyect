<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $errors = $this->session->flashdata('errors')?>
<div class="container border rounded mb-3 mt-5">
    <div class="auth-main">
        <div>
            <img src="<?php echo base_url('assets/imgs/logo-pagina.png');?>" alt="logo pagina">
        </div>
        <h3>Log In</h3>
        <?php if(isset($errors)):?>
            <?php foreach($errors as $error):?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error;?>
                </div>
            <?php endforeach;?> 
        <?php endif;?>
        <?php $warning = $this->session->flashdata('warning_log')?>
        <?php if(isset($warning)):?>
            <div class="alert alert-warning" role="alert">
                    <?php echo $warning;?>
                </div>
        <?php endif;?>
        <form action="<?= base_url(); ?>Auth/login" method="post" class="p-1">
            <label class="form-label">Email</label>
            <input  class="form-control" type="email" name="email" placeholder="Email">
            <br>
            <label class="form-label">Contraseña</label>
            <input class="form-control" type="password" name="pass" placeholder="Contraseña">
            <br>
            <button  type="submit">Log In</button>
        </form>
        <div>
            <p>No tenes una cuenta?<a href="<?php echo base_url('Auth/forms_registro'); ?>">Registrate aca</a></p>
        </div>
    </div>
  
</div>