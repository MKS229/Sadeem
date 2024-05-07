<?php 
class Questionnaire {
    private $Qs = [];

    public function displayTable() {
        if (empty($this->Qs)) {
            return '<p>There is no data</p>';
        } else {
            $table = '<table border="1">';
            $table .= '<tr><th>Name</th><th>Gender</th><th>Age</th><th>Satisfaction</th><th>Opinion</th></tr>';
            foreach ($this->Qs as $index => $item) {
                $table .= '<tr>';
                $table .= '<td>'.$item['name'].'</td>';
                $table .= '<td>'.$item['gender'].'</td>';
                $table .= '<td>'.$item['age'].'</td>';
                $table .= '<td>'.$item['satisfaction'].'</td>';
                $table .= '<td>'.$item['opinion'].'</td>';
                $table .= '</tr>';
            }
            $table .= '</table>';
            return $table;
        }
    }

    public function add($name, $gender, $age, $satisfaction, $opinion) {
        $this->Qs[] = array(
            'name' => $name,
            'gender' => $gender,
            'age' => $age,
            'satisfaction' => $satisfaction,
            'opinion' => $opinion
        );
    }
}

// Create a new instance of the Questionnaire class
$questionnaire = new Questionnaire();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $satisfaction = isset($_POST['satisfaction']) ? implode(', ', (array)$_POST['satisfaction']) : '';
    $opinion = $_POST['opinion'];

    // Add form data to the questionnaire
    $questionnaire->add($name, $gender, $age, $satisfaction, $opinion);
}
?>

<html>
<head>
    <title>Questionnaire</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles1.css">
    <style>
        
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
    <p class="logo">Sadeem</p>
</div>
    <br><br>
    <div class="row">
        <div>
            <h3 class="h1m">THANK YOU</h3>
            <h4 class="h3m">Your answer is:</h4>
        </div>
        <div>
            <?php echo $questionnaire->displayTable(); ?>
        </div>
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
