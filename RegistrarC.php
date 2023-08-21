
<!DOCTYPE html>
<html lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8" />
  <title>inicio</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
  <link rel="stylesheet" href="assets/css/variables.css" />
  <link rel="stylesheet" href="assets/css/styleinicio.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-*************" crossorigin="anonymous" />

  <style>
    .form__input {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      transition: border-color 0.3s ease;
    }

    .form__input:focus {
      outline: none;
      border-color: #0066ff;
      box-shadow: 0 0 5px rgba(0, 102, 255, 0.3);
    }
    .button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      background-color: #0066ff;
      color: #fff;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #0044cc;
    }
  </style>
</head>




<body>
  <!-- Sidebar -->
<!-- Sidebar -->
<!-- Sidebar -->
<aside id="sidebar" class="sidebar">
  <div class="logo">
    <img class="logo__img" src="assets/img/logo.png">
    <!-- Título del sitio -->
    <a class="sidebar__titulo" href="#">
      <span class="sidebar__titulo sidebar__titulo-destacado">Ctrl
        <span class="sidebar__titulo sidebar__titulo-alternativo"> _Inventario</span>
      </span>
    </a>
  </div>
  <ul class="sidebar__menu">
    <li class="sidebar__item">
        <button class="sidebar__button" onclick="window.location.href='inicio.html'">
        <i class='bx bxs-directions sidebar__icon'></i>
        <span class="sidebar__text">Inicio</span>
      </button>
    </li>
    <li class="sidebar__item">
        <button class="sidebar__button " onclick="window.location.href='RegistrarP.html'">
          <i class='bx bxs-info-circle sidebar__icon'></i>
          <span class="sidebar__text">Registrar Producto</span>
        </button>
      </li>
      <li class="sidebar__item">
        <button class="sidebar__button sidebar__button--active" onclick="window.location.href='RegistrarC.html'">
        <i class='bx bx-user-plus sidebar__icon'></i>
            <span class="sidebar__text">Registrar Cliente</span>
        </button>
    </li>

    <li class="sidebar__item">
      <button class="sidebar__button" onclick="window.location.href='invent.php'">
        <i class='bx bx-cog sidebar__icon'></i>
        <span class="sidebar__text">Inventario</span>
      </button>
    </li>
    <li class="sidebar__item">
      <button class="sidebar__button" onclick="window.location.href='factura.php'">
        <i class='bx bx-mail-send sidebar__icon'></i>
        <span class="sidebar__text">Facturacion</span>
      </button>
    </li>
  </ul>
</aside>


    <li>
      
    </li>
  </aside>
  <!-- Menú superior -->
  <nav id="navbar" class="navbar">
    <!-- Contenido izquierda -->
    <div class="navbar__container navbar__container-left">
      <a class="navbar__link navbar__button-left navbar__button-disabled">
        <i class='bx bx-menu bar__icono-left'></i>
      </a>
    </div>
    <!-- Contenido derecha -->
    <div class="navbar__container navbar__container-right">
      
 
      <ul class="navbar__ul">
        <li class="navbar__li">
          <a class="navbar__link">
            <i id="theme-enabled" class='bx bx-brightness-half bar__icono'></i>
            <span class="navbar__texto">Tema</span>
          </a>
          <!-- Menú desplegable -->
          <div id="navbar__theme-switcher" class="navbar__desplegable navbar__desplegable-disabled">
            <a class="navbar__desplegable__link navbar__theme-enabled">
              <i class='bx bx-brightness-half bar__icono'></i>
              <span id="theme-0" class="navbar__texto">SO por defecto</span>
            </a>
            <a class="navbar__desplegable__link">
              <i class='bx bx-sun bar__icono'></i>
              <span id="theme-1" class="navbar__texto">Claro</span>
            </a>
            <a class="navbar__desplegable__link">
              <i class='bx bx-moon bar__icono'></i>
              <span id="theme-2" class="navbar__texto">Oscuro</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Botón probar -->
      <a class="button button-highlighted" href="index.html">Cerra sesion</a>
    </div>
  </nav>
  <!-- Contenido de la página -->
  <main id="main" class="main">
    <!-- Sección sobre el proyecto -->
    <!-- Encabezado con nombre del proyecto -->
    <div id="about" class="card">
      <h1 class="card__title">Registro</h1>
      <p class="card__text">De clientes</p>
    </div>
    <!-- Información sobre el proyecto -->
    <section>
      <h1 class="title"> <span class="date">Termino: x de febrero 20XX</span></h1>
      <p>
        
      </p>
      <!-- Keywords -->
      <h3>Ingresa los campos obligatorios</h3>
    
      <!-- tabla de ingreso de registro -->

<!-- tabla de ingreso de registro -->
<form method="POST" action="guardar_cliente.php">
        <div>
          <label for="nombre">Nombre:</label>
          <input class="form__input" type="text" name="nombre" id="nombre" required>
        </div>
        <div>
          <label for="segundo_n">Segundo Nombre:</label>
          <input class="form__input" type="text" name="segundo_n" id="segundo_n" required>
        </div>
        <div>
          <label for="apellido">Apellido:</label>
          <input class="form__input" type="text" name="apellido" id="apellido" required>
        </div>
        <div>
          <label for="segundo_a">Segundo Apellido:</label>
          <input class="form__input" type="text" name="segundo_a" id="segundo_a" required>
        </div>
        <div>
          <label for="direccion">Dirección:</label>
          <input class="form__input" type="text" name="direccion" id="direccion" required>
        </div>
        <div>
          <label for="fecha_n">Fecha de Nacimiento:</label>
          <input class="form__input" type="date" name="fecha_n" id="fecha_n" required>
        </div>
        <div>
          <input type="submit" value="Guardar" class="button">
        </div>
      </form>




   
      <hr />
    </section>
    <!-- Sección componentes -->

    <!-- Sección descargas -->
  </main>
  <!-- Pie de página -->
  <footer class="footer">
    <div class="footer__container">
      <div class="footer__item">
        <a href="https://www.facebook.com/" target="_blank">
          <i class="fab fa-facebook-square fa-lg"></i>
        </a>
      </div>
      <div class="footer__item">
        <a href="https://www.instagram.com/_harveycbl/" target="_blank">
          <i class="fab fa-instagram fa-lg"></i>
        </a>
      </div>
      <div class="footer__item">
        <a href="https://github.com/HadyCBl" target="_blank">
          <i class="fab fa-github fa-lg"></i>
        </a>
      </div>
      <div class="footer__item">
        <a href="https://twitter.com/" target="_blank">
          <i class="fab fa-twitter fa-lg"></i>
        </a>
      </div>
      <!-- No quites esto  -->
      <hr class="footer__line" />
      <p class="info">
        Creada por Harvey Danny Enrique Chen Bol
        <a href="https://github.com/HadyCBl"
          target="_blank">Ctrl_Inventario</a>
        y
        <a href="https://github.com/HadyCBl" target="_blank">github</a>.
      </p>
    </div>
  </footer>
  
  

  <!-- Scripts -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script type="text/javascript" src="assets/js/index.js"></script>
</body>



</html>

