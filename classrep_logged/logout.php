<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Redirect to the home page or any other desired page after logout
header("Location: ../index.html"); 
exit;
?>
