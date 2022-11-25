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
                      <a class="nav-link active disabled" aria-current="page" href="./notebooks.php">Notebooks</a>
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
    <div class="container-fluid main_principal">
      <div class="row d-flex flex-row justify-content-center pt-3">
        <!-- Formulario -->
        <div class="col-10 col-md-8 col-lg-5 bg-secondary bg-opacity-25 my-2 p-3 rounded-3 shadow-sm">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nombre y Apellido</label>
              <input type="text" name="name" class="form-control" id="InputName" aria-describedby="name" />
            </div>
            <div class="mb-3">
              <label for="mail" class="form-label">Correo electronico</label>
              <input type="email" name="mail" class="form-control" id="InputEmail" />
            </div>
            <div class="mb-3">
              <label for="mensaje" class="form-label">Mensaje</label>
              <textarea name="mensaje" class="form-control" id="InputMessage" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success mb-1">Enviar</button>
            <button type="reset" class="btn btn-success mb-1">
              Limpiar formulario
            </button>
          </form>
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
  <script src="./js/fecha.js"></script>
</body>

</html>