<?php
    include 'header.php';
?>

    <div class="row secPrincipal">
        <div class="col-md-8">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/bgServicios.png" class="d-block w-100 imgCar" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-light" style="font-weight: bold;"><?php echo $primerMensajeCar ?></h3>
                            <p style="font-size: 20px; font-weight: bold; color:white;">"Aventuras épicas y experiencias de viaje auténticas en Perú para cualquier viajero que busque aventuras"</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/MacchuPicchu.png" class="d-block w-100 imgCar" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="segundoMensajeCar" style="font-weight: bold;"><?php echo $segundoMensajeCar ?></h3>
                            <p class="segundoMensajeCar" style="font-size: 20px; font-weight: bold;">"The MOUNTAINS are calling you. Be dazzled by the spectacular landscapes of the Peruvian Andes."</p>
                        </div>  
                    </div>
                    <div class="carousel-item">
                        <img src="img/paracas.png" class="d-block w-100 imgCar" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="tercerMensajeCar" style="font-weight: bold;"><?php echo $tercerMensajeCar ?></h3>
                            <p class="tercerMensajeCar" style="font-size: 20px; font-weight: bold;">"You can't buy happiness, but you can buy a plane ticket to Peru."</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-4 secSec2">
            <br>
            <div class="row">
                <br>
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <div class="card text-bg-primary">
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: bold;">Los mejores servicios</h3>
                            <p class="card-text">Disfrute de nuestros seleccionados Tours Cortos, Machu Picchu Tours y Viajes Largos con la mejor tripulación. Haz clic en los botones y explora Perú de una manera divertida y auténtica.
                            </p>
                            <a href="/servicios.php" class="btn btn-warning">Servicios</a>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="col-sm-12">
                    <br>
                    <div class="card text-bg-danger">
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: bold;">Contactenos</h3>
                            <p class="card-text">Realice sus pedidos.
                                                Síguenos en nuestras redes sociales!!
                                                Preguntas Frecuentes? El equipo de soporte le atendera con gusto
                            </p>
                            <a href="/contactenos.php" class="btn btn-warning">Contactenos</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include 'footer.php';
?>