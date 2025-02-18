<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <title>Planilla de Pagos</title>
  <!-- FUENTES-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="../css/estilo.css" rel="stylesheet">
  <link href="../css/style1.css" rel="stylesheet">
  <link href="../css/style2.0.css" rel="stylesheet">
  <link rel="icon" href="../img/Moneda.png">
</head>

<body id="page-top">

  <?php
  $Usuario = $_GET['idUsuario'];
  $Empresa = $_GET['Empresas_idEmpresas'];

  include '../SqlTools/database.php';
  $auxiliar = new database();
  $auxiliar->select('usuarios', 'Usuario', "idUsuario = '$Usuario'");
  $nombre = $auxiliar->sql;
  $name = mysqli_fetch_assoc($nombre); ?>

  <div id="wrapper">
    <!-- Envoltura de página -->

    <?php include "../SqlTools/serviceMenu.php"; ?>

    <!--============================Intro Section============================-->
    <div class="contex">
      <section id="intro" class="clearfix">
        <div class="container">

          <div class="intro-img">
            <img src="../img/imgi/intro-img.svg" alt="" class="img-fluid">
          </div>

          <div class="intro-info">
            <h2>Bienvenido a <br><span>COPAP</span><br>¿Listo para comenzar?</h2>
            <div>
              <a href="#services" class="btn-services scrollto">Servicios</a>
              <a href="#portfolio" class="btn-services scrollto">Galería</a>
              <a href="../Manual-del-Usuario.html" target="_blank" class=" btn-services scrollto"">Manual</a>
                </div>
              </div>

                </div>
          </section><!-- #intro -->

          <!-- #intro -->
          <main id=" main">
                <!--OPCIONES-->
                <section id="services" class="section-bg">
                  <div class="container">

                    <header class="section-header">
                      <h3>¿Necesitas ayuda para usar COPAP?</h3>
                      <p>Conoce más sobre </p>
                      <p></p>
                    </header>
                    <br></br>
                    <br></br>
                    <div class="row">

                      <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                          <div class="icon"><i class="ion-ios-paper-outline" style="color: #c5793ae0;;"></i></div>
                          <h4 class="title"><a href="../Planilla/historialPlanillas.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>">Planillas
                              de pago</a></h4>
                          <p class="description"> Accede al registro almacenado de tus planillas de pago. </p>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                          <div class="icon"><i class="ion-ios-paper-outline" style="color: #e9bf06;"></i></div>
                          <h4 class="title"><a href="../Planilla/creacionPlanilla.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>">Crear
                              Nueva Planilla</a></h4>
                          <p class="description">Generar una nueva planilla de pago es mucho más fácil de lo que te
                            imaginas
                          </p>
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                          <div class="icon"><i class="ion-man" style="color: #c5793ae0;"></i></div>
                          <h4 class="title"><a href="../Empleados/tablas.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>">Empleados</a>
                          </h4>
                          <p class="description">Accede al registro de tus empleados de forma, fácil, rápida y sobre
                            todo
                            eficiente</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                          <div class="icon"><i class="ion-woman" style="color:#c5793ae0;"></i></div>
                          <h4 class="title"><a href="../Empleados/crearEmpleado.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>">Agregar
                              un Nuevo Empleado</a></h4>
                          <p class="description">¡Tu compañía cada día crece más! Ingresa la información del nuevo
                            integrante de tu grupo de empleados</p>
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                          <div class="icon"><i class="ion-more" style="color: #c5793ae0;"></i></div>
                          <h4 class="title"><a href="../Cargos/TablaCargos.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>">Cargos</a>
                          </h4>
                          <p class="description">Accede a la información de los distintos cargos con los que cuenta
                            tu
                            empresa</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                          <div class="icon"><i class="ion-location" style="color: #c5793ae0;"></i></div>
                          <h4 class="title"><a href="../Ciudades/TablaCiudades.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>">Ciudades</a>
                          </h4>
                          <p class="description">Tu empresa genera funtes de ingresos para familias de Honduras,
                            explora las
                            diferentes ciudades a las que pertenecen tus empleados</p>
                        </div>
                      </div>

                    </div>

                  </div>
                </section><!-- #services -->
                <!--Portafolio de Infografias-->
                <section id="portfolio" class="clearfix">
                  <div class="container">

                    <header class="section-header">
                      <h3 class="section-title">Galería de Infografías</h3>
                    </header>

                    <div class="row">
                      <div class="col-lg-12">
                        <ul id="portfolio-flters">
                          <li data-filter="*" class="filter-active">Todo</li>
                          <li data-filter=".filter-plantilla">Planillas</li>
                          <li data-filter=".filter-empleados">Empleados</li>
                          <li data-filter=".filter-contraseña">Recuperar Contraseña</li>
                        </ul>
                      </div>
                    </div>

                    <div class="row portfolio-container">

                      <div class="col-lg-4 col-md-6 portfolio-item filter-plantilla">
                        <div class="portfolio-wrap">
                          <img src="../img/imgi/portfolio/P1.jpeg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Crear una nueva planilla 1</h4>
                            <p>Ver</p>
                            <div>
                              <a href="../img/imgi/portfolio/planilla1.png" data-lightbox="portfolio" data-title="COPAP" class="link-preview" title="COPAP"><i class="ion ion-eye"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-plantilla" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                          <img src="../img/imgi/portfolio/P2.jpeg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Crear una nueva planilla 2</h4>
                            <p>Ver</p>
                            <div>
                              <a href="../img/imgi/portfolio/planilla2.png" class="link-preview" data-lightbox="portfolio" data-title="COPAP" title="COPAP"><i class="ion ion-eye"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-plantilla" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                          <img src="../img/imgi/portfolio/M1.png" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Razones para usar COPAP</h4>
                            <p>Ver</p>
                            <div>
                              <a href="../img/imgi/portfolio/planillas4.png" class="link-preview" data-lightbox="portfolio" data-title="COPAP" title="COPAP"><i class="ion ion-eye"></i></a>

                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-plantilla">
                        <div class="portfolio-wrap">
                          <img src="../img/imgi/portfolio/P3.jpeg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Crear una nueva planilla 3</h4>
                            <p>Ver</p>
                            <div>
                              <a href="../img/imgi/portfolio/planilla3.png" class="link-preview" data-lightbox="portfolio" data-title="COPAP" title="COPAP"><i class="ion ion-eye"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-empleados" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                          <img src="../img/imgi/portfolio/anexo2.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Agregar un nuevo empleado 1</h4>
                            <p>Ver</p>
                            <div>
                              <a href="../img/imgi/portfolio/anexo2.jpg" class="link-preview" data-lightbox="portfolio" data-title="COPAP" title="COPAP"><i class="ion ion-eye"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-empleados" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                          <img src="../img/imgi/portfolio/E1.jpeg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Consejos Utiles</h4>
                            <p>Ver</p>
                            <div>
                              <a href="../img/imgi/portfolio/Emp1.png" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Empleados"><i class="ion ion-eye"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-contraseña">
                        <div class="portfolio-wrap">
                          <img src="../img/imgi/portfolio/C1.jpeg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Reestablcer Contraseña 1</h4>
                            <p>Ver</p>
                            <div>
                              <a href="../img/imgi/portfolio/anexo3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Contraseña" title="Preview"><i class="ion ion-eye"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-contraseña" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                          <img src="../img/imgi/portfolio/anexo1.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Reestablcer Contraseña 2</h4>
                            <p>Ver</p>
                            <div>
                              <a href="../img/imgi/portfolio/anexo1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Contraseña" title="Preview"><i class="ion ion-eye"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-empleados" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                          <img src="../img/imgi/portfolio/anexo4.jpeg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Mostrar Empleados</h4>
                            <p>Ver</p>
                            <div>
                              <a href="../img/imgi/portfolio/anexo4.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Empleados" title="Preview"><i class="ion ion-eye"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </section><!-- #portfolio -->
            </div>

          </div>
          <!-- Envoltorio de fin de contenido -->

        </div>
        <!-- Envoltorio de fin de página -->

        <!-- Desplácese al botón superiorn-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- Cierre de sesión modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Seguro que deseas salir?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Selecciona "Cerrar sesión" a continuación si está listo para finalizar su
                sesión
                actual.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="../Login/loginForm.php">Cerrar Sesion</a>
              </div>
            </div>
          </div>
        </div>

        <!-- JavaScript básico de Bootstrap-->
        <script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <!-- JavaScript básico de Bootstrap-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Complemento principal de JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Scripts personalizados para todas las páginas-->
        <script src="../js/sb-admin-2.min.js"></script>

        <!-- Complementos de nivel de página -->
        <script src="../vendor/chart.js/Chart.min.js"></script>

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- Uncomment below i you want to use a preloader -->
        <!-- <div id="preloader"></div> -->

        <script src="../lib/jquery/jquery.min.js"></script>
        <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../lib/easing/easing.min.js"></script>
        <script src="../lib/mobile-nav/mobile-nav.js"></script>
        <script src="../lib/wow/wow.min.js"></script>
        <script src="../lib/waypoints/waypoints.min.js"></script>
        <script src="../lib/counterup/counterup.min.js"></script>
        <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../lib/isotope/isotope.pkgd.min.js"></script>
        <script src="../lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Main Javascript File -->
        <script src="../js/main.js"></script>
</body>

</html>