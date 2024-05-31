
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StrayShelter>LoginVet_form</title>
    <link rel="stylesheet" href="loginVet_form.css" />
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
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>



      <div class="wrapper">
        <div class="inner">
          <div class="image-holder">
            <img src="vetform_img.jpg" alt="image" />
          </div>
          <form id="pos" method="post" action="logcheck.php">
            <h3>LOGIN</h3>
            <div class="form-wrapper">
              <input type="text" placeholder="Username" name="user" class="form-control" />

              <input type="password" placeholder="Password" name="pass" class="form-control" />

              </div>
            <div class="text-center">
            <button class="btn btn-outline-dark "  type="submit">LOGIN</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Footer -->
<footer class="bg-dark text-center text-white" id="footer">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Navigations -->
    <section class="mb-4">

      <!-- Home -->
      <a class="btn btn-floating m-1" href="home.html" role="button"
        ><img src="home.png"></img
        ></a>

      <!-- About Us -->
      <a class="btn btn-floating m-1" href="aboutus.html" role="button"
        ><img src="aboutus.png"></img
        ></a>

      <!-- Contact Us -->
      <a class="btn btn-floating m-1" href="#!" role="button"
        ><img src="contactus.png"></img
      ></a>
      
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
