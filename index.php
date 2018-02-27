<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<title>Grupasa</title>

    <link href="styles/style.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

    <nav>
        <div class="nav-content">
            <div class="menu-logo">
                <img src="img/logo.jpg" onclick="scrollTop2()">
            </div>

            <div class="menu-links">
                <a>Promociones</a> |
                <a>Productos</a> |
                <a>Equipo</a> |
                <a>Quienes Somos</a> |
                <a onclick="smoothScroll('ubicacion')">Ubicacion</a>
            </div>    
        </div>
    </nav>

    <div class="slider">
        <div class="slider-img">

            <div>
                <img src="img/slider1.jpg">
            </div>    
            <div>
                <img src="img/slider2.jpg">
            </div>                
            <div>
                <img src="img/slider3.jpg">
            </div>     
            <div>
                <img src="img/slider2.jpg">
            </div>                 
        </div>
        

        
        <div onclick="sliderBefore()" class="indicators ileft"><</div>
        <div onclick="sliderNext()" class="indicators iright">></div>
        

        <div class="slider-circles">            
            
        </div>

    </div>

    <div class="ubicacion" id="div-ubicacion">
        <h3>DONDE ENCONTRARNOS</h3>
        <div class="subrayado"></div>
        <div class="ubicacion-content">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.42208021792084!2d-93.11144935150887!3d16.75275389595888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x885e4e152160edb6!2sGrupasa!5e0!3m2!1ses!2smx!4v1519228009513" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="contact-data">
                
                <div>
                    <h5>UBICACIÓN</h5>
                    <p> Av. Central Oriente No. 683 <br>
                        Col. Centro C.P. 29000 <br>
                        Tuxtla Gutierrez, Chiapas.
                    </p>
                </div>    
                
                <div>
                    <h5>HORARIO</h5>
                    <p> LUNES A VIERNES <br>
                        9:00 - 20:00 Hrs. <br><br>

                        SÁBADOS <br>
                        9:00 - 16:00 Hrs.
                    </p>
                </div>

                <div>
                    <h5>TELEFONOS</h5>
                    <p> TEL. (961) 6114818<<br>
                        (961) 6136232
                    </p>
                </div>

                <div>
                    <h5>ESCRIBENOS</h5>
                    <p> <a href="mailto:grupasa.ventas@gmail.com">grupasa.ventas@gmail.com </a> </p>
                </div>
            </div>
        </div>
        
    </div>   
    
    <footer>
        <h2>TODO EN UN SOLO</h2>
        <h1>LUGAR<h1>
        <p>Aviso de privacidad</p>
    </footer>

    <!-- SCRITPS -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="scripts/slider.js"></script>
    <script src="scripts/menu.js"></script>
<body>
</body>
</html>