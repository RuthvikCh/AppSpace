<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> App Search </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./index.css">
        <link rel="stylesheet" href="./categories.css">
</head>
<body>
   

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
                <div class="container-fluid" style="width: 80%; ">
                  <a class="navbar-brand" href="../index.php"> AppSpace </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                      </li>
                      <li class="nav-item">
            <a class="nav-link" href="./games.php"> Games </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./apps.php"> Apps </a>
          </li>
                      <li class="nav-item">
            <a class="nav-link" href="./categories.php"> Categories </a>
          </li>
                      
                    </ul>
                    <form class="d-flex" action="./search.php" method="POST">
          <input type="text" name="appname" class="form-control me-2"  placeholder=" Enter Name" required>
          <input type="submit"  value="Search" class="btn btn-outline-success">
          
        </form>
                  </div>
                </div>
        </nav>



  <div class="container">
        <center><p> Here at AppSpace we have categorized our 40,000 plus  apps and games into 40 plus genres for our user convenience. <br> You can choose from our wide range of genres. </p> </center>


        

        <?php

include("conn.php");
  $sql1 = " SELECT Distinct (genre) FROM apptable ORDER by genre ;";
  $select = mysqli_query($conn, $sql1);
  $num_rows = mysqli_num_rows($select);
  $rows = mysqli_fetch_array($select, MYSQLI_ASSOC);
 
  if ($num_rows > 0) {
        echo "<span class='gsans' style='font-size: 2rem; margin-left:2rem;' >Categories offered : </span>  <span> About ".$num_rows." as of now </span> ";
        echo"<div class='catall'>";
    while ($rows = mysqli_fetch_array($select, MYSQLI_ASSOC)) {
        $finder =$rows['genre'];
      echo" <a href='./genre.php?gen=".urlencode($rows['genre']) ."'> <div class='catbox'>
      <span class='gsans head'> ". $finder ." </span> <br>";
      
      $sql2 = " SELECT id FROM apptable WHERE genre = '$finder' ";
      $select2 = mysqli_query($conn, $sql2);
      $num_rows2 = mysqli_num_rows($select2);
      echo" <span class='roboto'> About  " . $num_rows2." apps </span>
     
</div>  </a>  ";
      
    }
  }
  else{
    echo" <span class='gsans' style='font-weight: 500; font-size:1.6rem;'> Oops, No genres found! </span> ";
  }
                               
?>
                
        </div>
  </div>











  <footer class="bg-dark text-center text-white">
<!-- Grid container -->
<div class="container p-4 pb-0">
  <!-- Section: Social media -->
  <section class="mb-4">

    <!-- Twitter -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" style="border-radius: 36px;">
    <i class="bi bi-twitter" style="font-size: 1.4rem;"></i>
    </a>


    <!-- Instagram -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" style="border-radius: 36px;">
    <i class="bi bi-instagram" style="font-size: 1.4rem;"></i>
    </a>

    <!-- Linkedin -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" style="border-radius: 36px;">
    <i class="bi bi-linkedin" style="font-size: 1.4rem;"></i>
    </a>

    <!-- Github -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"style="border-radius: 36px;"
      ><i class="bi bi-github" style="font-size: 1.4rem;"></i
    ></a>
  </section>
  <!-- Section: Social media -->
</div>
<!-- Grid container -->

<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
Copyright © 2022 All rights reserved | This website is made with <i class="bi bi-heart"></i>  by 
  <a class="text-white" href="http://ruthvik.tk"> Ruthvik</a>
</div>
<!-- Copyright -->
</footer>

</body>
</html>