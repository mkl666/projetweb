    <?php 
    session_start();
    if(!isset($_SESSION['username'])) {

    header("Location: ./login.php");

    exit;
    }



    ?>
<!doctype html>
<!--
	Fox by FreeHTML5.co
	Twitter: https://twitter.com/fh5co
	Facebook: https://fb.com/fh5co
	URL: https://freehtml5.co
-->
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EVENEMENT</title>

  <!-- Bootstrap CSS -->
  <link href="css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid pl-0 pr-0 bg-img clearfix parallax-window2" data-parallax="scroll" data-image-src="images/banner2.jpg">
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container"> 
      <!-- Brand --> 
      <a class="navbar-brand mr-auto" href="#"><img src="images/logof.png" alt="FoxPro" />FITNESS ESNLS</a> 
      
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
      
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="#">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="inscription.php">SIGNUP</a> </li>
                <li class="nav-item"> <a class="nav-link" href="login.php">SIGNIN</a> </li>
                <li class="nav-item"> <a class="nav-link" href="planning.html">PLANNING</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#contact">CONTACTEZ NOUS</a> </li>
          
        </ul>
        <ul class="navbar-nav ml-5">
          <li class="nav-item"> <a class="nav-link btn btn-danger" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<div class="index.html"


  < h1 style="color:orange";  caption align = center ></h1> <strong> <mark>DON'T MISS IT ✔️ </caption></mark> </strong>  
        
   <hr>  
       
   <section>
      <header>
          
          <h2> <strong>  🌈 THE COLOR RUN 🌈 </strong> </h2> </header>

          
   
   
        
          <video width="1550" height="1000"   controls poster="vignette.jpg">
              <source src="Video-Shine-Decathlon-Ficheiro.mp4.crdownload">
          </video>
        
        
     
      <!-- début du contenu-->
      <!--fin du contenu-->
  </section>

  <hr>
  <header>
      <h3>  <strong> <mark> 
          🎊 THE COLOR RUN EST LA COURSE DE 5 KM LA PLUS COLORÉE DU MONDE</strong>
          <br> <br> <br>  Il ne s’agit pas d’être le plus rapide ou de franchir la ligne d’arrivée en premier. 
      <br> <br> <br> <strong> 🎉  L'ESSENTIEL EST DE PARTICIPER  🎉 </strong> !!
         <br>  <br> Notre mot d’ordre est : <strong>AMUSEMENT ET PLAISIR !</strong>
         <br> Entourés des nombreux autres coureurs, tu vas vivre une journée exceptionnelle que tu n’es pas près d’oublier </mark> <br> <br></h3>
  </header>
  <header>
      <h4>
        
         <br> <strong> <mark>🏃🏻‍♀️ LA COURSE 🏃🏻‍♀️ </mark></strong>
          <br> <br> 5 KM
         <br> <br> <strong>TRÈS COLORÉS</strong> 
         <br> <br> A chaque km, une projection de couleur, des animations et beaucoup de surprises. Ce n’est pas une compétition, tu peux donc courir à ton rythme !
        <br> <br> <br>  <strong>UNE COURSE POUR TOUS 🎈 </strong> 
<br> <br>  Nul besoin d’être athlète pour participer, la course n’est pas chronométrée : il suffit, au moins, de savoir marcher 😉 <br> <br> </h4> </header>
<header>  
<h5>
<br> <stong> <mark> 💥 PLEIN D’ANIMATIONS 💥 </mark> </stong>

<br> <br> <br> De nombreuses animations avant la course : dance fitness, photobooth, coaching sportif, fanfare… <br> <br>
</h5> </header>
<header>
<h6> <br> <strong> <mark> LE FINISHER FESTIVAL 🏆 </mark> </strong> 
<br> <br> <br>Un final en apothéose ! De la musique, des animations, des lancés de couleurs groupés et même un foodtruck pour les plus gourmands …  <br> <br> </h6> </header>
    <header> <h7> <br>
     <br>
     <br> <br>
     <strong> VIENS NOUS REJOINDRE POUR LA COURSE EN 5KM LA PLUS FESTIVE ET LA PLUS COLORÉE DE TUNIS ! </strong>

<br> Pour cette Color Run les ondes positives sont les seules énergies tolérées! Rejoignez-nous et célébrons ensemble notre individualité, le partage et cette planète que nous partageons tous !

