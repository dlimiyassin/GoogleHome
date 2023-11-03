<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";

// Establish a database connection
$connection = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if the 'cne' parameter is set in the request
if (isset($_GET['cne'])) {
    $cne = $_GET['cne'];

    // Perform the delete operation
    $sql = "DELETE FROM etudiant WHERE cne = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $cne);
    $stmt->execute();
    // Close the statement
    $stmt->close();
} else {

    echo "error: 'cne' parameter is not set in the request";
}

// Close the connection
$connection->close();

header("Location: etudiant.html");

exit();
?>