<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina de inicio</title>
        <?php
            include('componentes/enlaces.php');
        ?>
    </head>
    <body>
        <div>
            <?php
                include('vistas/navbar.php');
            ?>
        </div>
        <div align="center">
            <img src="componentes/produccion.jpg" width="300" height="500">
        </div>
        <div>
            <div>
                <?php
                    include('vistas/estadoProduccion.php');
                ?>
            </div>
        </div>
    </body>
</html>