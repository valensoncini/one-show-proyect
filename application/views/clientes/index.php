<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>


<h1 class="text-center">Clientes</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
            <thead  class="table-light">
                <tr>
                <th scope="col">#id</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Identificacion</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Estado</th>
                <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($clientes)):?>
                    <?php foreach($clientes as $client): ?>
                        <tr>
                        <th scope="row"><?php echo $client->id_cliente ?></th>
                        <td><?php echo $client->nombre_completo ?></td>
                        <td><?php echo $client->identificacion ?></td>
                        <td><?php echo $client->email ?></td>
                        <td><?php echo $client->telefono ?></td>
                        <td><?php echo $client->estado ?></td>
                        <td>
                            <div class="d-flex ms-3 justify-content-evenly">
                                <a href="<?php echo base_url('Clientes/ver_cliente/') . $client->id_cliente; ?>"><button type="button" class="btn btn-warning ">Ver</button></a>
                                <a href="<?php echo base_url('Clientes/vista_actualizar/') . $client->id_cliente; ?>"><button type="button" class="btn btn-primary">Editar</button></a>
                                </div>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center fs-5">No hay Clientes</td>
                    </tr>
                <?php endif; ?>
            </tbody>
            </table>
        </div>