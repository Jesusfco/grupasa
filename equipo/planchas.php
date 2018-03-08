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
            <h1>PLANCHAS</h1>
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
            width: 100%;
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
    </style>
    <div class="equipoContainer">

       

       <div class="piece s4">
           <img src="../img/pulpos/1.jpg">
            <div class="nameEquip">
               <h3>PULPO 1 CON 1</h3>
               <p>Pulpo de 1 tinta <br> con 1 estación portátil <br> de metal </p>
            </div>
       </div>

       <div class="piece s4">
            <img src="../img/pulpos/2.jpg">
            <div class="nameEquip">
               <h3>PULPO 4 CON 1</h3>
               <p>Pulpo de 4 tintas <br> con 1 estación fija con <br>banco tradicional</p>
            </div>
       </div>

       <div class="piece s4">
           <img src="../img/pulpos/3.jpg">
            <div class="nameEquip">
               <h3>PULPO 6 CON 1</h3>
               <p>Pulpo de 6 tintas <br> con 1 estación fija con <br>banco tradicional</p>
           </div>
       </div>

       <div class="piece s6">
           <img src="../img/pulpos/4.jpg">
           <div class="nameEquip">
                <h3>PULPO 6 CON 2</h3>
                <p>Pulpo de 6 tintas <br> con 2 estaciones fijas con <br> banco tradicional</p>
            </div>
       </div>

       <div class="piece s6">
           <img src="../img/pulpos/5.jpg">
           <div class="nameEquip">
                <h3>PULPO 6 CON 2</h3>
                <p>Pulpo de 6 tintas <br> con 2 estaciones rotativas con <br> banco tradicional</p>
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