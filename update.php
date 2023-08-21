
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
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    border: none;
    color: white;
    cursor: pointer;
    border-radius: 4px;
    font-size: 16px;
    transition: background-color 0.3s ease;
    animation: pulse 1s infinite;
}

input[type="submit"]:hover {
    background-color: #0069D9;
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
    100% {
        transform: scale(1);
    }
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
        <button class="sidebar__button sidebar__button--active" onclick="window.location.href='RegistrarP.html'">
          <i class='bx bxs-info-circle sidebar__icon'></i>
          <span class="sidebar__text">Registrar Producto</span>
        </button>
      </li>
    <li class="sidebar__item">
      <button class="sidebar__button" onclick="window.location.href='invent.php'">
        <i class='bx bx-cog sidebar__icon'></i>
        <span class="sidebar__text">Inventario</span>
      </button>
    </li>
    <li class="sidebar__item">
      <button class="sidebar__button" onclick="window.location.href='factura.html'">
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
      <h1 class="card__title">Actualizar un Producto</h1>
      <p class="card__text">Visualiza los Materiales</p>
    </div>
    <!-- Información sobre el proyecto -->
    <section>
      <h1 class="title">Material: <span class="date"></span></h1>
      <p>
        
      </p>
      <!-- Keywords -->
      <h3>Ingresa los campos obligatorios</h3>
    
      <!-- tabla de ingreso de registro -->

      <!-- ... Código HTML anterior ... -->

<!-- tabla de ingreso de registro -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

// Verificar si se ha proporcionado el ID del registro a actualizar
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Crear la conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    // Obtener los datos actuales del registro
    $sql = "SELECT * FROM libros WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $titulo = $row["titulo"];
        $autor = $row["autor"];
        $cantidad = $row["cantidad"];

        // Mostrar el formulario de actualización con los datos actuales
        ?>
        <form action="save_update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" value="<?php echo $titulo; ?>"><br>
            <label for="autor">Autor:</label>
            <input type="text" name="autor" value="<?php echo $autor; ?>"><br>
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" value="<?php echo $cantidad; ?>"><br>
            
            <li>
                <h1>

                </h1>
            </li>
            <input type="submit" value="Guardar">
        </form>
        <?php
    } else {
        echo "No se encontró el registro.";
    }

    $conn->close();
} else {
    echo "No se ha proporcionado un ID válido.";
}
?>



<!-- ... Código HTML posterior ... -->

   
      <hr />
    </section>
    <!-- Sección componentes -->

 
      
      
  
       
      </table>
      <hr />
    </section>
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

