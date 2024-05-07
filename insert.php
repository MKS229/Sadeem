
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles1.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .h1m {
            font-family: 'Times New Roman', Times, serif;
            font-size: 36px; /* Adjusted font size for better readability */
            color: rgb(56, 5, 5);
            text-align: center;
        }

        .h3m {
            font-family: 'Times New Roman', Times, serif;
            font-size: 24px; /* Adjusted font size for better readability */
            color: rgb(56, 5, 5);
            text-align: center;
        }
        input{
            width: 280px;
            font-family: 'Times New Roman', Times, serif;
        }
        .butn{
            
            width:30%;
            height: 40px;
            background: rgba(41, 0, 176, 0.808);
            font-size: 20px;
            color: #fff;
            font-weight: 500;
            cursor: pointer;
            border-radius: 30px;
            border: none;
            outline: none;
            text-align: center;
        }
        .form{
            text-align : center;
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
            <li class="nav-item"><a class="nav-link" href="tables.php">Data</a></li>
        </ul>
    </nav>
</div>
<div class="header">
    <img src="logo.png" alt="logo" class="logo">
    <p class="logo">Sadeem</p>
</div>
<div> <br>
    <h1 class="h1m" >Insert</h1> 
</div>
<br><br>

<!--A form for insertiing the Courses information -->
<h5 class="h3m">Enter the Courses informations to insert it:</h5><br>
<div class="form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        <label class="h3m" for="name">Name:</label> 
        <input type="text" name="name" required><br><br>
        <label class="h3m" for="artist">Artist:</label> 
        <input type="text" name="artist" required><br><br>
        <label class="h3m" for="Date">date: </label> 
        <input type="text" name="date" required><br><br>
        <input class ="butn" type="submit" name="submit" value="insert"> 
    </form><br>
</div>
 
<?php 
//Database connection parameters 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "dbsadeem"; 

//Variables 
$name = "";
$artist ="";
$date = ""; 

//Check if the form is submitted by post method 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Retrieve and store form data 
    $name = $_POST['name']; 
    $artist = $_POST['artist']; 
    $date = $_POST['date'];

    //Create a connection to the database 
    $conn = mysqli_connect ($servername, $username, $password, $dbname); 
    if (!$conn) { 
        die("Connection failed: " . mysqli_connect_error());
    }
    //SQL query to insert Courses information into the database 
    $sql = "INSERT INTO courses (name,artist,date) VALUES ('$name', '$artist', '$date')"; 
    
    //Display success or error message 

    echo '<p class="h3m" style="color: green;">Record inserted successfully!</p>'; 
    $result = mysqli_query($conn, $sql); 
    if ($result){ 
        echo "";} 
    else { echo "Error: " . $sql . "‹br›" . mysqli_error($conn); } 
    mysqli_close($conn); //Close the database connection 
}
?><br><br>
<div style="text-align:center;">
        <a href="courses.html">
            <button type="button" class="btn btn-outline-dark" style="width: 40%; ">Back to Courses Bage</button>
        </a>
</div>
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
</body>

</html>