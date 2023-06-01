
<!--start menu principal-->
<script src="<?php echo RutaController::RutaView(); ?>Content/plugins/glider/js/glider.min.js"></script>
<script src="<?php echo RutaController::RutaView(); ?>Content/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo RutaController::RutaView(); ?>js/main.js"></script>
<script src="<?php echo RutaController::RutaView(); ?>js/app.js"></script>
<!--end menu principal-->
<!-- Javascript files-->
<script src="<?php echo RutaController::RutaView(); ?>js/jquery.min.js"></script>
<script src="<?php echo RutaController::RutaView(); ?>js/popper.min.js"></script>
<script src="<?php echo RutaController::RutaView(); ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo RutaController::RutaView(); ?>js/jquery-3.0.0.min.js"></script>
<script src="<?php echo RutaController::RutaView(); ?>js/plugin.js"></script>
<!-- sidebar -->
<script src="<?php echo RutaController::RutaView(); ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo RutaController::RutaView(); ?>js/custom.js"></script>
<!-- javascript --> 

<script src="<?php echo RutaController::RutaView(); ?>js/owl.carousel.min.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>



<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";

    }

    $("#main").click(function () {
        $("#navbarSupportedContent").toggleClass("nav-normal")
    })
</script>