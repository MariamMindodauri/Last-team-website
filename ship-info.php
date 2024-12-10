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
  <title>Shipping Policy - Radiant Roots</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lancelot&family=Elsie+Swash+Caps:wght@400;900&family=Hepta+Slab:wght@1..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <style>
    body {
      font-family: 'Lancelot', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .shipping-container {
      padding: 40px;
      max-width: 1100px;
      margin: 0 auto;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      font-family: 'Elsie Swash Caps', cursive;
      font-size: 2.5rem;
      color: #FCDE97;
      margin-bottom: 30px;
      letter-spacing: 2px;
    }


    h3 {
     font-size: 1.8rem;
      color: #FFD49C;
      margin-bottom: 15px;
      font-weight: bold;
    }

    .shipping-section {
      margin-bottom: 30px;
    }

    .shipping-section h2 {
      font-size: 1.8rem;
      color: #FFD49C;
      margin-bottom: 15px;
      font-weight: bold;
    }

    .shipping-section p {
      font-size: 1.3rem;
      color: #555;
      line-height: 1.6;
    }

    .shipping-section ul {
      list-style-type: disc;
      margin-left: 20px;
      font-size: 1.2rem;
      color: #FFD49C;
    }

    .note {
      background-color: #fff4e6;
      padding: 15px;
      border-left: 4px solid #ffa500;
      margin-top: 20px;
    }

    .note p {
      margin: 0;
      font-size: 1.2rem;
      color: #333;
    }

  </style>
</head>
<body>

<?php
    // Call the navbar header (ensure this is working correctly)
    setheader($navbar1);
?>

<div class="shipping-container">
  <h1>Shipping Policy</h1>

  <!-- Business Days and Holidays -->
  <div class="shipping-section">
    <h2>Business Days + Holidays</h2>
    <p>Orders are processed Monday through Friday, excluding major holidays, e.g., Thanksgiving, Christmas Eve and Day, and New Year’s Day.</p>
  </div>

  <!-- Processing and Delivery Times -->
  <div class="shipping-section">
    <h2>Processing + Delivery Times</h2>
    <p><strong>Updated Shipping Timeline:</strong> Thanks for your patience while shipping is taking longer due to high demand - we are working quickly to fulfill your orders!</p>
    
    <div>
      <h3>U.S.</h3>
      <p>Once your order is placed, it generally takes us 1-3 business days to process and pack. For orders to the 48 contiguous states, shipping generally takes 3-5 business days. Shipping can take longer—roughly 6-8 business days—if you are outside the contiguous United States, i.e., Alaska and Hawaii or 12-14 business days if you are in Puerto Rico and Virgin Islands. If your order is shipping to a PO Box, it typically takes 6-8 business days for delivery. For APO, FPO, and U.S. Territories, please allow roughly 45 days for shipping. These shipping times are estimates only and cannot be guaranteed. Please see our Terms of Service for details.</p>
    </div>

    <div>
      <h3>International</h3>
      <p>For orders shipping internationally, processing and shipping generally takes 7-14 business days.</p>
    </div>

    <div>
      <h3>Expedited Shipping Processing Times</h3>
      <p>If you select expedited or overnight shipping for your order, the order will typically ship out the same day if placed before 12:00PM PT, Monday - Friday. All orders placed after that time or on weekends may be processed on the next business day. Note that orders placed during high-order volume periods may experience a delay in overall processing times.</p>
    </div>
  </div>

  <!-- Shipments to Forwarding Companies -->
  <div class="shipping-section">
    <h2>Shipments to Forwarding Companies</h2>
    <p>Please note that if you choose to use a package forwarding company to ship your order outside of the United States, Rare Beauty will not be liable for any damage, defect, or loss that occurs. We will not be able to offer replacements or refunds for items that are reported missing or damaged if we have reason to believe that they have been delivered to a package forwarding company. Thank you for your understanding.</p>
  </div>

  <!-- PO Boxes and APO/FPO Shipping -->
  <div class="shipping-section">
    <h2>PO Boxes and APO/FPO Shipping</h2>
    <p>We happily ship to PO boxes, as well as APO/FPO addresses.</p>
    <div class="note">
      <p><strong>Note:</strong> Deliveries to PO Boxes ship by Standard method only and may take up to 8 business days. Pre-paid shipping labels will not be provided for U.S. territories and APO/FPO addresses.</p>
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
