<?PHP
include_once "../controller/animateurC.php";
include_once "../models/animateur.php";

$animateur1C=new animateurC();
$animateurs=$animateur1C->recupereranimateurs();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Hello, world!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="#0">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="#0">
              <i class="material-icons">Animateur</i>
              <p>Animateur</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">notifications</i> Notifications
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="limiter">
    
      <div class="wrap-table100">
        <div class="table100 ver1">
          <div class="table100-firstcol">
          <table id="myTable" >
                                        <thead>
                                            <tr class="row100 head">
                                                <th class="cell100 column1">ID</th>
                                                <th class="cell100 column1">Nom</th>
                                                <th class="cell100 column1">Prenom</th>
                                                <th class="cell100 column1">Email</th>
                                                <th class="cell100 column1">Telephone</th>
                                                <th class="cell100 column1">Activite</th>
                                                <th class="cell100 column1">Modifier</th>
                                                <th class="cell100 column1">Supprimer</th>
                                 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($animateurs as $row)
                                     {
                                    ?>
                                    <tr class="row100 head">

                                        <td class="cell100 column1"><?php echo $row["id"] ; ?></td>
                                        <td class="cell100 column1"><?php echo $row["nom"] ; ?></a></td>
                                        <td class="cell100 column1"><?php echo $row["prenom"] ; ?></a></td>
                                        <td class="cell100 column1"><?php echo $row["email"] ; ?></td>
                                        <td class="cell100 column1"><?php echo $row["telephone"] ; ?></td>
                                        <td class="cell100 column1"><?php echo $row["activite"] ; ?></td>
                                        <td class="cell100 column1"><a href="modifieranimateur.php?id=<?PHP echo $row['id']; ?>">Modifier</a></td>
                                        <td>
                                <form method="POST" action="supprimerAnimateur.php">
                                
                                <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                  <input type="submit" name="supprimer" value="Supprimer">
                                    
                                </form>
                                
                            </td>
                            
                                       
                                               
                                          </tr>
                                        

                                    
                                    <?php } ?>
                                        </tbody>
                                        
                                    </table>
                     </div>
        </div>
      </div>
 
  </div>
        </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
</body>

</html>