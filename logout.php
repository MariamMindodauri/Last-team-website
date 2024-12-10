<?php
session_start(); // Start session

// Destroy the session to log out the user
session_destroy();

// Redirect back to main page after logout
header('Location: index.php');
exit;
?>
