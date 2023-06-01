
<script src="View/Recursos/js/funciones.js">

</script>
﻿<!DOCTYPE html>
<html lang="en">
    <?php include 'Modulo/style.php'; ?>
    <body>

        <!--*Preloader start*-->
        <?php include 'Modulo/preloader.php'; ?>
        <!--*Preloader end*-->

        <!--  Main wrapper start -->
        <div id="main-wrapper">

            <!--*Menu start*-->
            <?php include 'Modulo/menu.php'; ?>
            <!--*Menu end*-->
            
            <!--*Content body start*-->
            <div class="content-body">
                <div class="container-fluid" id='contenedor-main'> 
                    <?php
                    if (isset($_GET["ruta"])) {
                        switch ($_GET["ruta"]){
                            case "perfil-usuario":
                                include 'Usuario/Perfil.php';
                                break;
                            case "detalle-usuario":
                                include 'Usuario/Detalle.php';
                                break;
                        }
                        
                        
                    } else {
                        //include 'Producto/FindAll.php';
                    }
                   
                    ?>

                </div>
            </div>
            <!--*Content body end*-->

            <!--*Footer start*-->
            <?php include 'Modulo/footer.php'; ?>
            <!--*Footer end*-->         
        </div>
        <!--*Main wrapper end*-->

        <?php include 'Modulo/scripts.php'; ?>

    </body>
</html>