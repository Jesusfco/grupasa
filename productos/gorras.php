<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<title>Grupasa Producto Raseros</title>

    <link href="../styles/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    
    <link href="css/sectionProduct.css" type="text/css" rel="stylesheet" media="screen,projection">    
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

    <nav>
        
        <div>
            <h1>NUESTROS PRODUCTOS</h1>
            <div class="subrayado"></div>
        </div>

        <div>    
            <a href="../">    
                <i class="material-icons">home</i>
            </a>    
        </div>
    </nav>

    <div class="productContainer">

        <div class="imgBackground" >
            <img src="../img/products/gorra.jpg">
        </div>

        <div class="information-container">

            <div class="information">
                <h2>GORRAS</h2>
                <p>Gorras de malla con frente blanco para sublimar</p>
                <img src="../img/logoBote.png" width="35px">


                <p>Colores disponibles</p>
                <div class="colorContainer">
                
                    <div id="negro"></div>
                    <div id="gris"></div>
                    <div id="azul"></div>
                    <div id="verde"></div>
                    <div id="cafe"></div>
                    <div id="rojo"></div>
                    <div id="amarillo"></div>
                    <div id="blanco"></div>
                </div>

                <p>Flourecentes</p>

                <div class="colorContainer">
                
                    <div id="verde1"></div>
                    <div id="verde2"></div>
                    <div id="naranja"></div>
                    <div id="rosado"></div>                    
                </div>
                <p>* Existencia del mismo modelo con color uniforme<br>
                unicamente en negra</p>

            </div>

        </div>

    </div>

    <style>
        .colorContainer{
            display:flex;
            justify-content: space-around;
            flex-wrap: wrap ;
            width: 250px;
            
        }

        .colorContainer div{
            border-radius: 50%;
            display: block;
            width: 55px;
            height: 55px;
            background: black;
            margin-bottom:10px;
          

        }

        #gris{
            background: #1A1A34;
        }

        #azul{
            background: #6ABFE9;
        }

        #verde{
            background: #0D6A30;
        }

        #cafe{
            background: #3F1216;
        }
        #rojo{
            background: #C81A19;
        }

        #amarillo {
            background: #EAC40B;
        }

        #blanco {
            background: white;
            border: 1px solid grey;
        }

        #verde1{
            background: #C6D309;
        }
        #verde2{
            background: #67B431;
        }
        #naranja{
            background: #EF791E;
        }
        #rosado{
            background: #E72B88;
        }
    </style>

    
    <?php 
        // include "views/slider.php";
    
    ?>
    <!-- SCRITPS -->
    <!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="scripts/slider.js"></script>
    <script src="scripts/menu.js"></script> -->
<body>
</body>
</html>