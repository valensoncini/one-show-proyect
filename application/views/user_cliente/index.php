<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>



<main class="contenido">
            <div class="bienvenida">
                <img src="<?php echo base_url('assets/imgs/foto-bienvenida.jpg'); ?>" alt="foto bienvenida">
            </div>


            <section class="shows">
                <hr>
                <?php if(!empty($eventos)):?>
                    <div class="d-flex flex-wrap justify-content-start gap-4">
                        <?php foreach ($eventos as $evento): ?>
                            <?php if($evento->estado == 'activo'): ?>

                                <?php if($evento->disponibilidad > 5): ?>
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?php echo base_url('assets/imgs/uploads/') . $evento->imagen; ?>" class="card-img-top" alt="imagen evento">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $evento->nombre ?></h5>
                                            <a href="<?php echo base_url('User_Cliente/compra/') . $evento->idEvento?>" class="btn btn-dark">COMPRAR</a>
                                        </div>
                                    </div>
                                <?php elseif($evento->disponibilidad >= 1 && $evento->disponibilidad <=5): ?>
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?php echo base_url('assets/imgs/uploads/') . $evento->imagen; ?>" class="card-img-top" alt="imagen evento">
                                        <div class="card-body">
                                            <h4 class="card-title"><?php echo $evento->nombre ?></h4>
                                            <h5 class="card-title">ULTIMAS ENTRADAS</h5>
                                            <a href="<?php echo base_url('User_Cliente/compra/') . $evento->idEvento?>" class="btn btn-primary">COMPRAR</a>
                                        </div>
                                    </div>
                                <?php elseif($evento->disponibilidad == 0):?>
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?php echo base_url('assets/imgs/uploads/') . $evento->imagen; ?>" class="card-img-top" alt="imagen evento">
                                        <div class="card-body">
                                            <h4 class="card-title"><?php echo $evento->nombre ?></h4>
                                            <button type="button" class="btn btn-secondary" disable>AGOTADO</button>
                                        </div>
                                    </div>
                                <?php endif; ?>  
                            <?php endif; ?>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
                <hr>
            </section>
</main>