<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<title>Grupasa</title>

    <link href="styles/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="styles/navBar.css" type="text/css" rel="stylesheet" media="screen,projection">
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
                
                <a onclick="smoothScroll('productos')" class="linkProduct">
                    <span>Productos</span>
                    <div class="productsOption">
                        <div>
                            <p>Serigrafía</p>
                            <p>Sublimación</p>
                            <p>Sellos</p>
                            <p>Viniles</p>
                            <p>Encuadernación</p>
                        </div>    
                    </div>  
                </a>  <span>|</span>
                <a onclick="smoothScroll('equipos')">Equipo</a> <span>|</span>
                <a onclick="smoothScroll('quienes')">Quienes Somos</a> <span>|</span>
                <a onclick="smoothScroll('ubicacion')">Ubicación</a>
                <a href="https://www.facebook.com/grupasatuxtla/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAaVBMVEU6VZ////81Up0yT5xgc61+jbsvTZyXo8hFXaOirM0nSJmlrs7O1OUkRpkfQ5doerLr7fTHzeE9WKHV2umHlcDy9Pnd4eyut9O1vtdZbat5ibmWoceGk7/M0eSrs9G/xtxMY6ZvgLVIYaWJ8OFBAAAC40lEQVR4nO3c63KqMBRAYU9iqaLg/d7W2vd/yE5nzt/ihjTsvTNrPQDDNxIDJDqZEBERERERERERERERERFZL4QYqydF7ZMcXKyadju97m/zzhZ7n8SqCY/T8Z+kXa19sv2LdbztRLqflu6EsXm8i3kOhbF9WffxeROG9tHT50xYbTd9fb6E7Vt/nydhqO9DgH6EcdZ7BPoSVpdhPjfCajUU6EQYhwN9COPncKALYdgeChe2socIv8LmnAJ0IIzXJKADYZMyCD0IE69R+8Iw+F7Gi7CVv67wKQzTVKB1YbMsXBhSbtdcCOtT6cLUudC8MD7SgbaFdepsb17YDHw140YYZn8ANC2M+78QWl57qvoMw8PuvHC3fljL70k3q7qu/a0Bt9LZ8HhpgvbJDioKgffWp28SvqRA7TMdmvDJ6egWKBV+Ob1EJ1LhyfB09yyZ0PFHKBMeG+3TTEgkPFXap5mQSGj5nuxpIuELQsshRGg/hAjthxCh/RAitB9ChPZDiNB+CBHarwxh6PiJci3ZWnptnv3SWRm4ev2920IgPN86jvDTfKsqrD4EiMR0V98qyceU1kF3iXgEofLy2wjCe/FX6Yful+kIwn3xwpXuOv8Iws/ihcr3NPmFa+UdU/mFS+XdKPmFZ+UtU/mFr8WPQ+3nx/zCi/K2t/xC7VcA2YUH7b2Z2YXqWxezCzfFf4bqmzOzC2/Ff9M8ihdqT4f5hdrDMLtQ+VXiCEL93x7mFiq/ShxBOC9+HL5pTxbZhVPtySK7UNuXXXhQH4a5hWvtZ6fswnf1ySL3GvBZ/yqdbGcdSf4O8q3rCLpL+P8LvxdFu02qjiNo455Vxn6arhAitB9ChPZDiNB+CBHaDyFC+yFEaD+ECO2HEKH9ECK0H0KE9kOI0H4IEdoPIUL7IURoP4QI7YcQof0QIrQfQoT2Q4jQfggR2g8hQvshRGg/hAjthxCh/RAitB9ChPZDiNB+CBH26BsaQkVVLImVewAAAABJRU5ErkJggg==" height="30px"></a>
            </div> 

            <div class="icon" onclick="openMenu()">    
                <i class="material-icons">menu</i>
            </div>

        </div>
    </nav>

    <div class="movMenu">
        <div class="icon"onclick="closeMenu()">    
            <i class="material-icons">close</i>
        </div>
        <ul>
            <li onclick="scrollMov('productos')">Inicio</li>
            <li onclick="scrollMov('productos')">Productos</li>
            <li onclick="scrollMov('equipos')">Equipo</li>
            <li onclick="scrollMov('quienes')">Quienes Somos</li>
            <li onclick="scrollMov('ubicacion')">Ubicación</li>
        </ul>

        <div class="movLogo">
            <img src="img/logo.jpg" onclick="scrollTop2()">
        </div>
        
    </div>

    
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