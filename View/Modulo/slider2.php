<main class="contenedor">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo RutaController::RutaView(); ?>img/slider/slider1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo RutaController::RutaView(); ?>img/slider/slider2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo RutaController::RutaView(); ?>img/slider/slider3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>  
    <br>
    <div class="carousel">
        <div class="carousel__contenedor">
            <button aria-label="Anterior" class="carousel__anterior">
                <i class="fa fa-chevron-left"></i>
            </button>

            <div class="carousel__lista">
                <div class="carousel__elemento">                            
                    <a href="google.com">
                        <img src="<?php echo RutaController::RutaView(); ?>img/belleza-banner-1.png" alt="belleza">
                        <div>
                            <p style="color: black">prueba</p>
                        </div>
                    </a>
                </div>

                <div class="carousel__elemento">
                    <img src="<?php echo RutaController::RutaView(); ?>img/slider2/2.png" alt="Constitution Square - Tower I">
                    <p>Constitution Square - Tower I</p>
                </div>
                <div class="carousel__elemento">
                    <img src="<?php echo RutaController::RutaView(); ?>img/slider2/3.png" alt="Empire State Building">
                    <p>Empire State Building</p>
                </div>
                <div class="carousel__elemento">
                    <img src="<?php echo RutaController::RutaView(); ?>img/slider2/4.png" alt="Harmony Tower">
                    <p>Harmony Tower</p>
                </div>

                <div class="carousel__elemento">
                    <img src="<?php echo RutaController::RutaView(); ?>img/slider2/5.png" alt="Empire State Building">
                    <p>Empire State Building</p>
                </div>
                <div class="carousel__elemento">
                    <img src="<?php echo RutaController::RutaView(); ?>img/slider2/6.png" alt="Harmony Tower">
                    <p>Harmony Tower</p>
                </div>
                <div class="carousel__elemento">
                    <img src="<?php echo RutaController::RutaView(); ?>img/slider2/7.png" alt="Empire State Building">
                    <p>Empire State Building</p>
                </div>
                <div class="carousel__elemento">
                    <img src="<?php echo RutaController::RutaView(); ?>img/slider2/8.png" alt="Harmony Tower">
                    <p>Harmony Tower</p>
                </div>
            </div>

            <button aria-label="Siguiente" class="carousel__siguiente">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>

        <div role="tablist" class="carousel__indicadores"></div>
    </div>
</main>
