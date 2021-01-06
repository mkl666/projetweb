<?php 
session_start();
if(isset($_SESSION['username'])) {


  if($i['usertype']=='user')
  header("Location: ./../index.php");
  else
              header("Location: ./../index.php");

  exit;
 }  

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Créer Compte</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" action="./core/AjouterUsers.php">
                            <div class="form-group">
                                <label for="UserName"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="UserName" id="nom" placeholder="UserName"/>
                            </div>
                    
                            <div class="form-group">
                                <label for="Password"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="Password" id="Password" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Login"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/s.jpg" alt="sing up image"></figure>
                        <a href="sigin.html" class="signup-image-link">J'ai déjà un compte.</a>
                    </div>
                </div>
            </div>
        </section>

     
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>