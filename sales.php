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

    <h1> <i>Car & General Sales And Marketing Department</i> </h1>
  <h3> <i>Roles in this Department:</i> </h3>
  <ul type="disc">
    <li>Sales Development Representative to research, identify and contact the leads with
      our prospective clients.</li>
    <li>Account Executive in sales to bring in new businesses and make sales.</li>
    <li>Account Executive in sales to create presentations, run demonstrations on sales plans
    , write proposals, identify any hindrances to purchases process, negotiate sales terms
   with our clients and make sales.</li>
    <li>Sales specialist to be in aposition to handle sophisticated issues regarding Sales
    or any difficult customer questions. Also make demostrations and client proposals.</li>
    <li>Our Customer Success Represenatative to follow up and renew sales with our customers
     who have already done purchases.</li>
    <li>Ensure that CarGen customers remain happy and are enjoying our partnership.</li>
    <li>Sales Manager to be proactive in leading and managing the sales team.
    Be able to measure and improve sales and marketing performance.</li>
    <br> <br> <br> <br> <br> <br>
  </ul>

  </div>
  <?php
  require "footer.php"; ?>
  </body></html>
