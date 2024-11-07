<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="eventos-container">
    <h1 class="text-center">EVENTOS</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
            <thead  class="table-light">
                <tr>
                <th scope="col">#id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Disponibilidad</th>
                <th scope="col">Fecha</th>
                <th scope="col">Estado</th>
                <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($eventos)):?>
                    <?php foreach($eventos as $eve): ?>
                        <tr>
                        <th scope="row"><?php echo $eve->idEvento ?></th>
                        <td><?php echo $eve->nombre ?></td>
                        <td><?php echo $eve->precio ?></td>
                        <td><?php echo $eve->disponibilidad ?></td>
                        <td><?php echo $eve->fecha ?></td>
                        <td><?php echo $eve->estado ?></td>
                        <td>
                            <div class="d-flex ms-3 justify-content-evenly">
                                <a href="<?php echo base_url('Eventos/ver_evento/') . $eve->idEvento; ?>"><button type="button" class="btn btn-warning ">Ver</button></a>
                                <a href="<?php echo base_url('Eventos/actualizar/') . $eve->idEvento; ?>"><button type="button" class="btn btn-primary">Editar</button></a>
                            </div>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center fs-5">No hay Eventos</td>
                    </tr>
                <?php endif; ?>
            </tbody>
            </table>
        </div>
</div>