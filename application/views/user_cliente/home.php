<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
    <title>Bienvenido</title>
</head>
<body>
    <div class="contenedor">

        <header class="header-nav">
            <?php $this->load->view('includes/header_cliente');?>
        </header>
        <?php $this->load->view($path);?>
        <footer class="footer">
            <?php $this->load->view('includes/footer_cliente');?>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
    <script src="https://kit.fontawesome.com/55b869ce03.js" crossorigin="anonymous"></script>
</body>
</html>