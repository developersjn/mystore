<?php
$objProductoController = new ProductoController();
$listaProductos = $objProductoController->FindAll();
?>

<?php for ($i = 0; $i < count($listaProductos); $i++) { ?>
    <div class="cycle_section_2 layout_padding">
        <div class="row">
            <div class="col-md-6">
                <div class="box_main">
                    <div class="image_2"><img src="<?php echo RutaController::getRutaAdmin() . $listaProductos[$i]->getImagenPortada(); ?>"></div>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="cycles_text"> <?php echo $listaProductos[$i]->getNombre(); ?></h1>
                <p class="lorem_text"><?php echo $listaProductos[$i]->getDescripcion(); ?></p>
                <div class="btn_main">
                    <div class="buy_bt"><a href="producto/<?php echo $listaProductos[$i]->getIdProducto(); ?>">Ver Producto</a></div>
                    <h4 class="price_text">Precio <span style=" color: #f7c17b">S/</span> <span style=" color: #325662"><?php echo $listaProductos[$i]->getPrecio(); ?></span></h4>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
