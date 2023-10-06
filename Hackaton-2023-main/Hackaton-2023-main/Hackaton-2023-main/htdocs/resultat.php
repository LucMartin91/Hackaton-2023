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
                  <a class="nav-link" href="watch.php"> Géolocaliser</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="status" href="contact.php">Connexion</a>
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

    <!-- Contenu principal de la page (main) -->
    <main>
        <div class="container">
            <!-- Formulaire pour saisir les coordonnées -->
            <form id="coordinates-form">
                <label for="latitude">Latitude :</label>
                <input type="text" id="latitude" name="latitude" required>
                <label for="longitude">Longitude :</label>
                <input type="text" id="longitude" name="longitude" required>
                <button type="submit">Afficher la carte</button>
            </form>
            <!-- Div pour afficher la carte -->
            <div id="map" style="height: 400px;"></div>
            <!-- Div pour afficher les informations météo -->
            <div id="weather-info">
            <!-- Les informations météo seront insérées ici via JavaScript -->
            </div>
            <!-- Div pour afficher l'indice de qualité de l'air -->  
            <div id="air-quality"></div>
    </main>
    <!-- Lien vers la bibliothèque Leaflet pour la carte -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <!-- Votre script JavaScript pour afficher la carte, la météo et la qualité de l'air -->
    <script>
      // Fonction pour afficher la carte
      function showMap(latitude, longitude) {
          var map = L.map('map').setView([latitude, longitude], 12); // Créez une carte centrée sur les coordonnées saisies et définissez le niveau de zoom
  
          // Ajout d'une couche de carte de base (par exemple, OpenStreetMap)
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);
      }

      // Fonction pour afficher les données météo
      function showWeather(latitude, longitude) {
          const apiKey = '7f53e4156965184fc8909a4a8e0c27f9'; // Remplacez par votre clé API OpenWeatherMap
          const apiUrl = `https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${apiKey}&units=metric`;
  
          fetch(apiUrl)
              .then(response => response.json())
              .then(data => {
                  const temperature = data.main.temp;
                  const description = data.weather[0].description;
                  const weatherInfo = `Température : ${temperature} °C`;
  
                  // Affichez les informations météo dans la div weather-info
                  document.getElementById('weather-info').textContent = weatherInfo;
              })
              .catch(error => console.error('Erreur lors de la récupération des données météorologiques :', error));
      }
  
// Fonction pour afficher l'indice de qualité de l'air en fonction des coordonnées de latitude et de longitude
function showAirQuality(latitude, longitude) {
    const apiKey = '1d311b3fa4623a7230594c1db1a5cd65b56f4c62'; // Remplacez par votre clé API WAQI
    const apiUrl = `https://api.waqi.info/feed/geo:${latitude};${longitude}/?token=${apiKey}`;

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            if (data.status === 'ok') {
                const aqi = data.data.aqi;
                let airQuality;

                if (aqi <= 25) {
                    airQuality = 'Bon';
                } else if (aqi <= 50) {
                    airQuality = 'Moyen';
                } else if (aqi <= 75) {
                    airQuality = 'Mauvais';
                } else {
                    airQuality = 'Dangereux';
                }

                const airQualityInfo = `Indice de qualité de l'air : ${aqi}/100 - ${airQuality}`;

                // Affichez l'indice de qualité de l'air dans la div air-quality
                document.getElementById('air-quality').textContent = airQualityInfo;
            } else {
                console.error('Erreur lors de la récupération des données de qualité de l\'air.');
            }
        })
        .catch(error => console.error('Erreur lors de la récupération des données de qualité de l\'air :', error));
}

  
      // Écouteur d'événement pour soumettre le formulaire
      document.getElementById('coordinates-form').addEventListener('submit', function (e) {
          e.preventDefault(); // Empêche le formulaire de se soumettre
  
          const latitude = parseFloat(document.getElementById('latitude').value);
          const longitude = parseFloat(document.getElementById('longitude').value);
  
          if (!isNaN(latitude) && !isNaN(longitude)) {
              showMap(latitude, longitude);
              showWeather(latitude, longitude);
              showAirQuality('VOTRE_VILLE'); // Remplacez par le nom de votre ville
          } else {
              alert('Veuillez saisir des coordonnées valides.');
          }
      });
  </script>
  
</body>
</html>
