<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles1.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        p.tx1 {
            color: white;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            font-size: 60px;
            position: absolute;
            text-align: center;
            margin-top: 10px;
            margin-left: 350px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="contactUs.html">Contact us</a></li>
            <li class="nav-item"><a class="nav-link" href="aboutus.html">About us</a></li>
            <li class="nav-item"><a class="nav-link" href="join.html">Join</a></li>
            <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="store.html">Store</a></li>
            <li class="nav-item"><a class="nav-link" href="design.html">Design</a></li>
            <li class="nav-item"><a class="nav-link" href="courses.html">Courses</a></li>
            <li class="nav-item"><a class="nav-link" href="community.html">Community</a></li>
            <li class="nav-item"><a class="nav-link" href="sell.html">Sell</a></li>
            <li class="nav-item"><a class="nav-link" href="cart.html">Cart</a></li>
        </ul>
    </nav>
</div>
<div class="header">
    <img src="logo.png" alt="logo" class="logo">
    <p class="logo">Sadeem</p>
</div>
<!--Page header--> 
<div> 
    <h1 background-color:rgba(255, 249, 234, 1); >Delete</h1> 
</div>
<br><br><br>

<!--A form for insertiing the Courses information -->
<h5>Enter the name of the Courses iyou want to delete:</h5><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"style="margin-left: 10%;"> 
    <label for="name">Name:</label> 
    <input type="text" name="name">
    <input type="submit" name="submit" value="delete"> 
</form><br> 

<?php 
//Database connection parameters 
$servername = "localhost"; 
$username = "root"; 
$password = "'"; 
$dbname = "novelsworm"; 

//Variables 
$name = ""; 

//Check if the form is submitted by post method 
if ($_SERVER["REQUEST _METHOD"] = "POST"){
    $name = $_POST ["name"]; 

    //Create a connection to the database 
    $conn = mysqli_connect($servername, $username, $password, $abname); 
    if (!$conn) { 
        die("Connection failed: " . mysqli_connect_error());
    }

    //Query to delete a course from the database based on the entered name 
    $sql = "DELETE FROM courses WHERE name = '" . $name . "'";

    //Display success or error message 
    echo "<p>Record deleted successfully!</p>"; 
    $result = mysqli_query($conn, $sql); 
    if ($result){ 
        echo "";} 
    else { echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
    } 
    mysqli_close($conn); //Close the database connection 
}
?><br><br><b>
</body>
<footer>
    <ul>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="community.html">Community</a></li>
    </ul>
    <div class="footer-icons">
        <a href="mailto:sadeemartcommunity@gmail.com">
            <img src="emailicon.png" alt="email icon" style="height: 45px; width: 45px;">
        </a>
        <a href="https://github.com/MKS229/Sadeem">
            <img src="github.png" alt="github icon">
        </a>
    </div>
</footer>
</html>