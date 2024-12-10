
<?php
include('functions.php');
include('data.php');
?>
<!DOCTYPE html>
<html lang="en">
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
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">

  <style>
    /* General styling */
    body {
      margin: 0;
      padding: 0;
      font-family: 'Lancelot', sans-serif;
      background-color: white;
      overflow-x: hidden;
    }
    .about-us-page {
  display: flex;
  flex-direction: column;
  align-items: center; /* Centers the content horizontally */
  justify-content: center; /* Centers the content vertically */
  padding: 70px;
}


     h2 {
      text-align: center;
      color: #82898B;
      font-weight: bold;
      font-family: 'Elsie Swash Caps', cursive;
      animation: fadeInUp 1s ease-in-out;
      font-size: 3rem;
      margin-top: 20px;
      margin-bottom: 50px;
      animation-delay: 0.6s;
    }

    p {
      text-align: center;
      max-width: 800px;
      margin: 20px auto;
      font-size: 1.2rem;
      line-height: 1.8;
      color: #555;
      animation: fadeInUp 1s ease-in-out;
      font-size: 1.7rem;

    }

    /* Section styles */
    .section {
      position: relative;
      margin-bottom: 80px;
      padding: 40px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .section img {
      width: 550px;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .image-container {
      flex: 1;
      padding: 40px;
    }


    .image-container0 {
      flex: 1;
      padding: 0px;
    }
    .text-container {
      flex: 1;
      padding: 20px;
    }

    .section img:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 40px rgba(0,0,0,0.2);
    }

    /* Altering image and text positions for odd/even sections */
    .section:nth-child(odd) .image-container {
      order: 2;
    }

    .section:nth-child(odd) .text-container {
      order: 1;
    }

    /* Responsive styling */
    @media screen and (max-width: 768px) {
      .section {
        flex-direction: column;
        align-items: center;
      }
      .section img {
        width: 90%;
        margin-bottom: 20px;
      }
    }

    /* Keyframe animations */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

<?php
    // Call the navbar header (ensure this is working correctly)
    setheader($navbar1); 
?>

<div class="about-us-page">
  <div class="section">
    <div class="text-container">
      <h2>The Importance of Skincare</h2>
      <p>At Radiant Roots, we believe that skincare is more than just a routine—it's self-care, self-love, and the foundation of a healthy lifestyle. Your skin is your first line of defense, your glow, and your story, and we’re here to help you nurture it with products that truly care for your unique needs.</p>
    </div>
    <div class="image-container">
      <img src="images/hands.png" alt="Skincare routine">
    </div>
  </div>

  <div class="section">
  <div class="image-container0">
      <img src="images/women0.png" alt="Natural ingredients">
    </div>
    <div class="text-container">
      <h2>What Makes Us Special</h2>
      <p>We don’t believe in shortcuts or trends. Our formulas are rooted in science and nature, combining the best of both worlds to create skincare that is effective, safe, and kind to your skin. Every product we craft is free from harmful chemicals, cruelty-free, and designed to work with your skin—not against it.</p>
    </div>
  </div>

  <div class="section">
    <div class="text-container">
      <h2>Our Purpose</h2>
      <p>Our purpose is simple yet powerful: to empower you to feel radiant and confident in your own skin. We’re here to remind you that beauty is a journey, not a destination, and every step of that journey deserves the best care possible.</p>
    </div>
    <div class="image-container">
      <img src="images/legs.png" alt="Empowered skin">
    </div>
  </div>

  <div class="section">
  <div class="image-container">
      <img src="images/ingredients.png" alt="Radiant Roots products">
    </div>
    <div class="text-container">
      <h2>Why Choose Radiant Roots?</h2>
      <p>What makes us special is our commitment to you. We listen, we innovate, and we always strive to meet your skin’s ever-changing needs. Whether it’s hydrating your skin, soothing irritation, or unveiling that natural glow, we’re here to provide solutions you can trust.</p>
    </div>
  </div>

  <div class="section">
    <div class="text-container">
      <h2>Join the Radiant Roots Family</h2>
      <p>Discover how transformative truly good skincare can be. Because radiant skin begins with healthy roots. 🌱✨</p>
    </div>
    <div class="image-container">
      <img src="images/girl.png" alt="Join Radiant Roots">
    </div>
  </div>

</div>

<!-- footer -->
<?php 
  setFooter();
?>
<!-- end footer -->

</body>
</html>
