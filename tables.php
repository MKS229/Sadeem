<html>
    <head>
        <titel>Tables</titel>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="styles1.css">

        <style>
            * {
            margin: 0;
            padding: 0;}
            p.tx1 {
                color: white;
                font-family: 'Times New Roman', Times, serif;
                font-weight: bold;
                font-size: 60px;
                position: absolute;
                text-align: center;
                margin-top: 10px;
                margin-left: 350px;}
            table{
                border-collapse: collapse;
                width: 50%;
                margin: 30px;}
            h3 {
                margin: 30px;}
            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;}
            body {
                font-family: 'Nunito', sans-serif; 
                background: #FFDD88; 
                background: linear-gradient(0deg, rgba(203, 131, 100,0.4) 0%, rgba(255, 235, 178,1) 100%);
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
        <?php 
        $servername = "localhost";
        $username = "root";
        $password = '';
        $dbname = "novelsworms";
        // 1- Create DB connection 
        $conn = mysqli_connect($servername, Susername, Spassword, Sdbname);
        // 2- Check connection 
        if (!$conn) {
            die("Connection failed:" • mysqli_connect_error()); }
        else {
            print "You are connected to $dbname ‹br />"; }
        // 3- Specify SQL statement for the Courses table 
        $sql_courses = "SELECT DISTINCT * FROM  'courses' "; 
        $result_courses = mysqli_query(Sconn, $sql_courses);

        // 4- Specify SQL statement for the Questionnaire table 
        $sql_questionnaire = "SELECT DISTINCT * FROM 'questionnaire'"; 
        $result_questionnaire= mysqli_query (Sconn, $sql_questionnaire);

        // 5- Specify SOL statement for the register table 
        $sql_register = "SELECT DISTINCT * FROM 'register'"; 
        $result_register = mysqli_query (Sconn, $sql_register); 
        ?>
        <br> 
        <br> 
        <h3>Courses table</h3>
        <!-- HTML table for the Courses records -->
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Artist</th>
                    <th>Date & Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row_courses= mysqli_fetch_assoc($result_courses)) { 
                    echo "<tr>"; 
                    echo "<td>{$row_courses['name']}</td›"; 
                    echo "<td>{$row_courses['artist']}</td>"; 
                    echo "<td>{$row_courses['date']}/td>"; 
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <br> 
        <h3>Questionnaire table</h3>
        <!-- HTML table for the questionnaire records -->
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Ege</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row_questionnaire= mysqli_fetch_assoc($result_questionnaire)) { 
                    echo "<tr>"; 
                    echo "<td>{$row_questionnaire['name']}</td›"; 
                    echo "<td>{$row_questionnaire['email']}</td>"; 
                    echo "<td>{$row_questionnaire['age']}/td>"; 
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <br> 
        <h3>Register table</h3>
        <!-- HTML table for the register records -->
        <table>
            <thead>
                <tr>
                    <th>User</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row_register= mysqli_fetch_assoc($result_register)) { 
                    echo "<tr>"; 
                    echo "<td>{$row_register['user']}</td›"; 
                    echo "<td>{$row_register['email']}</td>"; 
                    echo "<td>{$row_register['password']}/td>"; 
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <?php
        // 6- Close DB connection 
        mysqli_close($conn);
        ?>
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