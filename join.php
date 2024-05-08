<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    // Assume $registeredUsers is an array of registered users (username and email)
    $register = array();

    // Check if username or email already exists
    $userExists = false;
    foreach ($register as $user) {
        if ($user["username"] == $username || $user["email"] == $email) {
            $userExists = true;
            break;
        }
    }

    // If user already exists, display error message
    if ($userExists) {
        echo "This username or email already exists.";
    } else {
        // Add new user to the registered users list (this is just a simulation)
        $register[] = array("username" => $username, "email" => $email);
        echo "Welcome to our community!";
    }
}
?>
