<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT nom, prenom, cne, birth_date FROM etudiant";
$result = $conn->query($sql);
$listEtudiant = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $listEtudiant[] = $row;
    }
    // Convert the data to JSON format
    echo json_encode($listEtudiant);
} else {
    // Handle empty result or errors
    echo json_encode(["error" => "No data found"]);
}


$conn->close();
?>
