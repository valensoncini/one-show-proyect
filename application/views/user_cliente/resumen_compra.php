<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
    <title><?php echo "RESUMEN COMPRA ". $venta->id_venta ?></title>
</head>
<body>
    <div class="container-fluid">
        <caption><?php echo $venta->id_venta;?></caption>
        <header class="resumen-header">
            <img src="<?php echo base_url('assets/imgs/logo-pagina.png'); ?>" alt="logo">
            <div>
                <h5>Resumen de compra</h5>
                <p><strong>finanzas_oneshow@hotmail.com</strong></p>
            </div>
        </header>
        <hr>

        <main>
            <h2>Resumen de tu compra</h2>
            <p><?php echo "Evento: " . $evento->nombre ?></p>
            <p><?php echo "Fecha: " . $evento->fecha ?></p>
            <p><?php echo "Lugar: " . $evento->lugar ?></p>
            <p><?php echo "Precio: " . $evento->precio ?></p>
            <p class="cant_tickets"><?php echo "Cantidad de tickets: " . $venta->cant_tickets ?></p>
            <p><?php echo "Total: " . $venta->total ?></p>

            <h3>Datos Comprador</h3>
            <p><?php echo "Nombre completo: " . $cliente->nombre_completo ?></p>
            <p><?php echo "Email: " . $cliente->email ?></p>
            <div class="alert alert-success" role="alert">
                PAGO CONFIRMADO
            </div>
        </main>

        <footer>
            <a href="<?php echo base_url();?>"><button class="btn btn-warning">Regresar al Home</button></a>
            <a href="<?php echo base_url('User_Cliente/mostrar_mis_entradas/' . $cliente->id_cliente);?>"><button class="btn btn-secondary">Ver mis entradas</button></a>
        </footer>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
    <script src="https://kit.fontawesome.com/55b869ce03.js" crossorigin="anonymous"></script>
</body>
</html>