<br> <br> <strong> RUN WILD, LOVE WILD, STAY WILD </strong> </h7> </header>
<br>
<br>  
<br> 
<strong> <mark>JOIN US!</mark> </strong> 
      </h4>
  </header>

  <fieldset>
     <form method="post" action="views/participant.php" >
      <table border="1">
      
              <tr>
          <td rowspan="8" > Fiche Personelle</td>
                  <td>
                    <label> Nom : </label>
                  </td>
                  <td>
                      <input type="text" name="nom" maxlength="20">
                  </td>
              </tr>
  
              <tr>
                  <td >
                      <label> Prénom : </label>
                  </td>
                  <td>
                      <input type="text" name="prenom" maxlength="20">
                  </td>
              </tr>
  
              <tr>
                  <td >
                      <label> Date de naissance : </label>
                  </td>
                  <td>
                      <input type="Date" name="date">
                  </td>
              </tr>
  
              <tr>
                  <td >
                      <label> Sexe : </label>
                  </td>
                  <td>
                      <input type="radio" id="femme" name="sexe" value="Femme" >
                      <label>Femme</label>
                          <input type="radio" id="homme" name="sexe" value="Homme" >
                      <label>Homme</label>
                  </td>
              </tr>
  
  
               <tr>
                  <td >
                      <label> Adresse mail: </label>
                  </td>
                  <td>
                      <input type="email" id="email" name="email">
                  </td>
              </tr>
  
                 <tr>
                  <td >
                      <label> Téléphone: </label>
                  </td>
                  <td>
                      <input type="tel" id="phone" name="telephone" placeholder="12-345-678" pattern="[0-9]{8}">
                  </td>
              </tr>
  
  
                
  
                 <tr>
                  <td >
                      <label> Adresse: </label>
                  </td>
                  <td>
                      <textarea rows="2" name="adresse"></textarea>
                  </td>
              </tr>
  
  <tr>
          

  
  
  

  
            
            
  
                 <tr>
                  <td >
                      
                  </td>
                  <td >
                      
                </td>
                  <td>
                      <button type="submit">  Participer</button>
                  </td>
                  <p> <strong>"Un mail de confirmation sera envoyé."</strong> </p>
                  
  
              </tr> 
              </tr></table></form> </fieldset>
              <br> 
              <br>
              <br> 
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <div class="sponsors">
                  <h1 style=color:black>Sponsors</h1>
                          <a class="sponsor" href="https://www.paris.fr/" target="_blank" onclick="sendAnalytics('Ville de Paris', 'Click', 'Ville de Paris Footer Click', 1)">
                      <img onload="sendAnalytics('Ville de Paris', 'Impression', 'Ville de Paris Footer Impression', 1)" src="https://thecolorrun.fr/wp-content/uploads/paris2.jpg" alt="Ville de Paris" />
                  </a>
                          <a class="sponsor" href="https://www.decathlon.fr/" target="_blank" onclick="sendAnalytics('decathlon', 'Click', 'decathlon Footer Click', 1)">
                      <img onload="sendAnalytics('decathlon', 'Impression', 'decathlon Footer Impression', 1)" src="https://thecolorrun.fr/wp-content/uploads/decatlon.png" alt="decathlon" />
                  </a>
                          <a class="sponsor" href="https://www.universalpictures.fr/micro/trolls?utm_campaign=LESTROLLS2&utm_source=ADS?" target="_blank" onclick="sendAnalytics('Les Trolls 2', 'Click', 'Les Trolls 2 Footer Click', 1)">
                      <img onload="sendAnalytics('Les Trolls 2', 'Impression', 'Les Trolls 2 Footer Impression', 1)" src="https://thecolorrun.fr/wp-content/uploads/trolls.png" alt="Les Trolls 2" />
                  </a>
                          <a class="sponsor" href="https://www.croix-rouge.fr/" target="_blank" onclick="sendAnalytics('croix-rouge française', 'Click', 'croix-rouge française Footer Click', 1)">
                      <img onload="sendAnalytics('croix-rouge française', 'Impression', 'croix-rouge française Footer Impression', 1)" src="https://thecolorrun.fr/wp-content/uploads/logos.png" alt="croix-rouge française" />
                  </a>
                          <a class="sponsor" href="http://www.paintasmile.org/" target="_blank" onclick="sendAnalytics('Paint a Smile', 'Click', 'Paint a Smile Footer Click', 1)">
                      <img onload="sendAnalytics('Paint a Smile', 'Impression', 'Paint a Smile Footer Impression', 1)" src="https://thecolorrun.fr/wp-content/uploads/pain_a_smile2.jpg" alt="Paint a Smile" />
                  </a>
                          <a class="sponsor" href="http://www.lavoixdelenfant.org/" target="_blank" onclick="sendAnalytics('La Voix de L\'enfant', 'Click', 'La Voix de L\'enfant Footer Click', 1)">
                      <img onload="sendAnalytics('La Voix de L\'enfant', 'Impression', 'La Voix de L\'enfant Footer Impression', 1)" src="https://thecolorrun.fr/wp-content/uploads/voix.png" alt="La Voix de L'enfant" />
                  </a>
                          <a class="sponsor" href="https://www.fuaj.org/" target="_blank" onclick="sendAnalytics('fuaj', 'Click', 'fuaj Footer Click', 1)">
                      <img onload="sendAnalytics('fuaj', 'Impression', 'fuaj Footer Impression', 1)" src="https://thecolorrun.fr/wp-content/uploads/fuji.png" alt="fuaj" />
                  </a>
                          <a class="sponsor" href="https://www.keepcool.fr/" target="_blank" onclick="sendAnalytics('keep cool', 'Click', 'keep cool Footer Click', 1)">
                      <img onload="sendAnalytics('keep cool', 'Impression', 'keep cool Footer Impression', 1)" src="https://thecolorrun.fr/wp-content/uploads/kepp_cool.png" alt="keep cool" />
                  </a>
                          <a class="sponsor" href="https://www.flixbus.fr/" target="_blank" onclick="sendAnalytics('flixbus', 'Click', 'flixbus Footer Click', 1)">
                      <img onload="sendAnalytics('flixbus', 'Impression', 'flixbus Footer Impression', 1)" src="https://thecolorrun.fr/wp-content/uploads/flixbus.png" alt="flixbus" />
                  </a>
                          <a class="sponsor" href=" " target="_blank" onclick="sendAnalytics('Imagne', 'Click', 'Imagne Footer Click', 1)">
                      <img onload="sendAnalytics('Imagne', 'Impression', 'Imagne Footer Impression', 1)" src="https://thecolorrun.fr/wp-content/uploads/imagne-2.png" alt="Imagne" />
                  </a>
                          <a class="sponsor" href="https://www.20minutes.fr/" target="_blank" onclick="sendAnalytics('20 minutes', 'Click', '20 minutes Footer Click', 1)">
                      <img onload="sendAnalytics('20 minutes', 'Impression', '20 minutes Footer Impression', 1)" src="https://thecolorrun.fr/wp-content/uploads/20_min2.jpg" alt="20 minutes" />
                  </a>
                          <a class="sponsor" href="https://www.nrj.fr/" target="_blank" onclick="sendAnalytics('nrj', 'Click', 'nrj Footer Click', 1)">
                      <img onload="sendAnalytics('nrj', 'Impression', 'nrj Footer Impression', 1)" src="https://thecolorrun.fr/wp-content/uploads/nrj2.jpg" alt="nrj" />
                  </a>
                      </div>
                      <div class="footer">
                          <div class="social">
                                  <a href="https://www.facebook.com/TheColorRunFrance/" target="_blank"><img src="https://thecolorrun.fr/wp-content/uploads/icon-social-facebook.png" alt="" /></a>
                                  <a href="https://www.instagram.com/thecolorrunfrance/?hl=pt" target="_blank"><img src="https://thecolorrun.fr/wp-content/uploads/icon-social-instagram.png" alt="" /></a>
                              </div>
                          
                  <div class="copyright">
                      <p>© 2020-2021 The Color Run™, All Rights Reserved.</p>
                              </div>
  
  
              
              
  
      <div class="col-md-3 footer3 wow bounceInRight" data-wow-delay=".25s">
        <h5>ADDRESS</h5>
        <p> La Marsa</p>
        <h5>PHONE</h5>
        <p>+216 24516862 / +216 20090286  </p>
        <h5>EMAIL</h5>
        <p>fitness-esnls@gmail.com</p>
        <div class="social-links">
          <ul class="nav nav-item">
            <li><a href="https://www.facebook.com/fh5co" class="btn btn-secondary mr-1 mb-2"><img src="images/facebook.png" alt="facebook" /></a></li>
            <li><a href="#"  class="btn btn-secondary mr-1 ml-1 mb-2"><img src="images/facebook.png" alt="facebook" /></a></li>
            <li><a href="#"  class="btn btn-secondary mr-1 ml-1 mb-2"><img src="images/facebook.png" alt="facebook" /></a></li>
            <li><a href="#"  class="btn btn-secondary ml-1 mb-2"><img src="images/facebook.png" alt="facebook" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>



</footer>

<!-- Optional JavaScript --> 
<!-- jQuery first, then Bootstrap JS, ... -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/wow.js"></script>
<script src="js/main.js"></script>

</body>
</html>