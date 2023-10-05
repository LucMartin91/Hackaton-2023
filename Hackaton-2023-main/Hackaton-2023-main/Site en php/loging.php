<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Requête pour récupérer le mot de passe associé à l'email
    $sql = "SELECT password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();

        // Vérifie si le mot de passe correspond
        if (password_verify($password, $hashedPassword)) {
            echo "Vous êtes connecté avec succès.";
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "L'utilisateur avec cet email n'existe pas.";
    }

    $stmt->close();
}

$conn->close();
?>
