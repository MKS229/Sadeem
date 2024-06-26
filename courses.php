<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<html>
<head>
    <title>Courses</title>
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
 </style>
<!--<script>
    // Object type for course information
function Course(name, artist, dateTime) {
    this.name = name;
    this.artist = artist;
    this.dateTime = dateTime;
}

// Object type for artist information
function Artist(name, username) {
    this.name = name;
    this.username = username;
}
// Array to store course information
var courses = [
    new Course("Portrait Drawing", new Artist("Arwa Said"), "28-04-2024 (10:00 - 12:00 AM)"),
    new Course("Coloring Basics", new Artist("Nora Hamid"), "21-07-2024 (08:00 - 10:00 PM)"),
    new Course("Origami Art", new Artist("Kim Shong"), "07-03-2024 (02:00 - 03:00 PM)")
];
// Function to display courses in a table
function displayCourses() {
    var table = document.getElementById("coursesTable");
    table.innerHTML = ""; // Clear previous content

    // Create table header
    var headerRow = table.insertRow();
    headerRow.innerHTML = "<th>Course</th><th>Artist</th><th>Date & Time</th><th>Register Now</th>";

    // Iterate through courses array to populate table
    courses.forEach(function(course) {
        var row = table.insertRow();
        row.innerHTML = "<td>" + course.name + "</td><td>by artist <a href=''>" + course.artist.name + " " + course.artist.username + "</a></td><td>" + course.dateTime + "</td><td><button type='button' class='btn btn-light'>Register Now</button></td>";
    });
}

// Call the function to display courses initially
displayCourses();
// Function to search for courses
function searchCourses() {
    var searchText = document.getElementById("searchInput").value.toLowerCase();
    var filteredCourses = courses.filter(function(course) {
        // Check if the course name or artist name/username contains the search text
        return (
            course.name.toLowerCase().includes(searchText) ||
            course.artist.name.toLowerCase().includes(searchText) ||
            course.artist.username.toLowerCase().includes(searchText)
        );
    });
    displayFilteredCourses(filteredCourses);
}

// Function to display filtered courses
function displayFilteredCourses(filteredCourses) {
    var table = document.getElementById("coursesTable");
    table.innerHTML = ""; // Clear previous content

    // Display filtered courses
    filteredCourses.forEach(function(course) {
        var row = table.insertRow();
        row.innerHTML = "<td>" + course.name + "</td><td>by artist <a href=''>" + course.artist.name + " " + course.artist.username + "</a></td><td>" + course.dateTime + "</td><td><button type='button' class='btn btn-light'>Register Now</button></td>";
    });
}

</script>-->
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
            $subject =""

            if ($_SERVER["REQUEST_METHOD"]== "POST"){ // check if the form is submitted post method
                $subject = search ($_POST["subject"]); // csearch the course by subject
                //$artist = search ($_POST["artist"]); // csearch the course by arist
            }
            // function search
            function search($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name ="subject" value="<?php echo $subject;?>" id="searchInput" placeholder="Search...">
            <input type ="submit" name = "submit" value = "search">
            <!--<button id="search" type="submit" name="submit" onclick="searchCourses()">Search</button>-->
        </form>
        <?php
            // data conect
            $servername = "localhost";
            $username = "";
            $password = "";
            $dbname = "";
            
        ?>
        <table id="coursesTable">
        <thead>
            <tr>
                <th>Course</th>
                <th>Artist</th>
                <th>Date & Time</th>
                <th>Register Now</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img src="draw.png" alt="Portrait Drawing" style="max-width: 100px; height: auto;">
                    Portrait Drawing
                </td>
                <td>by artist <a href="">@ArwaSaid</a></td>
                <td>28-04-2024 (10:00 - 12:00 AM)</td>
                <td><button type="button" class="btn btn-light">Register Now</button></td>
            </tr>
            <tr>
                <td>
                    <img src="coloring.png" alt="Coloring Basics" style="max-width: 100px; height: auto;">
                    Coloring Basics
                </td>
                <td>by artist <a href="">@NoraHamid</a></td>
                <td>21-07-2024 (08:00 - 10:00 PM)</td>
                <td><button type="button" class="btn btn-light">Register Now</button></td>
            </tr>
            <tr>
                <td>
                    <img src="origami.png" alt="Origami Art" style="max-width: 100px; height: auto;">
                    Origami Art
                </td>
                <td>by artist <a href="">@KimShong</a></td>
                <td>07-03-2024 (02:00 - 03:00 PM)</td>
                <td><button type="button" class="btn btn-light">Register Now</button></td>
            </tr>
        </tbody>
    </table>
    
               
    <div>
    <button type="button" href=""class="btn btn-outline-dark">show more</button> 
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

