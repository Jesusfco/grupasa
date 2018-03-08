<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<title>Grupasa Equipo Planchas</title>

    <link href="../styles/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">    
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

    <nav>
        
        <div>
            <h1>PULPOS</h1>
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
            flex-wrap: wrap;
        }

        .equipoContainer .s6 {
            width: 50%;
        }
        .equipoContainer .s4 {
            width: 33.333%
        }


        .piece {
            height: 50%;
            text-align: center;
            position: relative;
            overflow: hidden;
            border: 1px black;

        }
        .equipoContainer div img {
            height: 100%;
            display: block;
            position: absolute;
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

      .flexColum{
        display: flex;
        flex-direction: column;
      }
        .s60{
          width: 60%;
          height: 100%;
        }

        .s40 {
           height: 100%;
           width: 40%;
        }

        .s40 .piece img {
          /*height: 100%;
          width: inherit;*/
        }
    </style>
    <div class="equipoContainer">

       <div class="flexColum s60">
       
         <div class="piece">
           <img src="../img/planchas//1.jpg">
            <div class="nameEquip">
               <h3>PLANCHA CON TEFLÓN</h3>
               <p>40 cm x 50 cm.</p>
            </div>
         </div>

         <div class="piece">
             <img src="../img/planchas/2.jpg">
              <div class="nameEquip">
                <h3>PLANCHA CON NEOPRENO</h3>
                <p>40 cm x 50 cm.</p>
              </div>
         </div>

       </div>

       <div class="flexColum s40">
         
        <div class="piece">
             <img src="../img/planchas/3.jpg">
              <div class="nameEquip">
                <h3>PLANCHA CON NEOPRENO</h3>
                <p>40 cm x 50 cm.</p>
              </div>
         </div>

         <div class="piece">
             <img src="../img/planchas/4.jpg">
              <div class="nameEquip">
                <h3>PLANCHA CON NEOPRENO</h3>
                <p>40 cm x 50 cm.</p>
              </div>
         </div>

         <div class="piece">
             <img src="../img/planchas/5.jpg">
              <div class="nameEquip">
                <h3>PLANCHA CON NEOPRENO</h3>
                <p>40 cm x 50 cm.</p>
              </div>
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