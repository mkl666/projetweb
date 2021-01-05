<div class="article-container">
    <?php
    $sql = "SELECT FROM crud";
    $result = mysql_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    if ($queryResults > 0)
     {
      while ($row = mysqli_fetch_assoc($result))
       {
        echo "<div
        ";
      }
    }
    ?>




      <form action="process.php" method="POST">
    <input type="text" name="search" placeholder="Search..">
    <button type="submit" name="submit-search"></button>
  </form>

  
  </div>



  <script src="" https //code.jquery.com/jquery-2.1.3.min.js "></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>