<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> AppSace </title>  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./index.css">
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


<div class="gscrollmenu scrollmenu " style="padding-top: 2rem;">   


<a   href="genre.php?gen=<?php echo urlencode('Art & Design')?>">  <span style=" margin: 10px; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px; padding: 3px 18px; border-radius: 12px;" >
Art & Design
 </span> </a>
<a   href="genre.php?gen=Business">  <span style=" margin: 10px; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px; padding: 3px 18px; border-radius: 12px;" >
Business
 </span> </a>
<a   href="genre.php?gen=Education">  <span style=" margin: 10px; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px; padding: 3px 18px; border-radius: 12px;" >
Education
 </span> </a>
<a   href="genre.php?gen=Dating">  <span style=" margin: 10px; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px; padding: 3px 18px; border-radius: 12px;" >
Dating
 </span> </a>
 <a  href="genre.php?gen=Beauty">  <span style=" margin: 0px; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px; padding: 3px 18px; border-radius: 12px;" >
Beauty
 </span> </a>
<a   href="genre.php?gen=<?php echo urlencode('Health & Fitness')?>">  <span style=" margin: 10px; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px; padding: 3px 18px; border-radius: 12px;" >
Health & Fitness
 </span> </a>
<a   href="genre.php?gen=Finance">  <span style=" margin: 10px; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px; padding: 3px 18px; border-radius: 12px;" >
Finance
 </span> </a>
<a   href="genre.php?gen=Lifestyle">  <span style=" margin: 10px; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px; padding: 3px 18px; border-radius: 12px;" >
Lifestyle
 </span> </a>
<a   href="genre.php?gen=Parenting">  <span style=" margin: 10px; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px; padding: 3px 18px; border-radius: 12px;" >
Parenting
 </span> </a>
 <a   href="genre.php?gen=<?php echo urlencode('Maps & Navigation')?>">  <span style=" margin: 10px; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px; padding: 3px 18px; border-radius: 12px;" >
 Maps & Navigation
 </span> </a>

</div>


    <div class="slider apps">
    <div style="display: flex; justify-content:space-between ; align-items: baseline">
    <h2> Music & Audio </h2>
    <p  class="geninf">  </p>
    </div> 
      
      <div class="scrollmenu">
        <!--  <a class="slidercontent" href="./files/dload.php?app_name=Spotify" >   <img src="./files/Images/download.jpeg" alt="" > <br> <span>  Spotify  </span></a>  -->


        <?php
        include("./conn.php");
        $sql1 = " SELECT * FROM apptable WHERE genre='Music & Audio' LIMIT 10";
        $select = mysqli_query($conn, $sql1);
        $num_rows = mysqli_num_rows($select);

        if ($num_rows > 0) {
          while ($rows = mysqli_fetch_array($select, MYSQLI_ASSOC)) {
            echo "<a class='slidercontent' href='./dload.php?app_name=" . $rows['app_name'] . "'>  <img src='./Images/cs.jpg' alt=''><br>" . $rows['app_name'] . " <span>  </span></a> ";
          }
        }
        ?>

        <!-- <a class='slidercontent' href='#news'>  Game 2     <span >    </span>  </a>  -->

      </div>
    </div>



    <div class="slider ">
    <div style="display: flex; justify-content:space-between ; align-items: baseline">
    <h2> Photography </h2>
    <p  class="geninf" >  </p>
    </div> 
      <div class="scrollmenu">
        

      <?php
        include("./conn.php");
        $sql2 = " SELECT * FROM apptable WHERE genre='photography' LIMIT 10 ";
        $select2 = mysqli_query($conn, $sql2);
        $num_rows2 = mysqli_num_rows($select2);

        if ($num_rows2 > 0) {
          while ($rows2 = mysqli_fetch_array($select2, MYSQLI_ASSOC)) {
            echo "<a class='slidercontent' href='./dload.php?app_name=" . $rows2['app_name'] . "'>  <img src='./Images/cs3.jpg' alt=''><br>" . $rows2['app_name'] . " <span>  </span></a> ";
          }
        }
        ?>


      </div>
    </div>


    <div class="slider ">
    <div style="display: flex; justify-content:space-between ; align-items: baseline">
    <h2> Social </h2>
    <p class="geninf">  </p>
    </div> 
      <div class="scrollmenu">
        

      <?php
        include("./conn.php");
        $sql2 = " SELECT * FROM apptable WHERE genre='social' LIMIT 10 ";
        $select2 = mysqli_query($conn, $sql2);
        $num_rows2 = mysqli_num_rows($select2);

        if ($num_rows2 > 0) {
          while ($rows2 = mysqli_fetch_array($select2, MYSQLI_ASSOC)) {
            echo "<a class='slidercontent' href='./dload.php?app_name=" . $rows2['app_name'] . "'>  <img src='./Images/cs4.jpg' alt=''><br>" . $rows2['app_name'] . " <span>  </span></a> ";
          }
        }
        ?>


      </div>
    </div>





    <div class="slider ">
    <div style="display: flex; justify-content:space-between ; align-items: baseline">
    <h2> Shopping </h2>
    <p class="geninf">  </p>
    </div> 
      <div class="scrollmenu">
        

      <?php
        include("./conn.php");
        $sql2 = " SELECT * FROM apptable WHERE genre='shopping' LIMIT 10 ";
        $select2 = mysqli_query($conn, $sql2);
        $num_rows2 = mysqli_num_rows($select2);

        if ($num_rows2 > 0) {
          while ($rows2 = mysqli_fetch_array($select2, MYSQLI_ASSOC)) {
            echo "<a class='slidercontent' href='./dload.php?app_name=" . $rows2['app_name'] . "'>  <img src='./Images/cs.jpg' alt=''><br>" . $rows2['app_name'] . " <span>  </span></a> ";
          }
        }
        ?>


      </div>
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