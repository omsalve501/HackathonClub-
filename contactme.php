<?php
// Replace these values with your actual database connection details


// Create a connection
$conn= mysqli_connect("localhost","root","","HackathonClub");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO contact (name, email, msg) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();
    $stmt->close();

    // Close the database connection
    $conn->close();

    // Redirect or display a success message
    echo("Thank you for contacting Us!");
    exit();
}
?>

