<?php
  include 'db_connect.php';
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />



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
          <a class="navbar-brand" href="index.html">
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
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="watch.html"> Top 5</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="status" href="contact.html">Connexion</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
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
                          <div id="map" style="height: 400px;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Paris
                          </h1>
                          <p id="temperature">Température : en attente de données...</p>
                          <p id="indicateur2-paris">Qualité de l'air (Paris) : En attente de données...</p>
                          <div class="d-flex">
                            <a href="" class="slider-btn1 mr-3">
                              Read More
                            </a>
                            <a href="" id="status" class="slider-btn2">
                              Connexion
                            </a>
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
                          <div id="map1" style="height: 400px;"></div>

                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Nanterre
                          </h1>
                          <p id="temperature-nanterre">Température : en attente de données...</p>
                          <p id="indicateur2-nanterre">Qualité de l'air (Nanterre) : En attente de données...</p>
                          <div class="d-flex">
                            <a href="" class="slider-btn1 mr-3">
                              Read More
                            </a>
                            <a href="" id="status" class="slider-btn2">
                              Connexion
                            </a>
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
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="slider_img-box">
                        <div>

                          <div id="map2" style="height: 400px;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="slider_item-detail">
                        <div>
                          <h1 class="">
                            Evry
                          </h1>
                          <p id="temperature-evry">Température : en attente de données...</p>
                          <p id="indicateur2-evry">Qualité de l'air (Évry) : En attente de données...</p>
                          <div class="d-flex">
                            <a href="" class="slider-btn1 mr-3">
                              Read More
                            </a>
                            <a href="" id="status" class="slider-btn2">
                              Connexion
                            </a>
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
          Why choose Us
        </h3>
        <p class="font-weight-bold">
          It is a long established fact that a reader will be distracted by the readable content of a page
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
                Fast Delivery
              </h5>
              <p>
                variations of passages of Lorem Ipsum available, but the majority have suffered
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
                Utilisation gratuite de nos API pour contrôler la qualité de vie dans notre
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img_box">
              <img src="images/feature-3.png" alt="">
            </div>
            <div class="detail_box">
              <h5>
                Best Quality
              </h5>
              <p>
                variations of passages of Lorem Ipsum available, but the majority have suffered
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img_box">
              <img src="images/feature-4.png" alt="">
            </div>
            <div class="detail_box">
              <h5>
                24x7 Customer support
              </h5>
              <p>
                variations of passages of Lorem Ipsum available, but the majority have suffered
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
        Testimonial
      </h3>
      <p class="font-weight-bold">
        It is a long established fact that a reader will be distracted by the readable content of a page
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
                Lorem Ipsum is simply dummy text
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

  <script>
    // Initialisation de la carte de Paris
    var mapParis = L.map('map').setView([48.8566, 2.3522], 12); // Coordonnées de Paris et niveau de zoom

    // Ajout d'une couche de carte de base (par exemple, OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mapParis);

    // Vous pouvez ajouter des marqueurs, des polygones, etc., à la carte ici
</script>

<script>
    // Initialisation de la carte centrée sur Nanterre
    var mapNanterre = L.map('map1').setView([48.8911, 2.2046], 14); // Coordonnées de Nanterre et niveau de zoom

    // Ajout d'une couche de carte de base (par exemple, OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mapNanterre);

    // Vous pouvez ajouter des marqueurs, des polygones, etc., à la carte ici
</script>

<script>
    // Initialisation de la carte centrée sur Évry
    var mapEvry = L.map('map2').setView([48.6208, 2.4408], 14); // Coordonnées d'Évry et niveau de zoom

    // Ajout d'une couche de carte de base (par exemple, OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mapEvry);

    // Vous pouvez ajouter des marqueurs, des polygones, etc., à la carte ici
