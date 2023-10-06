<?php
$servername = "192.168.112.158";
$username = "admin";  // Votre nom d'utilisateur de base de données
$password = "admin";  // Votre mot de passe de base de données
$dbname = "ma_base";  // Le nom de votre base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>
