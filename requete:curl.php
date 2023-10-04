<?php
// Liste des villes de l'Île-de-France
$villes = ["Paris", "Versailles", "Créteil", "Nanterre", "Évry", "Cergy", "Melun", "Fontainebleau"];

if(isset($_GET['ville'])) {
    $ville = $_GET['ville'];

    // Vérifie si la ville est dans la liste
    if(in_array($ville, $villes)) {
        // Utilisez curl pour récupérer les données météorologiques de la ville spécifiée
        $command = "curl -s 'wttr.in/$ville'";
        $meteo = shell_exec($command);

        // Utilisez curl pour récupérer les données de pollution et de qualité de l'air
        $command_pollution = "curl -s 'https://api.waqi.info/feed/$ville/?format=json'";
        $pollution_data = json_decode(shell_exec($command_pollution));

        if ($pollution_data && isset($pollution_data->data->aqi, $pollution_data->data->iaqi->pm25->v)) {
            $aqi = $pollution_data->data->aqi;
            $pm25 = $pollution_data->data->iaqi->pm25->v;

            // Affichez les données météorologiques, la pollution et la qualité de l'air
            echo "<h1>Météo à $ville :</h1>";
            echo "<pre>$meteo</pre>";
            echo "<h2>Qualité de l'air à $ville :</h2>";
            echo "Indice de qualité de l'air (AQI) : $aqi<br>";
            echo "Concentration de PM2.5 : $pm25 µg/m³<br>";
        } else {
            // En cas de problème avec les données de pollution, affichez un message d'erreur
            echo "Les données de pollution ne sont pas disponibles pour $ville.";
        }
    } else {
        // Si la ville spécifiée n'est pas dans la liste, affichez un message d'erreur
        echo "Ville non valide.";
    }
} else {
    // Si aucune ville n'est spécifiée, affichez des liens pour toutes les villes de l'Île-de-France
    echo '<h1>Sélectionnez une ville :</h1>';
    foreach ($villes as $ville) {
        echo "<a href='?ville=$ville'>$ville</a><br>";
    }
}
?>
