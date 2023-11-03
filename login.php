<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Replace these values with your actual username and password for validation
    $correctUsername = "admin";
    $correctPassword = "123456789";
    
    // Check if the submitted username and password are correct
    if ($username === $correctUsername && $password === $correctPassword) {
        // If correct, redirect the user to etudiant.html
        header("Location: etudiant.html");
        exit();
    } else {
        // If incorrect, redirect the user back to the login page with an error message
        header("Location: index.html?error=1");
        exit();
    }
} else {
    // If the form is not submitted, redirect the user back to the login page
    header("Location: index.html");
    exit();
}
?>
