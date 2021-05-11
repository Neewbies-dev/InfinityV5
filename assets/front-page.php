<script src="./JS/video_autoscroll.js" type="text/javascript"></script>
<body>
    <div class="menu4Sticky">
<?php 
        include "menu4.php"
        ?>
        </div>
<div id="fullpage"> 
<!-- OPENING VIDEO  -->
    <section class="vertical-scrolling">                                     
        <div class="video">
            <video id="opening" src="vids/opening.mp4" autoplay="" muted="" playsinline=""  loop="" preload="auto" ></video>
        </div>
        <div class="videoMobile">
            <video id="openingMobile" src="vids/Orange_Wavy_For_website.mp4" autoplay="" muted="" playsinline=""  loop="" preload="auto" ></video>
        </div>
       
        </section>
        <!-- BUGRER MENU -->
    <section class="vertical-scrolling">
        <!-- FIRST TITLE -->
        <div class="text_anime"><?php include "aninfinitymov.php" ?></div>                                   <!-- WAVES EFFECTS -->
        <?php 
        include "waves.php"
        ?>
    </section>
    <section class="vertical-scrolling">
   
        <div class="content flex">
            <p class="agency-description">Communication. Présence digitale. Développement. Infinity est une agence belge située à liège qui vous fournit une infinité de solutions personnalisées pour votre e-commerce grâce à notre panel d'experts. Awesome</p>
            <button class="button">
                Parlons-en
            </button>
            <img src="./img/Paper_plane.png" class="airplane"/>
           
        </div>
      
    <h3 class="joinUs blur-out-contract">Nous rejoindre en tant que </h3> 
    
    </section> 
    <section class="vertical-scrolling">
        <div class="pictures">
            <img src="img/partenaire2.jpg"/>
            <img src="img/Influ3.jpg" />
            <div class="userButton">
                <p class="part"> <a  href="assets/part.php">  Partenaires    </a> </p>
                
                <p class="influ"> <a  href="assets/influ.php"> Influenceurs  </a> </p>
            </div>
        </div>
    </section> 
    

    



