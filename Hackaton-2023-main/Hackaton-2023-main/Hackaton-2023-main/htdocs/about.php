<?php
  include 'db_connect.php';
?>
<!DOCTYPE html>

<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta content="IE=edge" http-equiv="X-UA-Compatible" />
  <!-- Mobile Metas -->
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <!-- Site Metas -->
  <meta content="" name="keywords" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <title>Hackathon 2023</title>
  <!-- slider stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" rel="stylesheet"
    type="text/css" />
  <!-- bootstrap core css -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  </link>
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
          <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="watch.php"> Géolocaliser</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php" id="status">Connexion</a>

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
  <div class="bg">
    <!-- about section -->
    <section class="about_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 offset-md-2">
            <div class="about_detail-box">
              <h3 class="custom_heading">
                A propos de notre solution
              </h3>
              <p class="" id="description">
                Bienvenue sur notre plateforme dédiée à l'amélioration de votre expérience de vie dans le Grand Paris.
                Nous comprenons à quel point il est crucial de choisir le bon lieu de résidence ou de travail, et c'est
                pourquoi nous avons conçu un indicateur unique de qualité de vie. Notre outil prend en compte des
                facteurs essentiels tels que le trafic routier, la qualité de l'air et les conditions météorologiques
                actuelles pour vous fournir une évaluation complète de la qualité de vie dans une ville spécifique du
                Grand Paris. Notre objectif est de vous offrir une perspective claire et de vous aider à prendre des
                décisions éclairées pour une vie meilleure. Avec notre indicateur, découvrez où il fait bon vivre,
                travailler et se détendre dans la majestueuse région du Grand Paris.
              </p>
              <div>
                <a href="">
                  Lire la suite
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="about_img-box">
              <img alt="Carte verte d'île de france" src="images\image_preview_rev_1.png" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end about section -->
  </div>
  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item">
            <div class="img-box box-1">
              <img alt="" src="" />
            </div>
            <div class="detail-box">
              <p>
                Paris Ynov Campus
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item">
            <div class="img-box box-2">
              <img alt="" src="" />
            </div>
            <div class="detail-box">
              <p>
                +02 134567890
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item">
            <div class="img-box box-3">
              <img alt="" src="" />
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
      © 2023 All Rights Reserved By
      <a href="https://html.design/">Hackathon</a>
    </p>
  </section>
  <!-- footer section -->
  <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.js" type="text/javascript"></script>
  <div class="search-popup">
    <input placeholder="Rechercher..." type="text" />
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
    document.addEventListener("DOMContentLoaded", function () {
      const descriptionElem = document.getElementById("description");
      const readMoreElem = descriptionElem.nextElementSibling;
      const originalText = descriptionElem.innerHTML;

      if (originalText.length > 250) {
        descriptionElem.innerHTML = originalText.substring(0, 250) + "...";
      }

      readMoreElem.addEventListener("click", function (event) {
        event.preventDefault();

        // Expand the description text
        descriptionElem.innerHTML = originalText;

        // Fade out the read more button
        let opacity = 1;
        const fadeInterval = setInterval(function () {
          if (opacity <= 0.1) {
            clearInterval(fadeInterval);
            readMoreElem.style.display = "none";
          }
          readMoreElem.style.opacity = opacity;
          opacity -= 0.1;
        }, 50);
      });
    });
  </script>
</body>

</html>