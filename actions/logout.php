<?php
// Start the session
session_start();

// Clear the session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect the user to the login page or homepage
header('Location:../index.html');
exit;
?>