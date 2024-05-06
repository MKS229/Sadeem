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
<!DOCTYPE html>
<html>
<head>
    <title>Questionnaire</title>
    <style>
        body{
            background-color:  #5985a2;
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="row">
        <div>
            <h3>THANK YOU</h3>
            <h4>Your answer is:</h4>
        </div>
        <div>
            <?php echo $questionnaire->displayTable(); ?>
        </div>
    </div>
</body>
</html>