</script>


  <script>
    const apiKey = '7f53e4156965184fc8909a4a8e0c27f9';

    function getWeather() {
      // Paris
      const latitudeParis = 48.8566; // Latitude de Paris
      const longitudeParis = 2.3522; // Longitude de Paris
      const apiUrlParis = `https://api.openweathermap.org/data/2.5/weather?lat=${latitudeParis}&lon=${longitudeParis}&appid=${apiKey}&units=metric`;

      // Nanterre
      const latitudeNanterre = 48.8911; // Latitude de Nanterre
      const longitudeNanterre = 2.2046; // Longitude de Nanterre
      const apiUrlNanterre = `https://api.openweathermap.org/data/2.5/weather?lat=${latitudeNanterre}&lon=${longitudeNanterre}&appid=${apiKey}&units=metric`;

      // Évry
      const latitudeEvry = 48.6231; // Latitude de Évry
      const longitudeEvry = 2.4404; // Longitude de Évry
      const apiUrlEvry = `https://api.openweathermap.org/data/2.5/weather?lat=${latitudeEvry}&lon=${longitudeEvry}&appid=${apiKey}&units=metric`;

      // Obtenez les données pour Paris
      fetch(apiUrlParis)
        .then(response => response.json())
        .then(data => {
          const temperatureParis = data.main.temp;
          document.getElementById('temperature').textContent = `Température à Paris : ${temperatureParis} °C`;
        })
        .catch(error => console.error('Erreur lors de la récupération des données météorologiques pour Paris :', error));

      // Obtenez les données pour Nanterre
      fetch(apiUrlNanterre)
        .then(response => response.json())
        .then(data => {
          const temperatureNanterre = data.main.temp;
          document.getElementById('temperature-nanterre').textContent = `Température à Nanterre : ${temperatureNanterre} °C`;
        })
        .catch(error => console.error('Erreur lors de la récupération des données météorologiques pour Nanterre :', error));

      // Obtenez les données pour Évry
      fetch(apiUrlEvry)
        .then(response => response.json())
        .then(data => {
          const temperatureEvry = data.main.temp;
          document.getElementById('temperature-evry').textContent = `Température à Évry : ${temperatureEvry} °C`;
        })
        .catch(error => console.error('Erreur lors de la récupération des données météorologiques pour Évry :', error));
    }

    // Utilisez addEventListener pour écouter l'événement de chargement de la page
    window.addEventListener('load', getWeather);
  </script>

  <script>
    const apiKey1 = '1d311b3fa4623a7230594c1db1a5cd65b56f4c62'; // Remplacez par votre clé API WAQI

    function getAirQualityData(city, elementId) {
      // URL de l'API WAQI pour obtenir les données de qualité de l'air
      const apiUrl = `https://api.waqi.info/feed/${city}/?token=${apiKey1}`;

      fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          // Vérifiez si les données ont été correctement récupérées et si "status" est égal à "ok"
          if (data.status === 'ok') {
            const aqi = data.data.aqi; // Indice de qualité de l'air

            // Déterminez la qualité de l'air en fonction de l'indice (vous pouvez ajuster les seuils si nécessaire)
            let airQuality;
            if (aqi <= 25) {
              airQuality = aqi + '/100 -' + ' Bon '; // Bonne qualité de l'air
            } else if (aqi > 25 & aqi <= 50) {
              airQuality = aqi + '/100 -' + ' Moyen '; // Moyenne qualité de l'air
            } else if (aqi > 50 & aqi <= 75) {
              airQuality = aqi + '/100 -' + ' Mauvais '; // Mauvaise qualité de l'air
            } else if (aqi > 75) {
              airQuality = aqi + '/100 -' + ' Dangereux '; // Mauvaise qualité de l'air
            }
            // Affichez la qualité de l'air à la place de "Qualité de l'air : En attente de données..."
            document.getElementById(elementId).textContent = `Indice de pollution : ${airQuality}`;
          } else {
            // Gestion des erreurs si "status" n'est pas "ok"
            console.error('Erreur lors de la récupération des données de qualité de l\'air.');
          }
        })
        .catch(error => console.error('Erreur lors de la récupération des données :', error));
    }

    // Appelez la fonction pour récupérer les données de qualité de l'air au chargement de la page
    window.onload = function () {
      getAirQualityData('Paris', 'indicateur2-paris');
      getAirQualityData('Nanterre', 'indicateur2-nanterre');
      getAirQualityData('Evry', 'indicateur2-evry');
    };
  </script>



</body>

</html>