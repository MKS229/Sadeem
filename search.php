<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<html>
<head>
    <title>Search</title>
    <meta name="description" content="be part of our artist!">
    <meta name="keyword" content="sadeem,Art,community,colors,paint,Course"><!--the keyword for our website-->
    <meta name="viewport" content="width=device-width, initial-scale= 1.0 ">
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

.container {
    height: auto; /* Adjusted height to fit content */
    width: 100%; /* Adjusted width to fit content */
    background-color: rgb(56, 5, 5);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adjusted box-shadow for better appearance */
    margin-bottom: 20px; /* Added margin for spacing between courses */
}

.container_box {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px; /* Adjusted gap for better spacing */
    margin-top: 20px;
}

.courseInfo {
    padding: 10px; /* Adjusted padding for better spacing */
    color: #fff;
    text-align: center;
}

button {
    width: 100%;
    height: 40px;
    background: rgba(41, 0, 176, 0.808);
    font-size: 16px;
    color: #fff;
    font-weight: 500;
    cursor: pointer;
    border-radius: 30px;
    border: none;
    outline: none;
}
#search {
    width:10%;
    height: 30px;
    background: rgba(41, 0, 176, 0.808);
    font-size: 16px;
    color: #fff;
    font-weight: 500;
    cursor: pointer;
    border-radius: 10px;
    border: none;
    outline: none;
}

table {
    width: 100%;
    margin-top: 20px; /* Added margin for spacing */
    border-collapse: collapse; /* Collapsed borders for better appearance */
}

th, td {
    padding: 10px; /* Adjusted padding for better spacing */
    text-align: center;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1); /* Added border bottom for table cells */
}

th {
    background-color: rgb(56, 5, 5);
    color: #fff;
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
    background: green;
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
                    <li class="nav-item"><a class="nav-link" href="AboutUs.html">About us</a></li>
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
            <p class="logo"> Sadeem </p>
       </div>
    <p style="color: #fff;">
    <p class="h1m">courses</p>
    <p class="h3m">Your way to learn Art</p> </p>
        <?php
            $artist="";
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
               // check if the form is submitted post method
                $name = search($_POST['artist']);
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
            $artist =$_POST['artist'];
            //creat connection to data base
            $conn = mysqli_connect($servername,$username,$password,$dbname);
            if(!$conn){
                die("Connection failed: ". mysqli_connect_error());
            }
            //$artist = $_POST["artist"];
            // query to select cousre based on artist
            $sql = "SELECT * FROM courses WHERE artist= '" . $artist . "'";
            
            // Exectute the SQL query
            $result = mysqli_query($conn, $sql); 

            // check if there are rows in the result set
            if(mysqli_num_rows($result) > 0){
                //display a table with course info
                echo "<br/><p class='h3m' style='color:green;'> The Available Courses For This Artist </p>";
                echo"<table border ='1'><tr><th>Name</th><th>Artist</th><th>Date</th>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>".
                        "<td>".$row['name']."</td>".
                        "<td>".$row['artist']."</td>".
                        "<td>".$row['date']."</td>".
                        "</tr>";
                }
                echo "</table>";
            }
            else { //disblay a if not found
                    echo "<br/><p class='h3m' style='color:red;'> The Artist You Search For Has No Courses Available Now !</p>";
            }

            mysqli_close($conn);//close the data base connection
        ?> <br/><br/><br/>
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
                <img src="emailicon.png" alt="email icon" style="height: 45px; width: 45px;" >
            </a>
            <a href="https://github.com/MKS229/Sadeem">
                <img src="github.png" alt="github icon" >
            </a>
        </div>
    </footer>
</body>
</html>

