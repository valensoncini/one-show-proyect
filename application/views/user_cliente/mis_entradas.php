<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>


<div class="mis-entradas">
    <?php if(isset($evento)):?>
        
            <?php foreach($evento as $item): ?>
                <div>
                    <img src="<?php echo base_url('assets/imgs/uploads/') . $item['evento']->imagen; ?>" alt="imagen evento">
                    <h3><strong></strong><?php echo $item['evento']->nombre ?></strong></h3>
                    <p><?php echo "Cantidad de tickets: " . $item['venta']->cant_tickets ?></p>
                    <p><?php echo "Total: " . $item['venta']->total ?></p>
                    <a href="<?php echo base_url('User_Cliente/mostrar_resumen/') . $item['venta']->id_venta?>"><button class="btn">Ver Resumen</button></a>
                </div>
            <?php endforeach;?>
    
       
    <?php endif;?>

</div>