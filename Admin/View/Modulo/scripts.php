<!-- Required vendors -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?php echo RutaController::getRutaRecursos(); ?>vendor/global/global.min.js"></script>
<script src="<?php echo RutaController::getRutaRecursos(); ?>vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo RutaController::getRutaRecursos(); ?>vendor/chart.js/Chart.bundle.min.js"></script>

<!-- Chart piety plugin files -->
<script src="<?php echo RutaController::getRutaRecursos(); ?>vendor/peity/jquery.peity.min.js"></script>

<!-- Apex Chart -->
<script src="<?php echo RutaController::getRutaRecursos(); ?>vendor/apexchart/apexchart.js"></script>

<!-- Dashboard 1 -->
<script src="<?php echo RutaController::getRutaRecursos(); ?>js/dashboard/dashboard-1.js"></script>

<!-- Datatable -->
<script src="<?php echo RutaController::getRutaRecursos(); ?>vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo RutaController::getRutaRecursos(); ?>js/plugins-init/datatables.init.js"></script>

<script src="<?php echo RutaController::getRutaRecursos(); ?>vendor/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo RutaController::getRutaRecursos(); ?>js/custom.min.js"></script>
<script src="<?php echo RutaController::getRutaRecursos(); ?>js/deznav-init.js"></script>
<script src="<?php echo RutaController::getRutaRecursos(); ?>js/demo.js"></script>
<script src="<?php echo RutaController::getRutaRecursos(); ?>js/styleSwitcher.js"></script>
<script>
    jQuery(document).ready(function () {
        setTimeout(function () {
            dezSettingsOptions.version = 'dark';
            new dezSettings(dezSettingsOptions);
        }, 1500);
    });
</script>