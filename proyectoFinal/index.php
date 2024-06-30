<?php
?>

<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Inicio | Programa de tutorías ESCOM</title>
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
                    <li><a href="views/inicioSesionAlum.php" class="nav-link px-2 text-secondary">Inicio de sesión</a></li>
                    <!--
                    <li><a href="" class="nav-link px-2 text-secondary">Acuse PDF</a></li>
                    -->
                </ul>
                <!--
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                -->
            </div>
        </header>

        <section>
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

        <section>
            <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imgs/5.jpg" class="d-block w-100" alt="carousel" title="carousel">
                        
                        <div class="carousel-caption">
                            <h5>Información <br> General</h5>
                            <a href="#mas_informacion" class="btn btn-primary mt-3" onclick="paginaUno();">Más Información</a>
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                        <img src="imgs/13.jpg" class="d-block w-100" alt="carousel" title="carousel">
                        
                        <div class="carousel-caption">
                            <h5>Tutorías<br> Impartidas</h5>
                            <a href="#tipo_tutoria" class="btn btn-primary mt-3" onclick="paginaUno();">Tipos de tutorías</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/registro.jpg" class="d-block w-100" alt="carousel" title="carousel">
                        <div class="carousel-caption">
                            <h5>Realiza tu <br>registro</h5>
                            <a href="views/formularioRegistro.php" class="btn btn-primary mt-3" onclick="paginaUno();">Completa tu registro</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/11.jpg" class="d-block w-100" alt="carousel" title="carousel">
                        <div class="carousel-caption">
                            <h5>Inicio de sesión <br> Administrador</h5>
                            <a href="views/inicioSesion.php" class="btn btn-primary mt-3" onclick="paginaUno();">Inicia sesión admin</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/10.jpg" class="d-block w-100" alt="carousel" title="carousel">
                        <div class="carousel-caption">
                            <h5>Inicio de sesión<br> Alumno</h5>
                            <a href="views/inicioSesionAlum.php" class="btn btn-primary mt-3" onclick="paginaUno();">Inicia sesión alumno</a>
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
        </section>
          

        <main id="mas_informacion"class="contenido-principal text-center">
            <section class="about ">
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
                                  planeación, organización, seguimiento y evaluación como los ejes rectores para él

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


          <section class=" section-spacing " >
              <h2 class="title-center">Misión y Visión</h2>
              <div class="container px-4 text-center">
                  <div class="row row-cols-1">
                      <div class="col">
                          <div class="p-3 contenido-bw"> 
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
                          <div class="p-3 contenido-bw">
                          <h3>Visión</h3>
                              <p>
                                  La Secretaría Académica con base en el Modelo Educativo Institucional, prevé la
                                  consolidación de las formas de atención individual y grupal en los niveles Medio
                                  Superior y Superior en sus diferentes modalidades, mediante tutorías y asesorías,
                                  integradas en los procesos formativos que acompañen a los alumnos durante su
                                  trayectoria escolar.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <section id="tipo_tutoria" class="container text-center">
            <div class="row row-cols-1 row-cols-md-2 g-4 container">
              <div class="col">
                <div class="card">
                  <img src="imgs/img_tutotia_individual.jpg" class="card-img-top custom-img-size" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Tutoría individual</h5>
                    <a href="#tutoria_individual" class="btn btn-outline-dark">Saber más...</a> 
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" >
                  <img src="imgs/tutoria_grupal.jpg" class="card-img-top custom-img-size" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Tutoría grupal</h5>
                    <a href="#tutoria_grupal" class="btn btn-outline-dark">Saber más...</a> 
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" >
                  <img src="imgs/img_tutoria_recuperacionacademica.jpg" class="card-img-top custom-img-size" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Tutoría de recuperación</h5>
                    <a href="#tutoria_recuperacion" class="btn btn-outline-dark">Saber más...</a>  
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" >
                  <img src="imgs/tutoria_regularizacion.jpg" class="card-img-top custom-img-size" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Tutoría de regularización</h5>
                    <a href="#tutoria_regularizacion" class="btn btn-outline-dark">Saber más...</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="imgs/tutoria_pares.jpg" class="card-img-top custom-img-size" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Tutoría de pares</h5>
                    <a href="#tutoria_pares" class="btn btn-outline-dark">Saber más...</a> 
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>

        <section id="tutoria_pares" class="container-md section-spacing">
        <h2>Tutoría entre pares</h2>
        <hr class=" border-primary border-3 opacity-75">
            <p>
                Esta actividad es desempeñada por alumnos de los Niveles Medio Superior o
                Superior con buen dominio en determinadas unidades de aprendizaje, las cuales,
                frecuentemente tienen alto índice de reprobación. La tutoría entre pares se realiza
                en un espacio y horario asignado, y la labor del alumno tutor es explicar los temas
                que no han sido comprendidos parcial o totalmente, apoyar con ejemplos y resolu-
                ción de problemas o ejercicios, en un ambiente de respeto y confianza, compartien-
                do estrategias de enseñanza que los jóvenes tutores han innovado y son de utilidad
                para que sus pares tengan mejor comprensión de las temáticas abordadas. Para el
                óptimo desarrollo de esta actividad es necesario que los alumnos tutores cuenten
                con el acompañamiento y coordinación de un docente tutor.
            </p>
            <h3>Actividades:</h3>
            <ol >
                <li >Elaborar junto con su tutor(a) la Estrategia para la Asesoría Académica (EAA).</li>
                <li >Implementar las acciones de asesoría de acuerdo con la EAA.</li>
                <li >Reportar oportunamente al tutor(a) y Coordinador del PAT de la UA los avan
                    ces e incidentes en la implementación del EAA.</li>
                <li >Elaborar y entregar puntualmente el informe de actividades.</li>
            </ol>
            <h3>Para la emisión de la constancia correspondiente es requisito
            indispensable:</h3>
            <ol >
                <li >Debe entregar informe de actividades al coordinador PAT.</li>
            </ol>
        </section>
        
        <section id="tutoria_individual" class="container-md  section-spacing contenido-bw section-padding">
            <h2>Tutoría individual</h2>
            <hr class=" border-primary border-3 opacity-75">
            <p>
            Es un acompañamiento académico, personal o ambos que se realiza a lo lar
            go del periodo escolar a petición de un alumno, quien ha identificado al tutor que
            puede apoyarlo en los temas de su interés.

            En este sentido la figura tutorial brinda orientación sobre los programas académi
            cos, trámites y servicios disponibles en el IPN y, si es el caso, canaliza a las depen
            dencias politécnicas que puedan brindar atención al alumnado en las problemáti
            cas identificadas, asumiendo el compromiso de generar un ambiente de respeto,confianza y escucha empática para abordar junto con el tutorado, temas como: Di
            ficultades académicas, técnicas de estudio, dudas relacionadas con su trayectoria
            académica, trámites, servicios, situaciones familiares, sociales o de salud.
            En esta actividad, por la carga de trabajo tutorial, solo podrán ser asignados hasta 10
            alumnos por periodo escolar.
            </p>
            <h3>Actividades:</h3>
            <ol >
                <li >Acude con el Coordinador del PAT para solicitar su registro como figura
                    tutorial.</li>
                <li >Recibe del titular de la Subdirección Académica su designación, así como la
                    lista de sus alumnos tutorados cada inicio de periodo.</li>
                <li >Elabora el Programa de Trabajo Tutorial (PTT) con base en el PAT de la Uni-
                    dad Académica, las necesidades y características de sus tutorados, el cual
                    deberá ser validado por la Coordinación del PAT.</li>
                <li >Implementa y da seguimiento al PTT e informa al Coordinador del PAT las
                    problemáticas encontradas, con el fin de realizar el acompañamiento con-
                    cerniente, con el propósito de llevar a cabo la intervención adecuada y la
                    canalización correspondiente.</li>
                <li >Asiste a las reuniones de trabajo convocadas por el Coordinador del PAT de
                    la UA.</li>
                <li >Vincula al alumnado con los servicios internos y externos que ofrece el IPN.</li>
                <li >Sugiere la trayectoria escolar con base en los resultados del periodo escolar
                    que concluye, durante las fechas establecidas para la reinscripción.</li>
                <li >Requisita en tiempo y forma en el Sistema de Administración del Programa
                    Institucional de Tutorías (SADPIT) las sesiones de atención de seguimiento,
                    así como las encuestas de autorreflexión.</li>
            </ol>
            <h3>Para la emisión de la constancia correspondiente es requisito
                indispensable:</h3>
            <ol >
                <li >Al menos 10 sesiones de atención por alumno reportadas en el SADPIT.</li>
                <li >Llenado del registro de la acción tutorial en el SADPIT por sesión.</li>
                <li >Encuesta de apreciación de la tutoría por parte de los alumnos.</li>
            </ol>

        </section>

        <section id="tutoria_grupal" class="container-md section-spacing">
            <h2>Tutoría grupal</h2>
            <hr class=" border-primary border-3 opacity-75">
            <p>
                Es la actividad de acompañamiento durante todo el periodo escolar, a un gru
                po validado y autorizado en la estructura académica, en cualquier modalidad y con
                tenido dentro de su carga académica. El docente apoya en el fortalecimiento del
                sentido de pertenencia institucional, difunde los derechos y obligaciones, conoce
                los programas y servicios de apoyo disponibles en su Unidad Académica y en el IPN;
                en su caso realiza la canalización correspondiente.
            </p>
            <h3>Actividades:</h3>
            <ol >
                <li >Acude a la Coordinación del PAT para solicitar su registro.</li>
                <li >Recibe de la Subdirección Académica su designación de tutoría grupal asig-
                    nado a su carga académica.
                </li>
                <li >Conoce el diagnóstico del grupo, elabora, implementa y da seguimiento al
                    PTT.
                </li>
                <li >Informa sobre incidencias a la Coordinación del PAT.</li>
                <li >Implementa, las acciones y materiales elaborados por la Unidad Académica
                    y la Coordinación del nivel correspondiente (DEMS, DES), con la intención de
                    informar y difundir aspectos relacionados con las cuatro áreas de interven
                    ción: pertenencia, trayectoria escolar, trámites y servicios, y canalización.
                </li>
                <li >Sugiere la carga académica ideal con base al conocimiento de cada alumno.</li>
                <li >Establece un espacio de intercambio con la Subdirección Académica, para
                    la toma de decisiones en aspectos relacionados con la trayectoria académi-
                    ca del estudiante.
                </li>
            </ol>
            <h3>Para la emisión de la constancia correspondiente es requisito
                indispensable:</h3>
            <ol >
                <li >Ingresa al SADPIT para el registro de acción tutorial por lo menos de 8 sesio
                    nes durante el periodo.
                </li>
                <li >Entrega del informe final de la tutoría a través del SADPIT.</li>
                <li >Contar con al menos el 70% de las evaluaciones de los alumnos a través del
                    SADPIT.
                </li>
                <li >Hacer entrega del Plan de Trabajo Tutorial a la Coordinación del PAT dentro
                    de los quince días naturales posterior a la asignación.
                </li>
            </ol>    

        </section>

        <section id="tutoria_recuperacion" class="container-md section-spacing contenido-bw">
            <h2>Tutoría de recuperación académica</h2>
            <hr class=" border-primary border-3 opacity-75">
            <p>
                Es la acción dirigida a grupos de alumnos con dictamen de la Comisión de
                Situación Escolar (COSIE), en riesgo de rezago, abandono o que han recursado una
                Unidad de Aprendizaje y no la acreditaron; así como de unidades de aprendizaje de
                programas en liquidación. Esta acción tiene la finalidad de regularizar la trayectoria
                escolar de los alumnos. La tutoría debe contar con la aprobación de la Academia, el
                visto bueno del titular de la Unidad Académica y estar autorizada por la Dirección
                de Coordinación correspondiente.
            </p>
            <h3>Actividades:</h3>
            <ol >
                <li >Asiste a la Reunión de Academia para definir las acciones a realizar.</li>
                <li >Recibe del subdirector académico su designación con base en los acuerdos
                    de la Academia.</li>
                <li >Elabora el PTT de recuperación académica y entrega al coordinador del PAT
                    dentro de los 15 días naturales posterior a la asignación.</li>
                <li >Realiza las acciones de recuperación con base en el PTT y reporta oportuna-
                    mente el desempeño y las incidencias del grupo durante su implementación.</li>
                <li >Elabora y entrega puntualmente al Coordinador del PAT los resultados de la
                    actividad.</li>
            </ol>
            <h3>Para la emisión de la constancia correspondiente es requisito
                indispensable:</h3>
        
            <p>
            Las Direcciones de Coordinación (DES y DEMS), bajo la coordinación de la Secre
            taría Académica definieron la propuesta de procedimientos para las acciones de
            recuperación académica por tutorías quedando de la siguiente manera:
        
            La Unidad Académica enviará mediante oficio la solicitud de acciones de recupe
            ración por tutoría a la Dirección de Coordinación correspondiente a más tardar la
            cuarta semana de inicio del periodo con la siguiente información:
            </p>
        
            <ol >
                <li >Acuerdo(s) de Academia</li>
                <li >Nombre del tutor o tutora</li>
                <li >Programa Académico</li>
                <li >Unidad de aprendizaje</li>
                <li >Fecha de inicio</li>
                <li >Salón</li>
                <li >Horario</li>
            </ol>
            
            <p>De no existir observaciones, la Dirección de Coordinación autoriza mediante oficio
                las acciones de recuperación solicitando lo siguiente:</p>
        
            <ol >
                <li >La Unidad Académica tendrá 15 días naturales posteriores a la autorización,
                    para enviar a la Dirección de Coordinación correspondiente el Plan de Tra
                    bajo Tutorial (PTT) con la finalidad de realizar el registro y seguimiento opor
                    tuno. En caso de no entregar el PTT solicitado se cancelará dicha solicitud.
                </li>
                <li >La duración de los cursos será entre el 60 y 70 por ciento del tiempo total de
                    las horas del programa.
                </li>
                <li >Las Direcciones de Coordinación realizaran por lo menos tres visitas de se-
                    guimiento a las Unidades Académicas.
                </li>
                <li >Una vez concluida las acciones de recuperación, la Unidad Académica envia
                    rá a la Dirección de Coordinación correspondiente el informe de resultados
                    dentro de los 15 días naturales posteriores al término de la actividad tutorial.
                </li>
            </ol>    
        </section>

        <section id="tutoria_regularizacion" class="container-md section-spacing">
            <h2>Tutoría regularización</h2>
            <hr class=" border-primary border-3 opacity-75">
            <p>
                Es la acción dirigida a un grupo de alumnos que requieren reafirmar conoci
                mientos, que no hayan acreditado su unidad de aprendizaje, por temas específicos
                de difícil comprensión o para mejorar el rendimiento académico en una Unidad de
                Aprendizaje.
            </p>
            <h3>Actividades:</h3>
            <ol >
                <li >Elabora el Programa de Trabajo Tutorial (PTT) con base en las necesidades y
                    características de los alumnos tutorados y el PAT de la Unidad Académica,
                    dentro de los 15 días naturales posteriores a la asignación.</li>
                <li >Da seguimiento al Programa de Trabajo Tutorial (PTT) e informa oportuna
                    mente sobre incidencias al Coordinador del PAT de la UA.</li>
                <li >Asiste a las reuniones de trabajo convocadas por el Coordinador del PAT.</li>
                <li >Elaborar el informe semestral al Coordinador del PAT.</li>
            </ol>
            <h3>Para la emisión de la constancia correspondiente es requisito
                indispensable:</h3>
            <ol >
                <li >Entregar el informe semestral de la tutoría de regularización y llenar la auto
                    rreflexión de la tutoría a través del SADPIT.</li>
                <li >Evaluación por parte de los alumnos.</li>
            </ol>
        </section>
        
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