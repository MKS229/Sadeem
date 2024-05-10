
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles1.css">
    <style>
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
        form{
    text-align : center;
}
input{
    font-family: 'Times New Roman', Times, serif;
}
.butn{
    width:80px;
    height: 30px;
    background: red;
    font-size: 16px;
    color: #fff;
    font-weight: 500;
    cursor: pointer;
    border-radius: 30px;
    border: none;
    outline: none;
    text-align: center;
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
<!--Page header--> 
<div> <br>
    <p class="h1m"  >Delete</p> 
</div>
<br><br>

<!--A form for insertiing the Courses information -->
<p class="h3m">Enter the name of the Courses iyou want to delete:</p><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <label class="h3m" for="name" >Name:</label> 
    <input type="text" name="name" required>
    <input class="butn" type="submit" name="submit" value="delete"> 
</form><br> 

<?php 
//Database connection parameters 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "dbsadeem"; 

//Variables 
$name = ""; 

//Check if the form is submitted by post method 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name']; 

    //Create a connection to the database 
    $conn = mysqli_connect($servername, $username, $password, $dbname); 
    if (!$conn) { 
        die("Connection failed: " . mysqli_connect_error());
    }
    // query to select courses based on name
    $nameSql = "SELECT * FROM courses WHERE name= '" . $name . "'";
    // Exectute the SQL query
    $nameSql = mysqli_query($conn, $nameSql);
    //check if course name avalible
    if(mysqli_num_rows($nameSql) <= 0){
        echo "</br></br><p class='h3m' style='color:red;'> The Course You Want to Delete is Not Exists ! </p>";
    }else{
        //Query to delete a course from the database based on the entered name 
        $sql = "DELETE FROM courses WHERE name = '" . $name . "'";

        //Display success or error message 
        echo "<p class='h3m' style='color:green;'>Record deleted successfully!</p>"; 
        $result = mysqli_query($conn, $sql); 
        if ($result){ 
            echo "";} 
        else { echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
    } 
    }
    mysqli_close($conn); //Close the database connection 
}
?><br><br>
<div style="text-align:center;">
        <a href="courses.html">
            <button type="button" class="btn btn-outline-dark" style="width: 40%; ">Back to Courses Bage</button>
        </a>
</div>
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