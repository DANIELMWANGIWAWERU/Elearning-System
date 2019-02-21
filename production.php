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
    <h1> <i>Car & General Production And Planning Department</i> </h1>
  <h3> <i>Roles in this Department:</i> </h3>

  <ul type="disc">
    <li>Set standards and targets of the whole production process.</li>
    <li>Closely monitor the quantity and quality of production for maximum output.</li>
    <li>Obtain necessary materials for smooth production process.</li>
    <li>Work with store department to stock all necessary tools, spares,and equipments needed
     to servise the production process.</li>
    <li>Liase with technical support team to researched new products or modification to existing ones.</li>
    <li>Estimate the cost of production process.</li>
    <li>Design and test new product processes and product types.</li>
    <li>Conduct quality control and inspection.  </li>
    <br> <br> <br> <br> <br> <br>
  </ul>

  </div>

  <?php
  require "footer.php"; ?>
  </body></html>
