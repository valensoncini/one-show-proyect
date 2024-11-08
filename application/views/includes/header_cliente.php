<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>


  
         <nav class="navbar navbar-expand-lg sticky-top  bg-dark  ">
            <div class="container-fluid">
                 <img src="<?= base_url();?>assets/imgs/logo-pagina.png" alt="logo" width="100" height="100">
             <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                       
                           
                             
                            <li class="nav-item">
                                <a class="nav-link btn btn-dark text-light" href="<?php echo base_url();?>">Home</a>
                            </li>

                             

                             <li class="nav-item">
                                <a class="nav-link btn btn-dark text-light" href="<?php echo base_url('User_Cliente/show_eventos');?>">Shows</a>
                            </li>

       

                            <li class="nav-item">
                                <a class="nav-link btn btn-dark text-light" href="<?php echo base_url('User_Cliente/contacto');?>">Contacto</a>
                            </li>

                            <li class="nav-item dropdown bg-dark" >
                            <?php if($this->session->userdata('logged') == true): ?>
                                    <a class="nav-link dropdown-toggle   text-light " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                       <?php echo $this->session->userdata('email'); ?>
                                    </a>
                                    <?php $id = $this->session->userdata('cliente'); ?>
                                    <ul class="dropdown-menu bg-dark">
										<li><a class="dropdown-item text-light  bg-dark" href="<?php echo base_url('User_Cliente/ver_perfil/') . $id; ?>">Perfil</a></li>
                                        <li><a class="dropdown-item text-light  bg-dark" href="<?php echo base_url('User_Cliente/mostrar_mis_entradas/') . $id; ?>">Mis Entradas</a></li>
                                        <li><a class="dropdown-item text-light  bg-dark" href="<?php echo  base_url('Auth/logout');?>">Log Out</a></li>
                                    </ul>
                            <?php else: ?>
                                    <li class="nav-item ">
                                         <a class="nav-link btn btn-dark text-light" href="<?php echo base_url('Auth/forms_login');?>">Log In</a>
                                    </li>
                                    <li class="nav-item ">
                                         <a class="nav-link btn btn-dark text-light" href="<?php echo base_url('Auth/forms_registro');?>">Registro</a>
                                    </li>
                             <?php endif; ?>
                             </li>
                    </ul>
              </div>
           </div>
         </nav>
  

