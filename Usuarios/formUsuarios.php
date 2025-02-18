<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Usuario</title>
  <!-- FUENTES-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- CSS-->
  <link href="../css/estilo.css" rel="stylesheet">
  <link rel="icon" href="../img/Moneda.png">
  <link rel="stylesheet" href="../css/estilosValidacion.css">

  <!--JAVASCRIPT-->
  <script src="https://code.jquery.com/jquery-1.12.1.js">
    type = "text/javascript"
  </script>

</head>

<script src="../SqlTools/confirmationInsert.js"></script>

<body id="page-top">
  <?php

  include '../SqlTools/database.php';

  $Usuario = $_GET['idUsuario'];

  $Empresa = $_GET['Empresas_idEmpresas'];
  $action = $_GET['action'];

  $idUsuario = 0;
  $idEmpleados = 0;

  if (isset($_GET['idEmpleados'])) {
    $idEmpleados = $_GET['idEmpleados'];
  }

  if (isset($_GET['Usuario'])) {
    $idUsuario = $_GET['Usuario'];
  }

  $auxiliar = new database();
  $auxiliar->select('usuarios', 'Usuario', "idUsuario = '$Usuario'");
  $nombre = $auxiliar->sql;
  $name = mysqli_fetch_assoc($nombre);

  $auxiliar->select('usuarios', '*', "idUsuario= '$idUsuario'");
  $table = $auxiliar->sql;
  $row = mysqli_fetch_assoc($table);
  ?>



  <script>
    <?php
    echo "var empresa ='$Empresa';";
    ?>

    function cambiarImg(empresa) {
      var imagenacambiar = document.getElementById("icono");
      if (empresa == 1) {
        imagenacambiar.src = "../img/W.png";
      } else {
        imagenacambiar.src = "../img/C.png";
      }
    }
  </script>
  <!-- Envoltura de pagina -->
  <div id="wrapper">

    <?php include "../SqlTools/serviceMenu.php"; ?>

    <!-- Contenido de la página de inicio -->
    <div class="container-fluid">
      <h1 class="h3 mb-1 text-gray-800"><?php if ($action == 1) {
                                          echo 'Creacion de Usuario';
                                        } elseif ($action == 2) {
                                          echo 'Modificacion de Usuario';
                                        } else {
                                          echo 'Lectura de Usuario';
                                        } ?></h1>
    </div>
    <div class="container">

      <!-- Fila exterior -->
      <div class="row justify-content-center">

        <div class="col-xl-20 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Fila anidada dentro del cuerpo de la tarjeta -->
              <div class="">
                <div class="p-5">
                  <!--Inicio de Form-->
                  <form class="formulario" action=<?php if ($action == 1) {
                                                    echo 'SQLInsert_Usuarios.php';
                                                  } elseif ($action == 2) {
                                                    echo 'SQLUpdate_Usuarios.php';
                                                  } ?> id="formulario" method="post">
                    <input type="hidden" name="Usuario" value="<?php echo $Usuario; ?>">
                    <input type="hidden" name="Empresa" value="<?php echo $Empresa; ?>">
                    <input type="hidden" name="idEmpleados" value="<?php echo $idEmpleados; ?>">
                    <input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">

                    <!--Grupo: Nombre de Usuario-->
                    <div class="formulario__grupo" id="grupo__Usuario">
                      <label for="Usuario" class="formulario__label">Usuario</label>
                      <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="NombreUsuario" id="Usuario" title="Ingresa nombre de Usuario" <?php if ($action != 1 && $action != 2) {
                                                                                                                                            echo 'readonly';
                                                                                                                                          } ?> onblur="upperCase('Usuario')" placeholder="Nombre del Usuario" value="<?php if (isset($row)) {
                                                                                                                                                                                                                        echo $row['Usuario'];
                                                                                                                                                                                                                      } ?>" required minlength="4" maxlength="15">
                      </div>
                      <p class="formulario__input-error">llene el campo</p>
                    </div>

                    <!--Grupo: Empleado-->
                    <?php
                    $grid = new database();
                    $grid->select('empleados', "idEmpleados, concat(PrimerNombre, ' ' , PrimerApellido) as Nombre", 'Empresas_idEmpresas = ' . $Empresa . '');
                    $table = $grid->sql;
                    $ex = mysqli_fetch_assoc($table)
                    ?>
                    <div class="formulario__grupo" id="grupo__Empleado_idEmpleados">
                      <label for="Empleado_idEmpleados" class="formulario__label">Empleado</label>
                      <select class="formulario__input" name="Empleado_idEmpleados" id="Empleado_idEmpleados" title="Selecciona un opcion" <?php if ($action != 1 && $action != 2) echo "readonly" ?> required>
                        <option value="">Seleccione un Empleado</option>
                        <?php
                        while ($ex = mysqli_fetch_assoc($table)) {
                        ?>
                          <option value="<?php echo $ex['idEmpleados'] ?>" <?php if (isset($row)) if ($row['Empleados_idEmpleados'] == $ex['idEmpleados'])  echo "selected" ?>>
                            <?php echo $ex['Nombre'] ?></option>
                        <?php
                        }
                        ?>
                      </select>
                      <p class="formulario__input-error">Debe seleccionar un empleado.</p>
                    </div>

                    <!--Grupo: Contraseña-->
                    <div class="formulario__grupo" id="grupo__contraseñaU">
                      <label for="contraseñaU" class="formulario__label">Contraseña</label>
                      <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="Contrasenia" id="contraseñaU" title="Ingresa contraseña" placeholder="Contraseña" required minlength="8" maxlength="15" <?php if ($action != 1 && $action != 2) {
                                                                                                                                                                                                      echo 'readonly';
                                                                                                                                                                                                    } ?> value="<?php if (isset($row)) {
                                                                                                                                                                                                                  echo $row['Contrasenia'];
                                                                                                                                                                                                                } ?>">
                      </div>
                      <p class="formulario__input-error">La contraseña debe contener entre 8 a 15 dígitos.</p>
                    </div>

                    <!--Grupo: Estado-->
                    <div class="formulario__grupo" id="grupo__estado">
                      <label for="estado" class="formulario__label">Estado</label>
                      <div class="formulario__grupo">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="radio" name="Estados_idEstado" title="Seleciona si esta activo" <?php if ($action != 1 && $action != 2) {
                                                                                                          echo 'readonly';
                                                                                                        } ?> value="1" <?php if (isset($row)) {
                                                                                                                          if ($row['Estados_idEstado'] == 1) { ?> checked="checked" <?php }
                                                                                                                                                                                    } ?> required>
                          <label for="contactChoice1">Activo</label>
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="radio" name="Estados_idEstado" title="Selecciona si esta inactivo" <?php if ($action != 1 && $action != 2) {
                                                                                                            echo 'readonly';
                                                                                                          } ?> value="2" <?php if (isset($row)) {
                                                                                                                            if ($row['Estados_idEstado'] == 2) { ?> checked="checked" <?php }
                                                                                                                                                                                      } ?>>
                          <label for="contactChoice2">Inactivo</label>
                        </div>
                      </div>
                    </div>

                    <!--Submit-->
                    <?php if ($action == 1 || $action == 2) { ?>

                      <div class="formulario__grupo" id="grupo__departamento">
                        <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" title="Click si el formulario esta listo para guardar" value=<?php if ($action == 1) {
                                                                                                                                                                      echo 'Crear';
                                                                                                                                                                    } elseif ($action == 2) {
                                                                                                                                                                      echo 'Modificar';
                                                                                                                                                                    } else {
                                                                                                                                                                      echo 'Leer';
                                                                                                                                                                    } ?>>
                      </div>
                      <!--Limpiar-->
                      <div class="formulario__grupo" id="grupo__departamento">
                        <input type="Reset" class="btn btn-primary btn-user btn-block" title="Click si desea limpiar todos los campos" value="Limpiar">
                      </div>

                    <?php } ?>

                    <!--Cancelar-->
                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                      <div class="col-sm-6 mb-3 mb-sm-0" style=" width: 50vw; margin-left : 0vw;">
                        <a title="Click si no desea hacer ni una acción" href="TablaUsuarios.php?idUsuario=<?php echo $Usuario; ?>&Empresas_idEmpresas=<?php echo $Empresa; ?>" class="btn btn-primary btn-user btn-block">
                          Regresar
                        </a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Bandersnatch 2022 </span>
      </div>
    </div>
  </footer>
  <!-- Fin del Footer -->

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
        <div class="modal-body">Selecciona "Cerrar sesión" a continuación si está listo para finalizar su sesión
          actual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="../Login/loginForm.php">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript básico de Bootstrap-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Complemento principal de JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Scripts personalizados para todas las páginas-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Complementos de nivel de página -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Scripts personalizados a nivel de página -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>
  <!-- Scripts Validacion de Formulario -->
  <script src="../js/formulario.js"></script>

</body>

</html>