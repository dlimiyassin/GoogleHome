<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $cne = $_POST["cne"];
    $cni = $_POST["cni"];
    $date_naissance = $_POST["date_naissance"];
    $tele = $_POST["tele"];
    $email = $_POST["email"];
    $mot_pass = $_POST["mot_pass"];

    // Insert data into the database
    $sql = "INSERT INTO etudiant (nom, prenom, cne, cni, birth_date, telephone, email, mot_pass) VALUES ('$nom', '$prenom', '$cne', '$cni', '$date_naissance', '$tele', '$email', '$mot_pass')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();

header("Location: etudiant.html");

exit();
?>
