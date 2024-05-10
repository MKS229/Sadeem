<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thanks</title>
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
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                //mail contant
                $name = $_POST["name"];
                $email = $_POST["email"];
                $subject = "New SADEEM Contact Messeg";
                $message = $_POST["massage"];
                
            //the sender
            $mailHeder = "From:". $name ."<". $email .">\r\n";
            //our email
            $recipient = "sadeemartcommunity@gmail.com";
            //mail function
            mail($recipient,$subject,$message,$mailHeder)
            or die("Message fild to Send !"); // if not send
            // if it send
            echo "<br/></br></br><p class='h3m' style='color: green;'>Message Send Successfully!</p>".
                "</br></br><p class='h3m' >We Will Contact You As Soon As Possible.</p>";
            }

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

