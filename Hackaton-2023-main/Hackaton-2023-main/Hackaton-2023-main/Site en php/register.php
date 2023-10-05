<?php
  include 'db_connect.php';
  ?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Hackathon 2023</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
            <span>
              Hackathon 2023
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="watch.php"> Top 5 </a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

  </div>


  <!-- contact section -->

  <section class="contact_section layout_padding">
    <h2 class="custom_heading text-center">
      ENREGISTREMENT
    </h2>
    <div class="container mt-5 pt-5">
      <form action="index.php">
        <div>
          <input type="email" id="emailInput" placeholder="EMAIL">
        </div>
        <div>
          <input type="password" id="password" placeholder="MOT DE PASSE">
        </div>
        <div>
          <input type="password" id="confirm_password" placeholder="CONFIRMEZ MOT DE PASSE">
        </div>
        <div class="d-flex justify-content-center mt-5 pt-5">
          <button type="submit" id="submitBtn">
            s'enregistrer
          </button>
        </div>
      </form>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Paris Ynov Campus
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                +02 1234567890
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>



  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      © 2020 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <div class="search-popup">
    <input type="text" placeholder="Rechercher...">
  </div>

  <script>
    document.querySelector('.nav_search-btn').addEventListener('click', function (event) {
      event.preventDefault();
      document.querySelector('.search-popup').style.display = 'block';
      document.body.classList.add('show-search');
    });

    document.addEventListener('click', function (event) {
      if (!event.target.closest('.search-popup') && !event.target.closest('.nav_search-btn')) {
        document.body.classList.remove('show-search');
        document.querySelector('.search-popup').style.display = 'none';
      }
    });
  </script>
  <script>
    document.getElementById('submitBtn').addEventListener('click', function (event) {
      var email = document.getElementById('emailInput').value;
      var password = document.getElementById('password').value;
      var confirmPassword = document.getElementById('confirm_password').value;

      // Réinitialise les styles
      document.getElementById('emailInput').style.borderColor = '';
      document.getElementById('password').style.borderColor = '';
      document.getElementById('confirm_password').style.borderColor = '';

      // Vérification du format d'email
      var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

      if (!email.match(emailRegex) || email.trim() === "") {
        event.preventDefault(); // Empêche la soumission du formulaire
        document.getElementById('emailInput').style.borderColor = 'red';
        alert("Veuillez entrer une adresse e-mail valide !");
        return; // Sort de la fonction pour ne pas exécuter les autres vérifications
      }

      // Si les mots de passe ne correspondent pas
      if (password !== confirmPassword) {
        event.preventDefault(); // Empêche la soumission du formulaire
        document.getElementById('password').style.borderColor = 'red';
        document.getElementById('confirm_password').style.borderColor = 'red';
        alert("Les mots de passe ne correspondent pas!");
      }

    });
  </script>


</body>

</html>