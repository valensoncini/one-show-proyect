<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>


<h1 class="text-center">Ventas</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
            <thead  class="table-light">
                <tr>
                <th scope="col">#id</th>
                <th scope="col">#id cliente</th>
                <th scope="col">#id espectaculo</th>
                <th scope="col">fecha</th>
                <th scope="col">cantidad tickets</th>
                <th scope="col">total</th>
                <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($ventas)):?>
                    <?php foreach($ventas as $venta): ?>
                        <tr>
                        <th scope="row"><?php echo $venta->id_venta ?></th>
                        <td><?php echo $venta->fk_id_cliente ?></td>
                        <td><?php echo $venta->fk_id_evento ?></td>
                        <td><?php echo $venta->fecha ?></td>
                        <td><?php echo $venta->cant_tickets ?></td>
                        <td><?php echo $venta->total ?></td>
                        <td>
                            <div class="d-flex ms-3 justify-content-evenly">
                                <a href="<?php echo base_url('Ventas/ver_venta/') . $venta->id_venta; ?>"><button type="button" class="btn btn-warning ">Ver</button></a>
                                <a href="<?php echo base_url('Ventas/vista_actualizar/') . $venta->id_venta; ?>"><button type="button" class="btn btn-primary">Editar</button></a>
                            </div>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center fs-5">No hay Ventas</td>
                    </tr>
                <?php endif; ?>
            </tbody>
            </table>
        </div>