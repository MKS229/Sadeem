<html>
    <head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles1.css">

       <style>
            table{
                width: 100%;
                margin-top: 20px; /* Added margin for spacing */
                border-collapse: collapse; /* Collapsed borders for better appearance */
            }
            th, td {
                     padding: 10px; /* Adjusted padding for better spacing */
                     
                     border-bottom: 1px solid rgba(0, 0, 0, 0.1); /* Added border bottom for table cells */
            }

            th {
                    background-color: rgb(56, 5, 5);
                    color: #fff;
            }
            h3{
                font-family: 'Times New Roman', Times, serif;
                font-size: 40px; /* Adjusted font size for better readability */
                color: rgb(56, 5, 5);
                text-align: center;
            }
            #connect{
                font-family: 'Times New Roman', Times, serif;
                font-size: 24px; /* Adjusted font size for better readability */
                color: rgba(22, 154, 130, 0.808);
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
        <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dbsadeem";
        // 1- Create DB connection 
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // 2- Check connection 
        if (!$conn) {
            die("Connection failed:". mysqli_connect_error()); }
        else {
            echo "<br/><br/><p id='connect'> You are successfully connected to Sadeem's Data Base </p>"; 
        }
        // 3- Specify SQL statement for the Courses table 
        $sql_courses = "SELECT DISTINCT * FROM courses"; 
        $result_courses = mysqli_query($conn, $sql_courses);

        // 4- Specify SQL statement for the Questionnaire table 
        $sql_questionnaire = "SELECT DISTINCT * FROM questionnaire"; 
        $result_questionnaire= mysqli_query ($conn, $sql_questionnaire);

        // 5- Specify SOL statement for the register table 
        $sql_register = "SELECT DISTINCT * FROM register"; 
        $result_register = mysqli_query ($conn, $sql_register); 
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
                       echo "<tr>".
                        "<td>".$row_courses['name']."</td>".
                        "<td>".$row_courses['artist']."</td>".
                        "<td>".$row_courses['date']."</td>".
                        "</tr>";
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
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row_questionnaire= mysqli_fetch_assoc($result_questionnaire)) { 
                    echo "<tr>".
                        "<td>".$row_questionnaire['name']."</td>".
                        "<td>".$row_questionnaire['email']."</td>".
                        "<td>".$row_questionnaire['age']."</td>".
                        "</tr>";
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
                    echo "<tr>".
                        "<td>".$row_register['user']."</td>".
                        "<td>".$row_register['email']."</td>".
                        "<td>".$row_register['password']."</td>".
                        "</tr>";
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