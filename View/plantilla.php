<!DOCTYPE html>
<html lang="en">
    <!--start Style-->
    <?php include 'Modulo/Style.php' ?>
    <!--end Style-->

    <body>
        <?php include 'Modulo/menu.php'; ?>

        <!-- product section start --> 
        <?php
        $url=array();
        if (isset($_GET['ruta'])) {
            $url= explode("/", $_GET['ruta']);            
            switch ($url[0]){
                case "producto":
                    include 'Producto/Find.php';
                    break;
                default :
                    include 'Home/Home.php';
            }
            
        } else {
            include 'Home/Home.php';
        }
        ?>

        <!-- product section end -->
        <!-- about section start -->

        <!-- about section end -->
        <!-- client section slider start -->

        <!-- client section slider end -->
        <!-- news section start -->

        <!-- news section end -->
        <!-- contact section start -->

        <!-- contact section end -->        
        <!-- footer section start -->
        <?php include 'Modulo/footer.php' ?>
        <!-- footer section end -->   
        <!-- Scripts section start -->
        <?php include 'Modulo/Scripts.php' ?>
        <!-- Scripts section end --> 
    </body>
</html>