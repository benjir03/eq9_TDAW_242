<?php
?>

<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>.:: Programa de tutorías ::.</title>
        <meta name="author" content="Equipo 9">
        
        <!-- S T Y L E S -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos/styles-index.css">
        
    </head>

    <body>
        <!-- HEADER -->
        <header class="p-3 text-bg-dark text-bg-light">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="index.php" class="nav-brand"><img src="imgs/escudoIPN.png" alt="Logo IPN" title="Logo IPN" class="headerImg"></a>
                <a href="index.php" class="nav-brand"><img src="imgs/escudoESCOM.png" alt="Logo ESCOM" title="Logo ESCOM" class="headerImg"></a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.html" class="nav-link px-2 text-white">Inicio</a></li>
                    <li><a href="views/formularioRegistro.php" class="nav-link px-2 text-secondary">Registro</a></li>
                    <li><a href="views/inicioSesion.php" class="nav-link px-2 text-secondary">Admin</a></li>
                    <li><a href="" class="nav-link px-2 text-secondary">Acuse PDF</a></li>
                </ul>
                <!--
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                -->
            </div>
        </header>

        <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
	    <div class="carousel-indicators">
	        <button type="button" data-bs-target="#carouselE" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	        <button type="button" data-bs-target="#carouselE" data-bs-slide-to="1" aria-current="false" aria-label="Slide 2"></button>
	        <button type="button" data-bs-target="#carouselE" data-bs-slide-to="2" aria-current="false" aria-label="Slide 3"></button>
	        <button type="button" data-bs-target="#carouselE" data-bs-slide-to="3" aria-current="false" aria-label="Slide 4"></button>
	        <button type="button" data-bs-target="#carouselE" data-bs-slide-to="4" aria-current="false" aria-label="Slide 5"></button>
	        <button type="button" data-bs-target="#carouselE" data-bs-slide-to="5" aria-current="false" aria-label="Slide 6"></button>
	        <button type="button" data-bs-target="#carouselE" data-bs-slide-to="6" aria-current="false" aria-label="Slide 7"></button>
	        <button type="button" data-bs-target="#carouselE" data-bs-slide-to="7" aria-current="false" aria-label="Slide 8"></button>
	    </div>
	    <div class="carousel-inner">
	        <div class="carousel-item active">
	            <img src="imgs/0.jpg" class="d-block w-100" alt="carousel" title="carousel">
	            <div class="carousel-caption">
	                <h5>Bienvenidos a la <br> Escuela Superior de Cómputo</h5>
	                <a href="#" class="btn btn-primary mt-3" onclick="paginaUno();">Más Información</a>
	            </div>
	        </div>
	        <div class="carousel-item">
	            <img src="imgs/1.jpg" class="d-block w-100" alt="carousel" title="carousel">
	            <div class="carousel-caption">
	                <h5>Bienvenidos a la <br> Escuela Superior de Cómputo</h5>
	                <a href="#" class="btn btn-primary mt-3" onclick="paginaUno();">Más Información</a>
	            </div>
	        </div>
	        <div class="carousel-item">
	            <img src="imgs/2.jpg" class="d-block w-100" alt="carousel" title="carousel">
	            <div class="carousel-caption">
	                <h5>Bienvenidos a la <br> Escuela Superior de Cómputo</h5>
	                <a href="#" class="btn btn-primary mt-3" onclick="paginaUno();">Más Información</a>
	            </div>
	        </div>
	        <div class="carousel-item">
	            <img src="imgs/3.jpg" class="d-block w-100" alt="carousel" title="carousel">
	            <div class="carousel-caption">
	                <h5>Bienvenidos a la <br> Escuela Superior de Cómputo</h5>
	                <a href="#" class="btn btn-primary mt-3" onclick="paginaUno();">Mas Información</a>
	            </div>
	        </div>
	        <div class="carousel-item">
	            <img src="imgs/4.jpg" class="d-block w-100" alt="carousel" title="carousel">
	            <div class="carousel-caption">
	                <h5>Bienvenidos a la <br> Escuela Superior de Cómputo</h5>
	                <a href="#" class="btn btn-primary mt-3" onclick="paginaUno();">Mas Información</a>
	            </div>
	        </div>
	        <div class="carousel-item">
	            <img src="imgs/5.jpg" class="d-block w-100" alt="carousel" title="carousel">
	            <div class="carousel-caption">
	                <h5>Bienvenidos a la <br> Escuela Superior de Cómputo</h5>
	                <a href="#" class="btn btn-primary mt-3" onclick="paginaUno();">Mas Información</a>
	            </div>
	        </div>
	        <div class="carousel-item">
	            <img src="imgs/6.jpg" class="d-block w-100" alt="carousel" title="carousel">
	            <div class="carousel-caption">
	                <h5>Bienvenidos a la <br> Escuela Superior de Cómputo</h5>
	                <a href="#" class="btn btn-primary mt-3" onclick="paginaUno();">Mas Información</a>
	            </div>
	        </div>
	        <div class="carousel-item">
	            <img src="imgs/7.jpg" class="d-block w-100" alt="carousel" title="carousel">
	            <div class="carousel-caption">
	                <h5>Bienvenidos a la <br> Escuela Superior de Cómputo</h5>
	                <a href="#" class="btn btn-primary mt-3" onclick="paginaUno();">Mas Información</a>
	            </div>
	        </div>
	    </div>
	    <button class = "carousel-control-prev" type="button" data-bs-target = "#carouselE" data-bs-slide = "prev"><span class="carousel-control-prev-icon" aria-hidden = "true"></span><span class = "visually-hidden">Previous</span></button>

	    <button class = "carousel-control-next" type="button" data-bs-target = "#carouselE" data-bs-slide = "next"><span class="carousel-control-next-icon" aria-hidden = "true"></span><span class = "visually-hidden">Next</span></button>
	    </div>

        <!-- MAIN -->
        <main>
            <p>Esta no es una prueba</p>
        </main>

        <!-- FOOTER -->
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <span class="text-body-secondary ps-3">&copy; 2024, TDAW - Equipo 9</span>
            <a class="text-body-secondary pe-3" href="https://www.escom.ipn.mx/">escom.ipn.mx</a>
        </footer>

        <!-- S C R I P T S -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>