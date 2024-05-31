<?php
      
require('checkdata.php');
$query="select * from petdata";
$result=mysqli_query($obj,$query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StrayShelter</title>
    <link rel="stylesheet" href="petGallery.css" />
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


      <p id="upcardstext">Let's Adopt a Forever Friend Today!</p>

       <?php 
      while($rows=mysqli_fetch_assoc($result))
      {
      ?> 
      <div class="outer">

        <div class="inner ">
            <div class="image-holder">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rows['image']); ?>" alt="imagehere" class="img-thumbnail" style="width: 25rem; height: 18rem;">
              </div>
              <form id="pos"  >
                <div>
                    
                    <ul class="list-group">
                        <li class="list-group-item"><p class="lengthOff"><span>Animal Type : <?php  echo $rows['animaltype'];?> </span></p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Age of Animal(Approx months) : <?php  echo $rows['age'];?> Months  </span></p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Animal Breed : <?php  echo $rows['breed'];?>  </span></p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Pet Owner's Name : <?php  echo $rows['owner_name'];?>  </span></p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Pet Owner's Contact : <?php  echo $rows['contact'];?>  </span></p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Address : <?php  echo $rows['address'];?>  </span></p></li>
                      </ul>
                  </div>

                  <div class="text-center">
                    <a href="adoptpet.html" type="submit" class="btn btn-outline-dark" style="margin-top: 2%;">ADOPT PET</a>
                    </div>
              </form>
        </div>
      </div>

      <?php 
    }
      ?>
      <!-- <div class="outer">
        <div class="inner">

            <div class="image-holder">
                <img src="vetform_img.jpg" alt="..." class="img-thumbnail" style="width: 25rem; height: 18rem;">
              </div>
              <form id="pos" action="#" >
                <div>
                    
                    <ul class="list-group">
                        <li class="list-group-item"><p class="lengthOff"><span>Animal Type :  </span>Dog</p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Age of Animal(Approx) :  </span>8 Years</p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Animal Breed :  </span>German Shepard</p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Pet Owner's Name :  </span>Girish Nikam</p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Pet Owner's Contact :  </span>9812239123</p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Address :  </span>Shirdi Ahmednagar -419321</p></li>
                      </ul>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-outline-dark" style="margin-top: 2%;">ADOPT PET</button>
                    </div>
              </form>
        </div>
      </div>

      <div class="outer">
        <div class="inner">
            <div class="image-holder">
                <img src="01.png" alt="..." class="img-thumbnail" style="width: 25rem; height: 18rem;">
              </div>
              <form id="pos" action="#" >
                <div>
                    
                    <ul class="list-group">
                        <li class="list-group-item"><p class="lengthOff"><span>Animal Type :  </span>Dog</p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Age of Animal(Approx) :  </span>4</p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Animal Breed :  </span>Indie</p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Pet Owner's Name :  </span>Abhishek Gandal</p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Pet Owner's Contact :  </span>9123453456</p></li>
                        <li class="list-group-item"><p class="lengthOff"><span>Address :  </span>Newasa Ahmednagar -401023</p></li>
                      </ul>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-outline-dark" style="margin-top: 2%;">ADOPT PET</button>
                    </div>
              </form>
        </div>
      </div>

     -->


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
