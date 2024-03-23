<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<style>
      body {
            background: linear-gradient(-45deg, #8d3d25, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
            color: #fff;
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

        .nav-tabs {
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .nav-tabs .nav-link {
            color: #333;
            border: none;
            border-radius: 10px;
            margin-right: 10px;
        }

        .tab-pane {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 300px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.8);
            transition: transform 0.3s ease-in-out;
            margin: 20px;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-body {
            padding: 20px;
        }

        .card-text {
            color: #333;
        }

        .card a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .card a:hover {
            text-decoration: underline;
        }

        .profile-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
</style>
<body>
   
   <!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Classrooms</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">DSA</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Web Development</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Profile</button>
    </li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <section class="container2 mt-4 ">
        <!-- First Year Student Card -->
        <div class="card mb-3">
            <div class="card-body">
                
                <h1 class="card-text">First Year Student:</h1>
                <h5 class="card-text">Classroom Link :</h5>
                <h3 class="card-text">
                    <a href="https://classroom.google.com/c/NTIzMjY1ODQ0ODIx?cjc=t4sda4s">Click Here to Join</a>
                </h3>
            </div>
        </div>

        <!-- DSA Domain Card -->
        <div class="card mb-3">
            <div class="card-body">
              
                <h1 class="card-text">DSA Domain:</h1>
                <h5 class="card-text">Classroom Link :</h5>
                <h3 class="card-text">
                    <a href="https://classroom.google.com/c/NTIzNTM0ODg5MTY5?cjc=d6imh3v">Click Here to Join</a>
                </h3>
            </div>
        </div>

        <!-- Web-Development Domain Card -->
        <div class="card mb-3">
            <div class="card-body">
              
               
                <h1 class="card-text">Web-Development Domain:</h1>
                <h5 class="card-text">Classroom Link :</h5>
                <h3 class="card-text">
                    <a href="https://classroom.google.com/c/NjE3MzY0MTI2NjQ1?cjc=dd3qu2z">Click Here to Join</a>
                </h3>
            </div>
        </div>

        <!-- Repeat the structure for other cards -->

    </section>

    </div>





    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"> <div class="container mt-5">
        <h1 class="mb-4">DSA Examples</h1>

        <section>
            <h2>Algorithmic Analysis</h2>
            <p>Time Complexity, Space Complexity, Asymptotic Notation, Best/Average/Worst Case, Amortized Analysis.</p>
            <!-- Add more content here as needed -->
        </section>

        <section>
            <h2>Data Structures</h2>
            <p>Arrays, Linked Lists, Stacks, Queues, Trees, Graphs.</p>
            <!-- Add more content here as needed -->
        </section>

        <section>
            <h2>Sorting Algorithms</h2>
            <p>Bubble Sort, Merge Sort, QuickSort, HeapSort.</p>
            <!-- Add more content here as needed -->
        </section>

        <section>
            <h2>Searching Algorithms</h2>
            <p>Binary Search, Linear Search, Depth-First Search (DFS).</p>
            <!-- Add more content here as needed -->
        </section>

        <section>
            <h2>Dynamic Programming</h2>
            <p>Memoization, Tabulation, Longest Common Subsequence (LCS).</p>
            <!-- Add more content here as needed -->
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</div>






    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Web Development Guide</title>
</head>

<body class="bg-light">
    <section class="container mt-5">
        <h1 class="mb-4">Web Development Guide</h1>

        <section>
            <h2>Introduction to Web Development</h2>
            <p>
                Web development involves creating dynamic and interactive websites using various technologies.
                HTML, CSS, and JavaScript are the fundamental building blocks for crafting web pages.
                HTML provides the structure, CSS handles the styling, and JavaScript adds interactivity to the site.
            </p>
        </section>

        <section>
            <h2>HTML (Hypertext Markup Language)</h2>
            <p>
                HTML is the backbone of web development, used to structure content on the web. It consists of elements
                enclosed in tags, forming a document hierarchy.
            </p>
            <pre>
                <code class="html">
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
                        &lt;title&gt;My Web Page&lt;/title&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;h1&gt;Hello, World!&lt;/h1&gt;
                        &lt;p&gt;This is a simple web page.&lt;/p&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                </code>
            </pre>
        </section>

        <section>
            <h2>CSS (Cascading Style Sheets)</h2>
            <p>
                CSS enhances the presentation of HTML elements. It allows you to control the layout, colors, fonts, and
                other visual aspects of your web page.
            </p>
            <pre>
                <code class="css">
                    body {
                        font-family: 'Arial', sans-serif;
                        background-color: #f2f2f2;
                    }

                    h1 {
                        color: #333;
                    }

                    p {
                        font-size: 16px;
                        line-height: 1.5;
                    }
                </code>
            </pre>
        </section>

        <section>
            <h2>JavaScript</h2>
            <p>
                JavaScript adds interactivity to your web page. It allows you to respond to user actions, manipulate the
                DOM (Document Object Model), and make asynchronous requests.
            </p>
            <pre>
                <code class="javascript">
                    function greetUser() {
                        var userName = prompt('Enter your name:');
                        alert('Hello, ' + userName + '!');
                    }
                </code>
            </pre>
        </section>

        <section>
            <h2>Bootstrap 5</h2>
            <p>
                Bootstrap is a popular CSS framework that simplifies the process of designing responsive and
                mobile-friendly websites. It provides a set of pre-styled components and a responsive grid system.
            </p>
            <pre>
                <code class="html">
                    &lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"&gt;
                    &lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;
                </code>
            </pre>
        </section>

        <section>
            <h2>Conclusion</h2>
            <p>
                Web development is an exciting field that continuously evolves with new technologies and trends.
                Mastering HTML, CSS, and JavaScript provides a strong foundation for creating engaging and
                user-friendly websites. Bootstrap 5 streamlines the design process, allowing developers to create
                responsive and visually appealing interfaces with ease.
            </p>
        </section>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

    </div>









    <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
    <?php
 // Start the session



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

// Fetch user profile information from the database
$username = $_SESSION['username'];
$sql = "SELECT * FROM login WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $userProfile = $result->fetch_assoc();
} else {
    // Handle the case where user profile is not found
    $userProfile = null;
}
if (isset($_POST['logout'])) {
    session_destroy(); // Destroy the session
    header("Location: login.php"); // Redirect to login page after logout
    exit();
}
// Close the database connection
$conn->close();
?>


<section class="profile-page">
        <div class="container profile-container">
            <h2 class="text-center mb-4">User Profile</h2>
            <?php if ($userProfile) : ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $userProfile['Name']; ?></h5>
                        <p class="card-text">Email: <?php echo $userProfile['username']; ?></p>
                        <p class="card-text">Branch: <?php echo $userProfile['branch']; ?></p>
                        <p class="card-text">Year: <?php echo $userProfile['year']; ?></p>
                        <!-- Add more profile information as needed -->
                    </div>
                </div>
                <div>
                <form method="post">
                    <button type="submit" name="logout" class="btn btn-danger mt-3">Logout</button>
                </form>
                </div>

                <div class="mt-4">
                    <p>Login Count: <?php echo isset($_SESSION['login_count']) ? $_SESSION['login_count'] : 0; ?></p>
                </div>
            <?php else : ?>
                <p class="text-danger">User profile not found.</p>
            <?php endif; ?>
        </div>
        
    </section>


    </div>
  </div>
</body>
<style>
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