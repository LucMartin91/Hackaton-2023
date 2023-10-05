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
          <div class="carousel-item">
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
          <div class="carousel-item">
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
                          <h1 class="">
                            Nom de l'endroit (ville etc)
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





    <!-- why section -->
    <section class="why_section layout_padding">
      <div class="container">
        <h3 class="custom_heading">
          Pourquoi nous ?
        </h3>
        <p class="font-weight-bold">
          Notre solution est éco-responsable et gratuite ! Avec cet outils entre vos main, vous saurez où vivre en île
          de france et où faire le plus attention à votre consommation !
        </p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="img_box">
              <img src="images/feature-1.png" alt="">
            </div>
            <div class="detail_box">
              <h5>
                Rapidité de résultat
              </h5>
              <p>
                communication rapide et efficace, précision des informations à la seconde en temps réel, en fonction des
                API environnementales les plus performantes !
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img_box">
              <img src="images/feature-2.png" alt="">
            </div>
            <div class="detail_box">
              <h5>
                Solution gratuite
              </h5>
              <p>
                Utilisation <b>totalement gratuite </b> de notre solution pour contrôler la qualité de vie dans votre
                secteur !
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img_box">
              <img src="images/feature-3.png" alt="">
            </div>
            <div class="detail_box">
              <h5>
                Sécurité
              </h5>
              <p>
                Avec une base de donnée d'utilisateurs chiffrée et des serveurs durcits, vos identifiants sont bien
                logés.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img_box">
              <img src="images/feature-4.png" alt="">
            </div>
            <div class="detail_box">
              <h5>
                Disponibilité 24h/24
              </h5>
              <p>
                Notre support reste à votre disposition 24 heures sur 24 ! joignable à l'adresse
                support@hackathon2023.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- end why section -->
  </div>

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <h3 class="custom_heading">
        Avis des consommateurs
      </h3>
      <p class="font-weight-bold">
        Lisez les différents avis donnés lors de présentation de notre solution à des organismes
      </p>
    </div>
    <div class="container"></div>
    <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="detail_box">
                  <div class="img_box">
                    <img src="images/client.jpg" alt="">
                  </div>
                  <div class="name_box">
                    <h5>
                      Daniele Dos Santos
                    </h5>
                    <h6>
                      Superbe solution !
                    </h6>
                  </div>
                </div>
                <div class="detail_text">
                  <p>
                    "Ce site est un outil incontournable pour tous ceux qui cherchent à optimiser leur temps et leur
                    santé. Les données météorologiques sont précises et faciles à comprendre, tandis que les
                    informations sur la qualité de l'air me permettent de planifier mes activités en extérieur de
                    manière plus responsable. De plus, les mises à jour sur le trafic routier me sauvent du temps et de
                    la frustration. Une ressource vraiment complète !"
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="detail_box">
                  <div class="img_box">
                    <img src="images/client.jpg" alt="">
                  </div>
                  <div class="name_box">
                    <h5>
                      José Lafitte
                    </h5>
                    <h6>
                      Facilité déconcertante
                    </h6>
                  </div>
                </div>
                <div class="detail_text">
                  <p>
                    "Je suis impressionné par la facilité d'utilisation de ce site. Les interfaces sont intuitives, et
                    je peux obtenir toutes les informations dont j'ai besoin en quelques clics seulement. Le fait que le
                    site combine à la fois la météo, la qualité de l'air et les conditions de trafic en fait un guichet
                    unique pour toutes mes préoccupations quotidiennes."
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="detail_box">
                  <div class="img_box">
                    <img src="images/client.jpg" alt="">
                  </div>
                  <div class="name_box">
                    <h5>
                      Michel Blanchon
                    </h5>
                    <h6>
                      Données précises
                    </h6>
                  </div>
                </div>
                <div class="detail_text">
                  <p>
                    "La valeur ajoutée de ce site est indéniable. La présentation visuelle est propre et moderne, ce qui
                    rend la navigation agréable. Les données sont mises à jour régulièrement, ce qui me donne
                    l'assurance que je consulte des informations fiables et à jour. C'est le genre de site que tout le
                    monde devrait avoir dans ses favoris !"
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>

    </div>
  </section>


  <!-- end client section -->


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