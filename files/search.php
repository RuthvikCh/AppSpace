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
        <link rel="stylesheet" href="./search.css">

</head>
<body>
   
<?php
$app_name = $_POST['appname'];
//echo $app_name;
?>


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
        <h3 class="gsans">Search Results</h3>
      <div class="searchout">
      <?php
include("conn.php");
  $sql1 = " SELECT DISTINCT * FROM apptable WHERE app_name like '%$app_name%' ";
  $select = mysqli_query($conn, $sql1);
  $num_rows = mysqli_num_rows($select);
  $rows = mysqli_fetch_array($select, MYSQLI_ASSOC);
  //echo $num_rows;
  if ($num_rows > 0) {
    while ($rows = mysqli_fetch_array($select, MYSQLI_ASSOC)) {
      ?>
      <?php
       $aname=$rows['app_name'];
      echo "
  <a href='dload.php?app_name=".urlencode($aname) ."'> 
    <div class='outitem'>

      <img src='./Images/download.png' alt=''> 
      <div class='itemdetails' > "; ?>  <?php 
      if (strlen($rows['app_name']) < 21 ){
        echo "<span class='slider' style='font-weight: 500; font-size:1.6rem;'>  " . $rows['app_name'] . " </span> ";
    }
    else
    {
      echo"<span class='slider' style='font-weight: 500; font-size:1.2rem;'>  " . $rows['app_name'] . " </span> ";

    }
      
      echo"
      <br> 
      <span> Rating : " . $rows['rating'] . "  <i class='bi bi-star'></i></span> 
      <br> 
      <span> Reviews : " . $rows['reviews'] . " </span>
      <br> 
      <span> Downloads : " . $rows['installs'] . " </span>
      </div>

    </div>
  </a>
   ";
    }
  }
  else{
    echo" <span class='gsans' style='font-weight: 500; font-size:1.6rem;'> Oops No records found! </span> ";
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