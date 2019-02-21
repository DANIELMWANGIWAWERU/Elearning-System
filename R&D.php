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
    <h1> <i>Car & General Research And Development Department</i> </h1>
  <h3> <i>Roles in this Department:</i> </h3>

  <ul type="disc">
    <li>Carry out thorough study to support development of a new product in CarGen.</li>
    <li>Ensure that the new developed product meets the predefined product standards and specifications.</li>
    <li>Regularly evaluate our products to ensure that they rmeain functional.</li>
    <li>Resolve any problem with our existing products if any to prevent malfunctioning products.</li>
    <li>Regularly check the quality of our products and services.</li>
    <li>Actively participate in engineering innovative ideas to improve our company's future.</li>
    <br> <br> <br> <br> <br> <br>
  </ul>

  </div>

  <?php
  require "footer.php"; ?>
  </body></html>
