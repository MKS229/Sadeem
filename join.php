<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcom !</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="styles1.css">
        <style>
            *{
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
        <?php
// Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = search($_POST['username']);
        $email = search($_POST['email']);
        $password = search($_POST['password']); 
    }

    // function search
    function search($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    
    // data conect
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbsadeem";
    $userName =$_POST['username'];
    $userEmail =$_POST['email'];
    $userPass =$_POST['password'];
    //creat connection to data base
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

    // query to select register based on username
    $userSql = "SELECT * FROM register WHERE user= '" . $userName . "'";

    // query to select register based on email
    $emailSql = "SELECT * FROM register WHERE email= '" . $userEmail . "'";

    // Exectute the SQL query
    $Uresult = mysqli_query($conn, $userSql); 
    $Mresult = mysqli_query($conn, $emailSql); 

    // Check if username or email already exists
    if(mysqli_num_rows($Uresult) > 0 || mysqli_num_rows($Mresult) > 0 ){
        //The user already exicst.
        echo "<br/></br></br><p class='h3m' style='color:red;'> The Username or Email You Inter is Already Exists . </p>".
            "<div style='text-align:center;'>".
            "<a href='join.html'>".
                "<button type='button' class='btn btn-dark' style='width: 40%; '>Return to join page</button>".
            "</a></br></br>".
            "<div style='text-align:center;'>".
            "<a href='login.html'>".
                "<button type='button' class='btn btn-info' style='width: 40%; '>Go to Login page</button>".
            "</a>";;
        
    }else {
        // Add new user to the registered users list (this is just a simulation)
        //SQL query to insert register information into the database 
        $sql = "INSERT INTO register (user,email,password) VALUES ('$userName', '$userEmail', '$userPass')"; 
    
        //Display success or error message 
        echo '<br/></br></br><p class="h3m" style="color: green;">Welcome to our community!</p>'.
        "<div style='text-align:center;'>".
            "<a href='index.html'>".
                "<button type='button' class='btn btn-secondary' style='width: 40%; '>Discover SADEEM !</button>".
            "</a>";; 
        $result = mysqli_query($conn, $sql); 
        if ($result){ 
            echo "";} 
        else { echo "Error: " . $sql . "‹br›" . mysqli_error($conn); }
    }
    mysqli_close($conn);//close the data base connection
?>

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
