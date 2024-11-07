<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container-compra">
    <form action="<?php echo base_url('User_Cliente/confirmar_compra/') . $evento->idEvento;?>" method="POST">


        <div class="titulo-compra">
            <div class="nombre-evento">
                <h3><?php echo $evento->nombre ?></h3><br>
            </div>
            <div class="fecha-evento">
                <i class="fa-solid fa-calendar-days"></i>
                <h5><?php echo $evento->fecha ?></h5>
            </div>
            <div class="lugar-evento">
                <i class="fa-solid fa-location-dot"></i>
                <h4><?php echo $evento->lugar ?></h4>
            </div> 
            
        </div>
        <div class="datos-compra">
            <div class="evento-descripcion">
                <img src="<?php echo base_url('assets/imgs/uploads/') . $evento->imagen;?>" alt="imagen evento">
                <p><?php echo $evento->descripcion ?></p>
            </div>
            <div class="evento-precio">
                <i class="fa-solid fa-money-bill"></i>
                <p>Precio</p>
                <input type="number"  name="precio" value="<?php echo $evento->precio ?>" readonly>
            </div>
            <div class="evento-cantidad">
                <p>Cantidad</p>
                <input type="number" name="cantidad" required >
            </div>
            <div class="boton-compra">
                <!-- Button trigger modal -->
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Comprar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmacion de Compra</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Estas a punto de comprar <?php echo $evento->nombre ?> en <?php echo $evento->lugar ?> <br> Confirmas?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn" >Comprar</button>
                                </div>
                            </div>
                        </div>
                </div>

            </div>

        </div>

    </form>
       

</div>

