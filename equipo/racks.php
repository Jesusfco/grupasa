<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<title>Grupasa Producto Racks</title>

    <link href="../styles/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">    
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

    <nav>
        
        <div>
            <h1>Racks</h1>
            <div class="subrayado"></div>
        </div>

        <div>    
            <a href="../">    
                <i class="material-icons">home</i>
            </a>    
        </div>
    </nav>

    <style>
        .equipoContainer {
            display: flex;
            width: 100%;
            height: 100vh; 
            /*flex-wrap: wrap;*/
        }

        .equipoContainer .s6 {
            width: 50%;
        }
        .equipoContainer .s4 {
            width: 33.333%
        }

        .piece {
          width: 50%;
            height: 100%;
            text-align: center;
            position: relative;
            overflow: hidden;
            border: 1px ;
            display: block;

        }
        .equipoContainer div img {
            height: 100%;
            display: block;
            /*position: absolute;*/
            margin: 0 auto;
        }

        .nameEquip{
            position: absolute;
            right: 50%;
            transform: translateX(50%);
            bottom: 50px;
            background:             

        }

        .nameEquip h3, .nameEquip p {
            text-shadow: 2px 2px 4px white;
        }
    </style>
    <div class="equipoContainer">

       

       <div class="piece ">
           <img src="../img/racks/1.jpg">
            <div class="nameEquip">
               <h3>RACKS DE 25 CHAROLAS</h3>
               <p>40 cm x 50 cm.</p>
            </div>
       </div>

       <div class="piece ">
            <img src="../img/racks/2.jpg">
            <div class="nameEquip">
               <h3>RACKS DE 50 CHAROLAS</h3>
               <p>40 cm x 50 cm.</p>
            </div>
       </div>

       

    </div>

    
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