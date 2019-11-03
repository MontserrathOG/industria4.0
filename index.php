<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Industria 4.0</title>    
        <?php include("componentes/enlaces.php"); ?>
    </head>
    <body>
        <div>
            <div class="">
                <?php
                include("vistas/navbar.php");
                ?>
            </div>
            <div class="d-flex justify-content-lg-start">
                <div><!--parte izquierdo-->
                    <?php
                    include('vistas/panelIzquierdo.php');
                    ?>
                </div>
                <div><!--parte central-->
                    <?php
                    include('vistas/panelCentral.php');
                    ?>
                </div>
                <div><!--parte Derecha-->
                    <?php
                    include('vistas/panelDerecho.php');
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>