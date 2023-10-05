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

  <style>
    .search-popup {
      display: none;
      position: absolute;
      top: 100%;
      right: 0;
      background: white;
      border: 1px solid #ccc;
      width: 200px;
      z-index: 1001;
    }

    body.show-search::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1000;
      backdrop-filter: blur(5px);
    }
  </style>

</head>

<body>
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
                  <a class="nav-link" href="watch.php"> Top 5</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="status" href="contact.php">Connexion</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
              <div class="search-popup">
                <form action="resultat.php">
                  <input type="text" placeholder="Rechercher..." requiered>
                </form>
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

            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="slider_img-box">
                        <div>
                          <img src="images/watch.png" alt="" class="" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Nom de l'endroit (vile, etc)
                          </h1>
                          <p>
                            Indicateur 1 : valeur
                          </p>
                          <p>Indicateur 2 : valeur </p>
                          <p>Indicateur 3 : valeur </p>
                          <div class="d-flex">
                            SCORE GLOBAL
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <script>
            // Fonction pour obtenir la valeur d'un cookie
            function getCookie(name) {
              var value = "; " + document.cookie;
              var parts = value.split("; " + name + "=");
              if (parts.length == 2) return parts.pop().split(";").shift();
            }

            // Fonction pour définir un cookie
            function setCookie(name, value, minutes) {
              var expires = "";
              if (minutes) {
                var date = new Date();
                date.setTime(date.getTime() + (minutes * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
              }
              document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }

            // Mettez à jour le statut en fonction de la présence du cookie
            function updateStatus() {
              if (getCookie("user")) {
                document.getElementById("status").textContent = "Déconnexion";
              } else {
                document.getElementById("status").textContent = "Connexion";
              }
            }

            updateStatus();

            document.getElementById("status").addEventListener("click", function () {
              if (getCookie("user")) {
                setCookie("user", "", -1);  // Efface le cookie
              } else {
                setCookie("user", "loggedIn", 0.5);  // Crée un cookie avec une durée de vie de 30 minutes
              }
              updateStatus();
            });
          </script>
        </div>
      </div>
  </div>
  </div>

  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="custom_carousel-control">
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  </section>
  <!-- end slider section -->
  </div>
  <div class="bg">



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
        <a href="https://html.design/">Hackathon 2023</a>
      </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>