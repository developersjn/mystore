
<nav class="menu" id="menu">
    <div class="contenedor contenedor-botones-menu">
        <button id="btn-menu-barras" class="btn-menu-barras"><i class="fa fa-bars"></i></button>
        <button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fa fa-times"></i></button>
    </div>

    <div class="contenedor contenedor-enlaces-nav">
        <div class="btn-departamentos " id="btn-departamentos">
            <p><i class="fa fa-bars" aria-hidden="true"></i> <span>Categorias</span></p>
            <i class="icono-movil fa fa-caret-down"></i>

        </div>

        <div class="enlaces">
            <div class="header">
               
                <div class="botones-header">
                    <button><i class="fa fa-upload"></i></button>
                    <button><i class="fa fa-th"></i></button>
                    <button><i class="fa fa-bell"></i></button>
                    <a href="#" class="avatar"><img src="<?php echo RutaController::RutaView(); ?>images/avatar.jpg" alt=""></a>
                </div>
                <div class="enlaces-movil">
                    <a href="#">Mi Cuenta</a>
                    <a href="#">Mis Pedidos</a>
                    <a href="#">Mesa de Regalos</a>
                    <a href="#">Ayuda</a>
                </div>

            </div>
        </div>
    </div>

    <div class="contenedor contenedor-grid">
        <div class="grid" id="grid">
            <div class="categorias">
                <button class="btn-regresar"><i class="fa fa-arrow-left"></i> Regresar</button>
                <h3 class="subtitulo">Categorias</h3>

                <a href="#" data-categoria="tecnologia-y-computadoras">Construccion<i class="fa fa-angle-right"></i></a>
                <a href="#" data-categoria="libros">Salud <i class="fa fa-angle-right"></i></a>
            </div>

            <div class="contenedor-subcategorias">
                <div class="subcategoria " data-categoria="tecnologia-y-computadoras">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fa fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Muebles de Construccion</h3>
                        <a href="#">Elevador de Drywall</a>

                    </div>

                    <div class="banner-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>images/tecnologia-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>images/tecnologia-galeria-1.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>images/tecnologia-galeria-2.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>images/tecnologia-galeria-3.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>images/tecnologia-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="libros">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fa fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Muebles Medicos</h3>
                        <a href="#">Camilla Medica</a>

                    </div>

                    <div class="banner-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>images/libros-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>images/libros-galeria-1.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>images/libros-galeria-2.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>images/libros-galeria-3.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>images/libros-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>             
            </div>
        </div>
    </div>
</nav>
<br><br><br><br>


