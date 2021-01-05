<?php 

session_start(); 

require_once ('connect.php');
$sql='SELECT * FROM `planning`';

 $query=$db->prepare($sql);
 $query->execute();
 
 $result=$query->fetchAll(PDO::FETCH_ASSOC);
require_once ('close.php');
?>


<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="wjourth=device-wjourth, initial-scale=1, shrink-to-fit=no">
  <title>FITNESS ESNTLS PLANNING</title>

  <!-- Bootstrap CSS -->
  <link href="css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link href="htseance2s://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link href="htseance2s://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
<div class="container-flujour pl-0 pr-0 bg-img clearfix parallax-window2" data-parallax="scroll" data-image-src="images/banner2.jpg">
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container"> 
      <!-- Brand --> 
      <a class="navbar-brand mr-auto" href="#"><img src="images/logof.png" alt="FoxPro" />    FITNESS ESNTLS</a> 
      
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
      
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" jour="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="#">ACCUEIL</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#about-us">A PROPOS</a> </li>
          <li class="nav-item"> <a class="nav-link" href="sign/index.html">SIGNUP</a> </li>
		   <li class="nav-item"> <a class="nav-link" href="planning.php">PLANNING</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#contact">CONTACTEZ NOUS</a> </li>		
        </ul>
		
		
        <ul class="navbar-nav ml-5">
          <li class="nav-item"> <a class="nav-link btn btn-danger" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
        </ul>
      </div>
    </div>
  </nav>
 
</div>

 <div>  
 <h1 <I style="color:white;" <caption align=center> Notre planning pour cette semaine : </caption> </I> </h1>
 <hr>
 <?php
 foreach($result as $planning){
 ?>
 <tr>
 <td><?= $planning['Jour'] ?></td>
 <td><?= $planning['Seance 1'] ?></td>
 <td><?= $planning['Seance 2'] ?></td>
 <td><?= $planning['Seance 3'] ?></td>
 <td><?= $planning['Seance 4'] ?></td>

 <td><a href="detail.php?Jour=<?= $planning['Jour']?>">voir </a> </td>
 
 </tr>
 <?php 
 }
 ?>


</div>
<hr>
<hr>

<button class="favorite styled"
        type="button">
    AJOUTER UN PLANNING
</button>
<hr>
<hr>
<hr>

<button class="favorite styled"
        type="button">
    MODIFIER UN PLANNING
</button>
<hr>
<hr>
<hr>

<button class="favorite styled"
        type="button">
    SUPPRIMER UN PLANNING
</button>
<hr>
<hr>
<hr>
</div>

</body>


<footer class="container-flujour">
  <div class="container">
  
    <div class="row">
      <div class="col-md-3 footer1 d-flex wow bounceInLeft" data-wow-delay=".25s">
        <div class="d-flex flex-wrap align-content-center"> <a href="#"><img src="images/logof.png" alt="logo" /></a>
          <p> FITNESS ESSENTIALS </p>
          <p>&copy; 2020 SPORTDEV TEAM. All rights reserved.<br> Design by <a href="htseance2s://freehtml5.co" target="_blank">SPORTDEV TEAM</a>.</p>
        </div>
      </div>
      <div class="col-md-6 footer2 wow bounceInUp" data-wow-delay=".25s" jour="contact">
        <div class="form-box">
          <h4>CONTACTEZ NOUS</h4>
          <table class="table table-responsive d-table">
            <tr>
              <td><input type="text" class="form-control pl-0" placeholder="NAME" /></td>
              <td><input type="email" class="form-control pl-0" placeholder="EMAIL" /></td>
            </tr>
            <tr>
              <td colspan="2"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="text" class="form-control pl-0" placeholder="ADDRESS" /></td>
            </tr>
            <tr>
              <td colspan="2"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="text" class="form-control pl-0" placeholder="MESSAGES" /></td>
            </tr>
            <tr>
              <td colspan="2"></td>
            </tr>
            <tr>
              <td colspan="2" class="text-center pl-0"><button type="submit" class="btn btn-dark">SEND</button></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-md-3 footer3 wow bounceInRight" data-wow-delay=".25s">
        <h5>ADDRESS</h5>
        <p> La Marsa</p>
        <h5>PHONE</h5>
        <p>+216 24516862 / +216 20090286  </p>
        <h5>EMAIL</h5>
        <p>fitness-esntls@esprit.com</p>
        <div class="social-links">
          <ul class="nav nav-item">
            <li><a href="htseance2s://www.facebook.com/fh5co" class="btn btn-secondary mr-1 mb-2"><img src="images/facebook.png" alt="facebook" /></a></li>
            <li><a href="#"  class="btn btn-secondary mr-1 ml-1 mb-2"><img src="images/facebook.png" alt="facebook" /></a></li>
           
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
</html>
