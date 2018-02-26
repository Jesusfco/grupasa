<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<title>Grupasa</title>

    <link href="styles/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="styles/equipos.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="styles/nosotros.css" type="text/css" rel="stylesheet" media="screen,projection">
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
                <a onclick="smoothScroll('quienes')">Equipo</a> <span>|</span>
                <a onclick="smoothScroll('quienes')">Quienes Somos</a> <span>|</span>
                <a onclick="smoothScroll('ubicacion')">Ubicacion</a>
            </div>    
        </div>
    </nav>

    
    <?php 
        include "slider.php";
    ?>
    

    <div class="ubicacion" id="div-ubicacion">
        <h3>DONDE ENCONTRARNOS</h3>
        <div class="subrayado"></div>
        <div class="ubicacion-content">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.42208021792084!2d-93.11144935150887!3d16.75275389595888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x885e4e152160edb6!2sGrupasa!5e0!3m2!1ses!2smx!4v1519228009513" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="contact-data">
                
                <div>
                    <h5><i class="material-icons">place</i>UBICACIÓN </h5>
                    <p> Av. Central Oriente No. 683 <br>
                        Col. Centro C.P. 29000 <br>
                        Tuxtla Gutierrez, Chiapas.
                    </p>
                </div>    
                
                <div>
                    <h5><i class="material-icons">access_time</i>HORARIO </h5>
                    <p> LUNES A VIERNES <br>
                        9:00 - 20:00 Hrs. <br><br>

                        SÁBADOS <br>
                        9:00 - 16:00 Hrs.
                    </p>
                </div>

                <div>
                    <h5><i class="material-icons">local_phone</i>TELEFONOS </h5>
                    <p> TEL. (961) 6114818<br>
                        (961) 6136232
                    </p>
                </div>

                <div>
                    <h5><i class="material-icons">mail</i>ESCRIBENOS </h5>
                    <p> <a href="mailto:grupasa.ventas@gmail.com">grupasa.ventas@gmail.com </a> </p>
                </div>
            </div>
        </div>
        
    </div>  
    
    <div class="ourProducts">
        <h3>NUESTROS PRODUCTOS</h3>
        <div class="subrayado"></div>

        <div class="products-content">
            <div class="productDiv s4">
                <img src="img/menu/marco.jpg">
                <div id="marcos">MARCOS</div>
            </div>

            <div class="productDiv s8">
                <img src="img/menu/rasero.jpg">
                <div id="raseros">RASEROS</div>
            </div>

            <div class="productDiv s4">
                <img src="img/menu/papel.jpg">
                <div id="papeles">PAPELES</div>
            </div>

            <div class="productDiv s8">
                <img src="img/menu/tinta.jpg">
                <div id="tintas">TINTAS</div>
            </div>
            
            <!-- SEGUNDA SECCION DE PRODUCTOS -->

            <div class="productDiv s4 sello">
                <img src="img/menu/sello.jpg">
                <div id="marcos">SELLOS</div>
            </div>

            <div class="s8 finalProduct">
            
                <div class="pro2 productDiv sello">
                    <img src="img/menu/vinil.jpg">
                    <div id="raseros">VINILES</div>
                </div>

                <div class=" pro2 productDiv sello">
                    <img src="img/menu/encuadernacion.jpg">
                    <div id="raseros">ENCUADERNACIÓN</div>
                </div>

            </div>
            

        </div>

    </div>
    
    <div>
        <h3>EQUIPOS</h3>
        <div class="subrayado"></div>

        <div class="equipo-content">

            <div class="equipo-card">
                <div class="img" style="background-image: url(img/equipos/pulpo.jpg)"></div> 
                <div class="box">PULPOS</div>
            </div>

            <div class="equipo-card">
                <div class="img" style="background-image: url(img/equipos/plancha.jpg)"></div>
                <div class="box">PLANCHAS</div>
            </div>

            <div class="equipo-card">
                <div class="img" style="background-image: url(img/equipos/rack.jpg)"></div>
                <div class="box">RACKS</div>
            </div>

        </div>
    </div>
    
    <div>
        <h3>QUIENES SOMOS</h3>
        <div class="subrayado"></div>

        <div class="quienes-content">

            <div class="s4">
                <div>
                    <h5>MISIÓN</h5>
                    <p>Ser un distribuidor líder mediante servicio integrado y 
                        personalizado  para la industria gráfica.
                    </p>
                </div>      

                <div>
                    <h5>VISIÓN</h5>
                    <p> Consolidar nuestro liderazgo en el Estado de Chiapas para 
                        asi poder ser una empresa reconocida en el mercado como 
                        un distribuidor confiable en 
                        las industrias gráficas. <br>
                        Continuar con la evolución de
                        nuestro servicio de una manera
                        dinámica fortaleciendo una cultura 
                        de trabajo y atención al usuario.
                </div>
            </div>

            <div class="s8">
                <img src="img/quienes/quienesomos.jpg">
                <!-- <div class="img" style="background-image: url(img/quienes/quienesomos.jpg)"></div> -->
            </div>

            

        </div>
    </div>

    <!-- SCRITPS -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="scripts/slider.js"></script>
    <script src="scripts/menu.js"></script>
<body>
</body>
</html>