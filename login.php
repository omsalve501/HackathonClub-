<?php
session_start(); // Start the session

// Replace these values with your actual database connection details
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "hackathonclub";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the login form
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Perform SQL query to check if the provided credentials are valid
    if ($user == "adminhc123" && $pass == "adminhc123") {
        header("Location: admin.php");
        exit();
    }

    // Check if the provided credentials match any user in the database
    $sql = "SELECT * FROM login WHERE username = '$user' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Member login successful
        $_SESSION['username'] = $user; // Store username in the session
        $_SESSION['login_count'] = isset($_SESSION['login_count']) ? $_SESSION['login_count'] + 1 : 1; // Increment login count
        header("Location: member.php");
        exit();
    } else {
        // Invalid credentials, redirect to login page or show an error
        $error_message = "Invalid username or password";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">   
    <title>Members Login</title>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
            <div class="container-fluid">
                <button class="btn btn-light" onclick="goBack()">
                    <i class="bi bi-arrow-left"></i> Back
                </button>
            </div>
        </nav>  
    </section>
    <section class="login-page">
        <div class="container login-container">
            <form action="login.php" method="post">
                <h2 class="text-center mb-4">Login</h2>
                <?php
                if (isset($error_message)) {
                    echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
                }
                ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Email</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </section>

   
    <script>
        function goBack() {
            window.location.href = 'index.html';
        }
    </script>
</body>
</html>
