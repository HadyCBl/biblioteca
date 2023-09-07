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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-*************" crossorigin="anonymous" />

    <style>
    .search-container {
        display: flex;
        align-items: center;
    }

    #search-input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        margin-right: 5px;
        /* Ajusta el margen derecho según tu preferencia */
    }

    #search-button {

        align-items: center justify-content: center;
        padding: 10px;
        background-color: #3498db;
        border: none;
        color: white;
        cursor: pointer;
        border-radius: 4px;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    #search-button:hover {
        background-color: #2980b9;
    }
    
    .seleccionar-button {
    background-color: #007bff; /* Cambia el color de fondo a azul */
    color: #fff; /* Cambia el color del texto a blanco */
    border: none; /* Elimina el borde del botón */
    padding: 5px 10px; /* Ajusta el espaciado interior del botón */
    cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
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
                <button class="sidebar__button  " onclick="window.location.href='RegistrarC.php'">
                    <i class='bx bx-user-plus sidebar__icon'></i>
                    <span class="sidebar__text">Registrar Cliente</span>
                </button>
            </li>
            <li class="sidebar__item">
                <button class="sidebar__button " onclick="window.location.href='invent.php'">
                    <i class='bx bx-cog sidebar__icon'></i>
                    <span class="sidebar__text">Inventario</span>
                </button>
            </li>
            <li class="sidebar__item">
                <button class="sidebar__button sidebar__button--active" onclick="window.location.href='factura.php'">
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
        <li>
            <h4>


            </h4>
        </li>
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
            <h1 class="card__title">INVENTARIO</h1>
            <p class="card__text">Visualiza los Materiales</p>
            <button onclick="window.location.href='ver_libros_prestados.php'" class="button">Ver Libros Prestados
            </button>

        </div>
        <!-- Información sobre el proyecto -->
        <section>
            <h1 class="title">Sistema de Inventario <span class="date"></span></h1>

            <!-- Barra de búsqueda -->
            <div class="search-container">
                <form method="GET" action="">
                    <input type="text" name="search_client" id="search-client-input" placeholder="Buscar cliente...">
                    <button type="submit" id="search-client-button">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <li>
                <h1>

                </h1>
            </li>

            <!-- TABLA DE CONTENIDO -->
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "inventario";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Verificar si se ha enviado una consulta de búsqueda de clientes
if (isset($_GET['search_client'])) {
    $search_client = $_GET['search_client'];
    $sql_client = "SELECT * FROM clientes WHERE nombre LIKE '%$search_client%' LIMIT 3";
    $result_client = $conn->query($sql_client);
    
    if ($result_client->num_rows > 0) {
        echo "<table class='client-table'>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Apellido</th>
                    <th>Seleccionar</th>
                </tr>";
        while ($row_client = $result_client->fetch_assoc()) {
            $id_client = $row_client["id"];
            $nombre_client = $row_client["nombre"];
            $segundo_n = $row_client ["segundo_n"];
            $apellido_client = $row_client["apellido"];
            
            echo "<tr>
                    <td>$id_client</td>
                    <td>$nombre_client</td>
                    <td>$segundo_n</td>
                    <td>$apellido_client</td>
                    <td>
                        <form method='POST' action='prestar_libro.php'>
                            <input type='hidden' name='selected_client' value='$id_client'>
                            <button type='submit' name='select_client' class='seleccionar-button'>Seleccionar</button>

                        </form>
                    </td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron clientes.";
    }
}
// agregale estilo al bton de selccionar con css solamente que sea dinamico 

$conn->close();
?>

            <!-- TABLA DE CONTENIDO -->

            <li>
                <h1>
            <li>
                <h1>

                </h1>
            </li>
            </h1>
            </li>



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
                <a href="https://github.com/HadyCBl" target="_blank">Ctrl_Inventario</a>
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