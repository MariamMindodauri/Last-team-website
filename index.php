<?php
include ('functions.php');
include ('data.php');
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Radiant Roots</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lancelot&family=Elsie+Swash+Caps:wght@400;900&family=Hepta+Slab:wght@1..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

</head>


<body>
  <!-- header section strats -->
  <?php
session_start(); // Ensure session is started to access session data

// Check if the user is logged in
// Render the correct navbar based on the login status
if ($logged_in) {
    setheader($navbar2); // User is logged in, show navbar2
} else {
    setheader($navbar1); // User is not logged in, show navbar1
}
?>

  <!-- end header section -->

  <!-- section1 -->
    <?php 
      section1();
    ?>
  <!-- end  section1 -->


  <!-- section2 -->
    <?php 
      section2();
    ?>
  <!-- end  section2 -->
    

  <!-- section3 -->
   <?php 
      section3();
   ?>
  <!-- end  section3 -->

    <!-- section4 -->
    <?php 
      section4();
    ?>
  <!-- end  section4 -->
  
   <!-- section5 -->
   <?php 
      section5();
    ?>
  <!-- end  section5 -->
  

    <!-- footer -->
    <?php 
      setFooter();
    ?>
  <!-- end  footer -->
  

</body>

</html>