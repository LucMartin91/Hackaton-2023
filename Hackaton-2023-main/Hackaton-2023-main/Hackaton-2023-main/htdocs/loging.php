<?php
// Start session
session_start();

// Database connection configuration
$dbHost = '192.168.112.158';
$dbUsername = 'admin';
$dbPassword = 'admin';
$dbName = 'ma_base';

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input
function sanitizeInput($input)
{
    global $conn;
    $input = trim($input);
    $input = mysqli_real_escape_string($conn, $input);
    return $input;
}

// Function to hash the password
function hashPassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

// Function to verify the password
function verifyPassword($password, $hashedPassword)
{
    return password_verify($password, $hashedPassword);
}

// Function to authenticate user
function authenticateUser($username, $password)
{
    global $conn;

    // Sanitize inputs
    $username = sanitizeInput($username);
    $password = sanitizeInput($password);

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashedPassword);
    $stmt->fetch();
    $stmt->close();

    // Verify the password
    if (verifyPassword($password, $hashedPassword)) {
        // Authentication successful
        $_SESSION['username'] = $username;
        return true;
    } else {
        // Authentication failed
        return false;
    }
}

// Example usage of the authenticateUser() function
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (authenticateUser($username, $password)) {
        // Redirect to the authenticated page
        header("Location: authenticated.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
}
?>

<!-- HTML form for login -->
<form method="POST" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" name="login" value="Login">
</form>