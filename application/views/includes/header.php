<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>


    <header>
         <nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary">
            <div class="container-fluid">
                 <img src="<?= base_url();?>assets/imgs/logo-pagina.png" alt="logo" width="100" height="100">
             <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                       
                            <li class="nav-item dropdown" >
                            <?php if($this->session->userdata('logged') == true): ?>
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                       <?php echo $this->session->userdata('email'); ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?php echo  base_url('Auth/index');?>">Inicio</a></li>
                                        <li><a class="dropdown-item" href="<?php echo  base_url('Auth/logout');?>">Log Out</a></li>
                                    </ul>
                            <?php else: ?>
                                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                User
                                     </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?php echo  base_url('Auth/forms_registro');?>">Registro</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('Auth/forms_login'); ?> ">LogIn</a></li>
                                    </ul>
                             <?php endif; ?>
                             </li>
                             
                             <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Eventos
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= base_url('Eventos/index');?>">Lista Eventos</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('Eventos/crear'); ?> ">Crear Eventos</a></li>
                                </ul>
                            </li>

                             

                             <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Clientes
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo base_url('Clientes/index');?>">Lista Clientes</a></li>
                                  
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ventas
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo base_url('Ventas/index');?>">Lista Ventas</a></li>
                                </ul>
                            </li>
                    </ul>
              </div>
           </div>
         </nav>
    </header>

