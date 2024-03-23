<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="script.js" defer></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hackathon Club GCOEARA</title>
</head>
<body>
  

<section class="navbar" >
<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
  <div class="container-fluid">
   
    

    <a class="navbar-brand" href="#"><img src="Images\Logo.png" alt="Hackathon Club" size="100px" height="120px" width="130px" style="background-color: rgba(255, 0, 0, 0); border:2px solid rgba(255, 0, 0, 0); border-radius:40px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link "  href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">Mesages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Team</a>
        </li>
        <li class="nav-item" style="border: 2px solid rgba(252, 195, 8, 0.192); background-color:rgb(252, 197, 8); border-radius:20px;">
          <a class="nav-link" href="Login.html">Login</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>  

<div class="container mt-5 d-flex justify-content-center">


<section class="notify">
    <div class="container mt-5 ">
        <h2 style="color:white;">Contact Messages</h2>
        <?php
        // Replace these values with your actual database connection details
        $servername = "localhost";
        $username = "root";
        $password = null;
        $dbname = "HackathonClub";

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch and display contact messages
        $result = $conn->query("SELECT * FROM Contact");

        if ($result->num_rows > 0) {
            echo '<div class="list-group mt-3">';

            while ($row = $result->fetch_assoc()) {
                echo '<a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">' . $row["name"] . '</h5>
                            <small>' . $row["email"] . '</small>
                        </div>
                        <p class="mb-1">' . $row["msg"] . '</p>
                       
                      </a>';
            }

            echo '</div>';
        } else {
            echo '<p>No contact messages found.</p>';
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>

    <!-- Bootstrap JS and Popper.js scripts (place them at the end of the body) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eaFQgA1nt1Q3lDYYMG5OcFc/ljR63aUq76PNUbjq1lF8x0n2i9ZJQn3a/+ea4Hj" crossorigin="anonymous"></script>
</section>


</div>

<div class="container mt-5 d-flex justify-content-center">
<section id="members" class="mt-5">
    <div class="container registration-container ">
        <form action="" method="post">
            <h2 class="mb-4" style="color:white;">Register new Member:</h2>
            <?php
            if (isset($registration_error_message)) {
                echo '<div class="alert alert-danger" role="alert">' . $registration_error_message . '</div>';
            }
            ?>
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="Name" name="name" placeholder="Enter Member Name">
            </div>
            <div class="mb-3">
            <label for="branch" class="form-label">Branch</label>
            <select id="Branch" name="branch" class="form-control">
                <option value="Automobile">Automobile</option>
               <option value="Computer">Computer</option>
               <option value="Civil">Civil</option>
               <option value="E & TC">E & TC</option>
               <option value="Instrumentation">Instrumentation</option>
                <option value="Mechanical">Mechanical</option>
                
                
            </select>
            </div>
            <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <select id="year" name="year" class="form-control">
               <option value="FE">First Year (FE)</option>
               <option value="SE">Second Year (SE)</option>
               <option value="TE">Third Year (TE)</option>
                <option value="BE">Fourth Year (BE)</option>
            </select>
        </div>

            <div class="mb-3">
                <label for="username" class="form-label">Email</label>
                <input type="email" class="form-control" id="username" name="username" placeholder="Enter Member's Email">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Create password">
            </div>

            

            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function goBack() {
        window.location.href = 'Index.html';
    }
</script>

<?php
// Replace these values with your actual database connection details
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "HackathonClub";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the registration form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize user input to prevent SQL injection
    $name = $conn->real_escape_string($name);
    $branch = $conn->real_escape_string($branch);
    $year = $conn->real_escape_string($year);
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // SQL query to insert data into the login table
    $insert_sql = "INSERT INTO login( `Name`, `branch`, `year`, `username`, `password`)
                   VALUES ('$name', '$branch', '$year', '$username', '$password')";

    if ($conn->query($insert_sql) === TRUE) {
        // Registration successful, you can redirect to a login page or wherever needed
        echo '<div class="alert alert-success" role="alert">Registration successful!</div>';
        echo '<script>resetForm();</script>';
    } else {
        // Registration failed
        $registration_error_message = "Error: " . $insert_sql . "<br>" . $conn->error;
        echo $registration_error_message; 
    }
}

// Close the database connection
$conn->close();
?>

</section>
</div>


<div class="container mt-5 d-flex justify-content-center" id="mtable">
<?php
// Replace these values with your actual database connection details
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "HackathonClub";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the login table
$result = $conn->query("SELECT * FROM `login`");

// Display the data in a table with Bootstrap styling
if ($result->num_rows > 0) {
    echo '<div class="container mt-5">
            <h2 style="color:white;">Members:</h2>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" >
                <thead>
                    <tr>
                        <th>Sr. No</th>
                        <th>Name</th>
                        <th>Branch</th>
                        <th>Year</th>
                        <th>Email</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody>';

    $counter = 1; // Initialize Sr. No counter

    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . $counter . '</td>
                <td>' . $row["Name"] . '</td>
                <td>' . $row["branch"] . '</td>
                <td>' . $row["year"] . '</td>
                <td>' . $row["username"] . '</td>
                <!-- Add more columns as needed -->
              </tr>';
        $counter++;
    }

    echo '</tbody>
          </table>
        </div>
      </div>';
} else {
    echo '<p>No records found.</p>';
}

// Close the database connection
$conn->close();
?>

</div>

<footer>
  <img src="Images\Logo.png" alt="Hackathon Club Logo" class="footer-logo" style="background-color: white ;">
 
  <ul class="footer-links">
      <li><a href="home.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="teams.html">Teams</a></li>
      <li><a href="contact.html">Contact Us</a></li>
  </ul>
  
  <!-- Social Media Links -->
  <div class="social-media-links">
      <a href="https://www.instagram.com/hackathon_gcoeara/" target="_blank" class="text-white me-3"><i class="fa fa-instagram" ></i></a>
      <a href="https://www.linkedin.com/company/gcoeara-hackathon-club/" target="_blank" class="text-white"><i class="fa fa-linkedin"></i></a>
  </div>
  <br><br>
   <p>&copy; 2023 Hackathon Club. All Rights Reserved.</p>
</footer>



</body>

<style>
    hr{
        color:black;
        border:2px solid black;
    }

    /*NOTIFICATIONS */
    .notify{
        background-color:#f5f5f53b;
        padding: 10px;
        width:50%;
    }
    #members{
        background-color:#f5f5f53b;
        padding: 10px;
        width:50%;
    }
    #mtable{
        background-color:#f5f5f53b;
        padding: 10px;
        width:80%;
    }
    
footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
    margin-top: 8%;
    width: 100%;
}

.footer-links {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    margin-top: 10px;
    height: 100%;
}

.footer-links li {
    margin:10px;
}

.footer-links a {
    color: #fff;
    text-decoration: none;
}

.footer-logo {
    width: 150px; /* Adjust the size based on your logo */
    height: 150px; /* Adjust the size based on your logo */
    margin-bottom: 10px;
}

.navbar{
    width: 100%;
    position: relative;


}
.navtab{
    margin: 2px;
}
.custom-navbar {
    background-color: rgba(255, 255, 255, 0.713); /* Set the background color with transparency */
    font-size: 18px;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.navbar-nav {
    margin-left: 70%;
}
.navbar-nav li{
    margin-left: 20px;  
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.navbar-nav li:hover{
    color:rgba(5, 252, 153, 0.566);
}


/*body */
body {
	background: linear-gradient(-45deg, #8d3d25, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

</style>
</html>