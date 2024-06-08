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

        <div class= "text-center text-bg-dark">
                <div class="row">
                  <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-backpack" width="68" height="68" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 18v-6a6 6 0 0 1 6 -6h2a6 6 0 0 1 6 6v6a3 3 0 0 1 -3 3h-8a3 3 0 0 1 -3 -3z" />
                        <path d="M10 6v-1a2 2 0 1 1 4 0v1" />
                        <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                        <path d="M11 10h2" />
                      </svg>
                    <p>Escolarizada</p>
                  </div>
                  <div class="col">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-laptop" width="68" height="68" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 19l18 0" />
                    <path d="M5 6m0 1a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v8a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1z" />
                  </svg>
                  <p>No escolarizada</p>   
                  </div>
                  <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book-download" width="68" height="68" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 20h-6a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12v5" />
                        <path d="M13 16h-7a2 2 0 0 0 -2 2" />
                        <path d="M15 19l3 3l3 -3" />
                        <path d="M18 22v-9" />
                      </svg>
                    <p>Mixta</p>
                  </div>
                </div>
              </div>
        </section>

        <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselE" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselE" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        
          <section class="contenido-principal">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-4 col-md-12 col-12">
                          <div class="about-img">
                              <br><br><img src="imgs/about.png" class="img-fluid" alt="">
                          </div>
                      </div>
                      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                          <div class="about-text text-white">
                            <h2>Objetivo general</h2>
                              <p>Guiar las acciones tutoriales en las Unidades Académicas; así como considerar la
                                  planeación, organización, seguimiento y evaluación como los ejes rectores para el

                                  planteamiento de acciones de alto impacto, que incidan en el proceso de acompañamiento
                                  de tipo académico y personal del alumno, contribuyendo en su formación
                                  integral durante su trayectoria escolar, orientado a fortalecer tanto el aprendizaje
                                  como el desarrollo de valores, actitudes, hábitos y habilidades, mejorando al mismo
                                  tiempo, la práctica docente.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>


          <section class=" section-spacing contenido-principal" >
              <h2 class="title-center">Misión y Visión</h2>
              <div class="container px-4 text-center">
                  <div class="row gx-5">
                      <div class="col">
                          <div class="p-3 contenido-vm"> 
                          <h3>Misión</h3>
                              <p>La Secretaría Académica tiene el propósito de proponer, implantar y evaluar las políticas que organizan
                                  el proceso de acompañamiento de tipo personal y académico
                                  a los alumnos de los niveles Medio Superior y Superior  para contribuir
                                  en su formación integral,
                                  durante su trayectoria escolar.
                              </p>
                          </div>
                      </div>
                      <div class="col">
                          <div class="p-3 contenido-vm">
                          <h3>Visión</h3>
                              <p>
                                  La Secretaría Académica con base en el Modelo Educativo Institucional, prevé la
                                  consolidación de las formas de atención individual y grupal en los niveles Medio
                                  Superior y Superior en sus diferentes modalidades, mediante tutorías y asesorías,
                                  integradas en los procesos formativos que acompañen a los alumnos durante su
                                  trayectoria escolar
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

        <main class="contenido-principal">

          <div class="row row-cols-1 row-cols-md-2 g-4 container">
            <div class="col">
              <div class="card" id="individual">
                <img src="../src/img_tutoria_individual.png" class="card-img-top custom-img-size" alt="...">
                <div class="card-body">
                <a href="tutoria individual.html" class="btn btn-outline-dark">Tutoría individual</a> 
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" id="grupal">
                <img src="../src/img_tutotia_grupal.png" class="card-img-top custom-img-size" alt="...">
                <div class="card-body">
                  <a href="tutoria_grupal.html" class="btn btn-outline-dark">Tutoria de grupal</a> 
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" id="recuper">
                <img src="../src/img_tutoria_recuperacionacademica.png" class="card-img-top custom-img-size" alt="...">
                <div class="card-body">
                  <a href="tutoria_recuperacion.html" class="btn btn-outline-dark">Tutoria de recuperacion</a>  
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" id="regular">
                <img src="../src/tutoria_regularizacion.png" class="card-img-top custom-img-size" alt="...">
                <div class="card-body">
                  <a href="tutoria_regularizacion.html" class="btn btn-outline-dark">Tutoria de regularizacion</a>             
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" id="pares">
                <img src="../src/img_tutoria_pares.png" class="card-img-top custom-img-size" alt="...">
                <div class="card-body">
                  <a href="tutoria_pares.html" class="btn btn-outline-dark">Tutoria entre pares</a>   
                </div>
              </div>
            </div>
          </div>
   
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