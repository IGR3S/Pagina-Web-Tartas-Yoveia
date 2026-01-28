<?php
    include_once('datos.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tartas Yoveia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" href="static/img/faviconPasteleriaResize.png">
    <link rel ="stylesheet" href="static/css/headFoot_A.css">
    <?php
        if(isset($css)){
            if($css == "inicio"){
                ?>
                    <link rel="stylesheet" href="static/css/inicio_A.css">
                <?php
            }else if($css == "inventario"){
                ?>
                    <link rel="stylesheet" href="static/css/inventario_A.css">
                <?php
            }else if($css == "contacto"){
                ?>
                    <link rel="stylesheet" href="static/css/contacto_A.css">
                <?php
            }else if($css == "footer"){
                ?>
                    <link rel="stylesheet" href="static/css/headFoot_A.css">
                <?php
            }
        }

    ?>
</head>
<body>
    <header>
        <div class = "centro">            
            <a href="inicio.php"><img class="logo" src="static/img/LogoPasteleria.png" alt="" height="120px"></a>
        <ul>
            <li><a href="inicio.php">INICIO</a></li>
            <li><a href="inventario.php">TARTAS</a></li>
            <li><a href="contacto.php">CONTACTO</a></li>
            <li><a href="sesion.php"><i class="fa-solid fa-right-to-bracket"></i></a></li>
        </ul>
        </div>
    </header>