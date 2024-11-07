<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css')?>">
    <title>Admin Dashboard</title>
</head>
<body>
    
    <h1 class="text-center" >Bienvenido Admin</h1>
    <section>
        <ul>
            <li><a href="<?php echo base_url('Eventos/index'); ?>">Ver Eventos</a></li>
            <li><a href="<?php echo base_url('Clientes/index'); ?>">Ver Clientes</a></li>
            <li><a href="<?php echo base_url('Ventas/index'); ?>">Ver Ventas</a></li>
        </ul>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>