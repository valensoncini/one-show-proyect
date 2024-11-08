<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>


<div class="mis-entradas">
    <?php if(!empty($evento)):?>
        
            <?php foreach($evento as $item): ?>
              <div class="card">
				  <img src="<?php echo base_url('assets/imgs/uploads/') . $item['evento']->imagen; ?>" class="card-img-top" alt="imagen evento">
					  <div class="card-body">
						<h5 class="card-title"><?php echo $item['evento']->nombre ?></h5>
						<p class="card-text"><?php echo "Cantidad de tickets: " . $item['venta']->cant_tickets ?></p>
						<p class="card-text"><?php echo "Total: " . $item['venta']->total ?></p>
						<a href="<?php echo base_url('User_Cliente/mostrar_resumen/') . $item['venta']->id_venta?>"><button class="btn">Ver Resumen</button></a>
					 </div>
			  </div>
            <?php endforeach;?>
	<?php else: ?>
		<div class="card" style="width: 100%;">
			  <div class="card-body">
				<h5 class="card-title"> Sin Eventos....</h5>
				<p class="card-text">Parece que todavia no compraste eventos. Que te parece si compras algun evento que te guste?</p>
				<a href="<?php echo base_url('User_Cliente/show_eventos')?>" class="btn btn-primary">Aqui podras ver los eventos y shows disponibles para comprar! Disfruta!</a>
				
			  </div>
		</div>


    <?php endif;?>

</div>


