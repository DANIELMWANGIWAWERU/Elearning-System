
<?php
session_start();
if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin']== false);
  echo "Go to Login First";
 ?>
<! DOCTYPE html>
<html>
<head>
<title>
CarGen Elearning Site
</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg">
  <?php
  require "header.php";
   ?>
  <div class="main">
    <h1> <i>Car & General Purchasing/Procurement Department</i> </h1>
  <h3> <i>Roles in this Department:</i> </h3>
  <ul type="disc">
    <li>Procure all the needed tools for production or daily operation of CarGen company</li>
     <li>Maximize profitability by continuously evaluating whether the goods are obtained
     at the best possible cost.</li>
    <li>Find best sellers with quality supplies and better prices.</li>
    <li>Handle all the paperwork pertaining purchases and delivery of all supplies and materials.</li>
    <li>Ensure timely delivery of materials/ products/ services.</li>
    <li>Ensure promised deliveries are received on time and payments made fully and on time.</li>
    <li>Ensure that enough capital is there to buy any product/ material/ service.</li>
    <li>Enssure that all purchases made comply with our company policies.</li>
    <br> <br> <br> <br> <br> <br>
  </ul>


  </div>

  <?php
  require "footer.php"; ?>
  </body></html>
