<?php
session_start();
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session

// Redirect to homepage or login page after logout
header('Location: index.php');
exit;
?>
