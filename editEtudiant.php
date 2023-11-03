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
    $cne = $_POST["cne"];
    $cni = $_POST["cni"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_naissance = $_POST["date_naissance"];
    $tele = $_POST["tele"];
    $email = $_POST["email"];
    $mot_pass = $_POST["mot_pass"];

    // Update data in the database
    $sql = "UPDATE etudiant SET nom='$nom', prenom='$prenom',cni ='$cni', birth_date='$date_naissance', telephone='$tele', email='$email', mot_pass='$mot_pass' WHERE cne='$cne'";

    if ($conn->query($sql) === TRUE) {
        header("Location: etudiant.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve student information
// if(isset($_GET['cne'])) {
//     $cne = $_GET['cne'];
//     $result = $conn->query("SELECT * FROM etudiant WHERE cne='$cne'");
//     $row = $result->fetch_assoc();
// }

//Methode 2 : 
$result = $conn->query("SELECT * FROM etudiant WHERE cne='$_GET[cne]'");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $cne=$row['cne'];
        $cni = $row['cni'];
        $date_naissance = $row["birth_date"];
        $tele = $row["telephone"];
        $email = $row["email"];
        $mot_pass = $row["mot_pass"];
    }
} else {
    echo "Aucun résultat trouvé.";
}

// Close database connection
$conn->close();
?>