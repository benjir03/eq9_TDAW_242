<?php

session_start();

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
    <head>
        <!---->
        <meta charset="UTF-8">
        <title>welcome</title>
        <meta name="author" content="T9">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../styles/styles.css" rel="stylesheet">
    </head>

    <body>
        <!-- NAV VAR-->
        <header class="p-3 text-bg-dark text-bg-light">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="index.html" class="nav-brand headerImg"><img src="../src/escudoIPN.png" alt="Logo IPN" title="Logo IPN" class="headerImg"></a>
                    <a href="index.html" class="nav-brand headerImg"><img src="../src/escudoESCOM.png" alt="Logo ESCOM" title="Logo ESCOM" class="headerImg"></a>
        
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="../views/index.html" class="nav-link px-2 text-secondary">Inicio</a></li>
                        <li><a href="../views/registro.html" class="nav-link px-2 text-secondary">Registro</a></li>
                        <li><a href="../views/adm.html" class="nav-link px-2 text-white">Admin</a></li>
                        <li><a href="../views/generarPDF.html" class="nav-link px-2 text-secondary">Generar PDF</a></li>
                    </ul>
                    
                    <!-- BUTTON sin acción
                    <div class="text-end">
                        <button type="button" class="btn btn-outline-light me-2">Admin</button>
                    </div>
                    -->

                </div>

            </div>
        </header>

        <main style="background-color: green;">
            <h1>Bienvenido <?php echo $username;?></h1>
        </main>
    </body>
</html>