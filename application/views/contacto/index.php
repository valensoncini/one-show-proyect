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
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($contacts)):?>
                    <?php foreach($contacts as $contacto): ?>
                        <tr>
                        <th scope="row"><?php echo $contacto->id_contacto ?></th>
                        <td><?php echo $contacto->nombre_contacto ?></td>
                        <td><?php echo $contacto->email_contacto ?></td>
                        <td><?php echo $contacto->telefono_contacto ?></td>
                        <td>
                            <div class="d-flex ms-3 justify-content-evenly">
                                <a href="<?php echo base_url('Contacto/ver_contacto/') . $contacto->id_contacto; ?>"><button type="button" class="btn btn-secondary ">Ver</button></a>
                            </div>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center fs-5">No hay Consultas</td>
                    </tr>
                <?php endif; ?>
            </tbody>
            </table>
        </div>
</div>