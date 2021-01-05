<?php 
require "postmodel.php";

$mode = "ADD";
$id = null;
$p = null;
if (isset($_GET["id"])){
    $mode = "EDIT";
    $id = $_GET["id"];
    $p = post::getById($id);

}
echo($mode);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CommunityStyle.css" type="text/css">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <script src="index.js"></script>
    <title>Document</title>


</head>

<body >

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
                <li class="nav-item"> <a class="nav-link" href="#about-us">About</a> </li>
                <li class="nav-item"> <a class="nav-link" href="sign/signup.html">SIGNUP</a> </li>
		        <li class="nav-item"> <a class="nav-link" href="sign/Community.html">Community</a> </li>

                <li class="nav-item"> <a class="nav-link" href="#contact">Contact</a> </li>
            </ul>
        <ul class="navbar-nav ml-5">
          <li class="nav-item"> <a class="nav-link btn btn-danger" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="fh5co-banner-text-box">
      <div class="quote-box pl-5 pr-5 wow bounceInRight">
        <h2> Fitness Essntls <br><span>BY SPORTDEV TEAM	</span> </h2>
      </div>
      <a href="#" class="btn text-uppercase btn-outline-danger btn-lg mr-3 mb-3 wow bounceInUp"> What's new</a> <a href="#" class="btn text-uppercase btn-outline-danger btn-lg mb-3 wow bounceInDown"> Courses</a> </div>
  </div>
</div>
<div class="container-fluid fh5co-network">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4 class="wow bounceInUp">FOR NETWORK</h4>
        <h2 class="wow bounceInRight">MEMBERS</h2>
        <hr />
        <h5 class="wow bounceInLeft"> Covid News</h5>
        <p class="wow bounceInDown">Concernant notre protocole sanitaire, Notre salle vous propose un programme d'entrainement à distance permettant de garantir une bonne condition physique en attendant la reprise de l'état normal. </p>
      </div>
      <div class="col-md-6">
        <figure class="wow bounceInDown"> <img src="images/about-img.jpg" alt="gym" class="img-fluid" /> </figure>
      </div>
    </div>
  </div>
</div>
    <div style="background :#ff8013;">

        <form id="myform" action="controller/postcontroller.php" method="POST" enctype="multipart/form-data">

            <input hidden id="x"  type="text" name="action" class="Input" style="width: 225px" value="<?php echo($mode == "ADD" ? "add":"update"); ?>">
            <input hidden id="userid" value="1" type="text" name="userid" class="Input"  style="width: 225px" required>
            <input hidden type="text" name="id" value="<?php echo($mode=="ADD" ? "" : $p->id_post); ?>">

            <br><br>
            <label> Comment: <br>
                <textarea maxlength="120" id="usercomment" name="usercomment" class="Input" style="width: 300px"
                    required><?php echo($mode=="ADD" ? "":$p->description); ?></textarea>
            </label>
            <br><br>
            <div style="background :#ff8013;">
                <label for="img">Select image:</label>
                <input type="file" id="img" name="img" accept="image/*">

            </div>

        </form>
        <a href="phototest.php">supprimer</a>
        <a href="phototest2.php">afficher</a>
    </div>


    <div>
        <div style="background :#ff8013;"><input onclick="checklanguage()" type="button" name="Submit"
                value="Submit your comment " class="Submit">
        </div>

        <div id="displaycomment"></div>
        <script>
            var swear_words_arr = new Array("fuck", "bitch", "sucks");
            var countingbadwords;

            function displayComment() {
                document.getElementById("myform").submit();
                commentbox = document.createElement('div');
                commentbox.setAttribute("class", "commentbox");
                br = document.createElement("br");
                g = document.createElement('div');
                g.setAttribute("class", "usernameincomment");
                g1 = document.createElement('div');
                g1.setAttribute("class", "usernamecommentincomment");
                document.getElementById("displaycomment").appendChild(commentbox);
                document.getElementById("displaycomment").lastChild.appendChild(g)
                document.getElementById("displaycomment").lastChild.lastChild.innerHTML +=
                    document.getElementById("username").value;
                document.getElementById("displaycomment").lastChild.appendChild(g1);
                document.getElementById("displaycomment").lastChild.lastChild.innerHTML +=
                    document.getElementById("usercomment").value;


                //display image
                imgdiv = document.createElement('img');
                document.getElementById("displaycomment").lastChild.appendChild(imgdiv);
                var imgidpath = document.getElementById(f)
                var fReader = new FileReader();
                fReader.readAsDataURL(imgidpath.files[0]);
                fReader.onloadend = function (event) {
                    var img = document.getElementById("displaycomment").lastChild.lastChild;
                    img.src = event.target.result;
                }
                document.getElementById("displaycomment").lastChild.lastChild.setAttribute("width", "500px");




            }

            function checklanguage() {
                countingbadwords = 0;
                var textcom = document.getElementById("usercomment").value;
                teds = document.getElementById("img").value;
                for (var i = 0; i < swear_words_arr.length; i++) {
                    if (textcom.includes(swear_words_arr[i])) { //fuck
                        countingbadwords++;
                        window.alert("please veify your comment");
                    }
                }
                if (countingbadwords == 0) {
                    displayComment();

                }


            }       
        </script>
    </div>
</body>

</html>