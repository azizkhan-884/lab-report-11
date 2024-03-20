
<?php

// Starting a Session

session_start();

// Storing Data In Session

// Set Session Variables
$_SESSION["username"] = "aziz";
$_SESSION["email"] = "aziz@example.com";
$_SESSION["logged_in"] = true;

// Accessing Session Data
if(isset($_SESSION["username"])) {
    echo "Welcome, " . $_SESSION["username"];
} else {
    echo "Please log in.";
}

// Ending a Session

// Remove all session variables

session_unset();

// Destroy the session

session_destroy();

?>
