<?php
      
require('checkdata.php');
$query="select * from drregister";
$result=mysqli_query($obj,$query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Veterinary Doctor</title>
    <link rel="stylesheet" href="doctGallery.css" />
    <link rel="icon" href="title logo.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=EB+Garamond&family=Merriweather:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Caveat&family=EB+Garamond&family=Merriweather:wght@700&family=Roboto:wght@100&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <body class="fade-in">
    <img id="img" src="background1.jpg" alt="" />
    <div>
      <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.html"
            ><img id="logo" src="logo.png" alt=""
          /></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="ms-lg-20">
              <ul
                class="navbar-nav justify-content-end me-auto mb-2 mb-lg-0"
                id="navele"
              >
                <li class="nav-item">
                  <a class="nav-link" href="home.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="aboutus.html">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contactus.html">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>


      <p id="upcardstext">Let's Help The Needy!</p>
     
      
      <?php 
      while($rows=mysqli_fetch_assoc($result))
      {
      ?>    
    
      <div class="outer">

        <div class="inner ">
              <form id="pos" action="#" >
                <div>
                    
                    <ul class="list-group">
                        <li class="list-group-item"><p class="lengthOff"><span>Doctor's Name : <?php  echo $rows['name'];?> </span> </p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Contact No. :  <?php  echo $rows['phone'];?></span></p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Doctor's Address :  <?php  echo $rows['address'];?></span></p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Doctor's Clinic Address :  <?php  echo $rows['clinicadd'];?></span></p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Experience of Work : <?php  echo $rows['exp'];?> Years. </span></p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Area possible to visit :  <?php  echo $rows['servarea'];?> KM</span></p></li>
                        
                        <li class="list-group-item"><p class="lengthOff"><span>Qualification :  <?php  echo $rows['quali'];?></span></p></li>
                      </ul>
                  </div>

                  <div class="text-center">
                    <a href="tel:<?php echo $rows['phone']?>" class="btn btn-outline-dark" style="margin-top: 2%;">CALL NOW</a>
                    </div>
              </form>
        </div>
      </div>

      <?php 
    }
      ?>

      
    


      <!-- Footer -->
<footer class="bg-dark text-center text-white" id="footer">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Navigations -->
    <section class="mb-4">

      <!-- Home -->
      <a class="btn btn-floating m-1" href="home.html" role="button"
        ><button class="btn btn-1 btn-1f" style="color: white;">HOME</button>></a>

      <!-- About Us -->
      <a class="btn btn-floating m-1" href="aboutus.html" role="button"
        ><button class="btn btn-1 btn-1f" style="color: white;">ABOUT US</button>></a> 

      <!-- Contact Us -->
      <a class="btn btn-floating m-1" href="contactus.html" role="button"
        ><button class="btn btn-1 btn-1f" style="color: white;">CONTACT US</button>></a>
      

      
    </section>

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        <b>StrayShelter: </b>This project is an intiative to create public awareness for caring and adoption of stray animals. Developed for fulfillment of Capstone Project.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links to Social Media -->
    <section class="mb-4">

      <!-- Twitter -->
      <a class="btn btn-floating m-1" href="#!" role="button"
        ><img src="twitter.png"></img
        ></a>

      <!-- Instagram -->
      <a class="btn btn-floating m-1" href="#!" role="button"
        ><img src="insta.png"></img
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-floating m-1" href="#!" role="button"
        ><img src="Linkedin.png"></img
        ></a>

    </section>
    <!-- Section: Links to Social Media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="index.html">StrayShelter.com</a>
  </div>
  <!-- Copyright -->
</footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
