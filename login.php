<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $register = array();
    $userExists = false;
    foreach ($register as $user) {
        if ($user["username"] == $username) {
            if($register["password"] == $password){
            $userExists = true;
            break;
            }
        }else{
            echo "This username is not exists."
        }
    }

    if ($userExists) {
        echo "Welcome ".$username. "again";
    } else {
        
        echo "This username is not exists.";
        echo '<a href="login.html">Back to login page</a>';
        
    }
}
?>
