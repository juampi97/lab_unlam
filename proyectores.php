<?php
require 'config/conexion.php';
$resultado = mysqli_query($con, "SELECT * FROM proyectores ORDER BY cod_rec");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <!-- CSS propio -->
  <link rel="stylesheet" href="./css/estilos.css" />
  <!-- favicon -->
  <link rel="icon" type="image/x-icon" href="./img/logo_unlam.svg" />
  <title>Laboratorio Electronica</title>
</head>
<body>
  <header>
    <!-- Header nav -->
    <nav class="navbar bg-light nav_bkg fixed-top px-2 lg-px-4">
      <div class="container-fluid">
        <!-- Submenu Izquierda - Operaciones -->
        <div>
          <nav class="navbar">
            <div>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    ¿Que desea hacer?
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Pedidos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Busquedas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Altas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Bajas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Reparaciones</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Modificaciones</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Usuarios</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <!-- Logo UNLaM -->
        <div class="me-lg-auto">
          <a class="navbar-brand ps-2 ps-lg-4" href="./index.html">
            <img src="./img/logo_unlam.svg" alt="logo unlam" width="50" />
          </a>
        </div>
        <!-- Submenu derecha - Equipos -->
        <div class="navbar-expand-lg">
          <nav class="navbar">
            <div>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbar2Label">
                    Equipos
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-2">
                      <a class="nav-link active" aria-current="page" href="./proyectores.php">Proyectores</a>
                    </li>
                    <li class="nav-item me-2">
                      <a class="nav-link active" aria-current="page" href="./notebooks.php">Notebooks</a>
                    </li>
                    <li class="nav-item me-2">
                      <a class="nav-link active disabled" aria-current="page" href="#">Instrumentos</a>
                    </li>
                    <li class="nav-item me-2">
                      <a class="nav-link active disabled" aria-current="page" href="#">Libros</a>
                    </li>
                    <li class="nav-item me-2">
                      <a class="nav-link active" aria-current="page" href="./bddownload.php">Descargas</a>
                    </li>
                    <li class="nav-item me-2">
                      <a class="nav-link active" aria-current="page" href="./contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item me-2">
                      <a class="btn btn-success me-3 mb-2 w-auto h-auto mt-lg-1 disabled" aria-current="page" href="./carrito.php">Carrito</a>
                    </li>
                  </ul>
                  <!-- <div class="d-flex flex-column flex-lg-row w-50">
                    <button class="btn btn-outline-success me-3 mb-2 w-auto h-auto mt-lg-1" type="submit">
                      Login
                    </button>
                    <button class="btn btn-success me-3 mb-2 w-auto h-auto mt-lg-1" type="submit">
                      Sign-up
                    </button> -->
                </div>
              </div>
            </div>
        </div>
    </nav>
    </div>
    </div>
    </nav>
  </header>
  <!-- Contenido principal -->
  <main>
    <div class="container-fluid main_reservas">
      <div class="row d-flex justify-content-center">
        <!-- Titulo pagina -->
        <div class="col-10 text-center py-3">
          <h2>Proyectores</h2>
        </div>

        <!-- Seleccion de fecha que se desea hacer la reserva -->
        <!-- <div class="row d-flex justify-content-center">
          <div class="col-12 col-lg-4 d-flex justify-content-center py-2 py-lg-3">
            <p>Seleccione el dia que desea hacer la reserva:</p>
          </div>
          <div class="col-10 col-md-3 col-lg-2 d-flex justify-content-center py-2 py-lg-3">
            <?php
            $fechamin = date('Y-m-d');
            $fechamax = date('Y-m-d', strtotime("+7days"));
            ?>
            <input type="date" value="<?= $fechamin; ?>" min="<?= $fechamin; ?>" max="<?= $fechamax; ?>" step="1" />
          </div>
          <div class="col-10 col-md-6 col-lg-4 d-flex justify-content-center py-2 py-lg-3">
            <select class="form-select" aria-label="Default select example">
              <option selected>Seleccione un horario</option>
              <option value="1">8:00 a 12:00</option>
              <option value="2">14:00 a 18:00</option>
              <option value="3">19:00 a 23:00</option>
            </select>
          </div>
          <div class="col-10 col-md-3 col-lg-2 d-flex justify-content-center py-2 py-lg-3">
            <button type="button" class="btn btn-secondary">
              Seleccionar
            </button>
          </div>
        </div> -->

        <!-- Busqueda avanzada -->
        <?php
        $resultado_marca = mysqli_query($cnx, "SELECT *  FROM proyectores_marca");
        ?>
        <div class="container-fluid my-2">
          <!-- Formulario busqueda -->
          <form action="" method="get">
            <div class="row d-flex justify-content-center">
              <div class="col-5 d-flex flex-row">
                <select class="form-select mx-1" name="busqueda_marca" aria-label="Default select example" id="">
                  <option selected>Marca</option>
                  <?php foreach ($resultado_marca as $marca) {
                  ?>
                    <option><?php echo $marca['marca'] ?></option>
                  <?php
                  }
                  ?>
                </select>
                <select class="form-select mx-1" name="busqueda_cod_rec" aria-label="Default select example" id="">
                  <option selected>Modelo</option>
                  <?php foreach ($resultado as $proyectores) {
                  ?>
                    <option><?php echo $proyectores['cod_rec'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="col-1">
                <input class="btn btn-secondary" type="submit" name="reset" value="Reset">
              </div>
              <div class="col-1">
                <input class="btn btn-success" type="submit" name="enviar" value="Buscar">
              </div>
            </div>
          </form>
        </div>
        <?php

        if (isset($_GET['enviar'])) {
          $busqueda_marca = $_GET['busqueda_marca'];
          $busqueda_cod_rec = $_GET['busqueda_cod_rec'];
          $consulta = $con->query("SELECT * FROM proyectores WHERE (marca  LIKE '$busqueda_marca') OR (cod_rec  LIKE '$busqueda_cod_rec')");
        } else{
          $consulta = $con->query("SELECT * FROM proyectores");
        }

        ?>

        <!-- Cards proyectores -->
        <div class="row d-flex justify-content-center reservas_container_card">
          <!-- Card-1 -->
          <?php foreach ($consulta as $row) {

          //Verificacion HDMI - VGA
          if ($row['vga'] == "1") {
            $entrada_vga = "Disponible";
          } else {
            $entrada_vga = "No disponible";
          }
          if ($row['hdmi'] == "1") {
            $entrada_hdmi = "Disponible";
          } else {
            $entrada_hdmi = "No disponible";
          }

          ?>
            <div class="col-sm-10 col-md-5 card m-2" style="width: 20rem">
              <div class="card-body">
                <div class="text-center">
                  <h5 class="card-title"> <?php echo $row['cod_rec'] ?> </h5>
                </div>
                <div class="text-start">
                  <p class="card-text py-2">Marca: <?php echo $row['marca'] ?></p>
                  <p class="card-text py-2">Modelo: <?php echo $row['modelo'] ?></p>
                  <p class="py-2">El maletín incluye alimentación, cabla VGA y zapatilla multitoma.</p>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="adicional_hdmi" value="agregado">
                    <label class="form-check-label" for="exampleCheck1">HDMI (opcional)</label>
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="adicional_zapatilla" value="agregado">
                    <label class="form-check-label" for="exampleCheck1">Zapatilla adicional (opcional)</label>
                  </div>
                </div>
                <div class="text-center pt-2">
                  <div class="row d-flex">
                    <div class="col boton_reserva">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-success">Agregar</button>
                    </div>
                    <div class="col boton_info">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalInfo_<?php echo $row['cod_rec'] ?>">
                        Mas info
                      </button>
                      <!-- Modal -->
                      <div class="modal fade" id="modalInfo_<?php echo $row['cod_rec'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalInfo_<?php echo $row['cod_rec'] ?>">
                                <?php echo $row['cod_rec'] ?>
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-start">
                              <p>Marca: <?php echo $row['marca'] ?></p>
                              <p>Modelo: <?php echo $row['modelo'] ?></p>
                              <p>Entrada VGA: <?php echo $entrada_vga ?></p>
                              <p>Entrada HDMI: <?php echo $entrada_hdmi ?></p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cerrar
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </main>
  <!-- Footer -->
  <footer class="container-fluid bg-dark">
    <div class="row d-flex flex-row justify-content-center">
      <div class="col-10 py-2">
        <p class="footer_txt text-white">
          Este sitio fue desarrollado por Maria Alejandra Balmaceda,con la
          ayuda de Deborah Baner, Juan Calabro y Luciano Salvatore
        </p>
      </div>
    </div>
  </footer>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>