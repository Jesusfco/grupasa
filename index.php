<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<title>Grupasa</title>

    <link href="styles/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="styles/slider.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="styles/productos.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="styles/equipos.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="styles/nosotros.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="styles/ubicacion.css" type="text/css" rel="stylesheet" media="screen,projection">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

    <nav>
        <div class="nav-content">
            <div class="menu-logo">
                <img src="img/logo.jpg" onclick="scrollTop2()">
            </div>

            <div class="menu-links">
                <a>Promociones</a> <span>|</span>
                <a onclick="smoothScroll('productos')">Productos</a>  <span>|</span>
                <a onclick="smoothScroll('equipos')">Equipo</a> <span>|</span>
                <a onclick="smoothScroll('quienes')">Quienes Somos</a> <span>|</span>
                <a onclick="smoothScroll('ubicacion')">Ubicacion</a>
            </div>    
        </div>
    </nav>

    
    <?php 
        include "views/slider.php";
        include "views/productos.php";
        include "views/equipos.php";
        include "views/quienes.php";
        include "views/contacto.php";
    ?>
    

    
    
    
    
    
    
    

    <!-- SCRITPS -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="scripts/slider.js"></script>
    <script src="scripts/menu.js"></script>
<body>
</body>
</html>