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
    <h1> <i>Car & General IT Help Desk Department</i> </h1>
  <h3> <i>Roles in this Department:</i> </h3>
  <ul type="disc">
    <li>Provide our clients with information and support related to our producst and services.</li>
    <li>Troubleshoot any problem and provide guidance related to our computers, electronic
     equipment and software.</li>
    <li>Be always ready to assist customers to get any relevant answer on our products and services.</li>
    <li>Configure computers for new users, repair computer hardware and software problems.</li>
    <li>Email configuration, file management as well as securitu issues.</li>
    <li>Network authentication, incahrge of network resources, email accounts and all server software.</li>
    <li>Database management issues</li>
    <li>Make necessary requests from CarGen company higher management on any technical change.</li>
    <li>Manage all IT assets the best way possible.</li>
    <li>Communicate any issue arising from the IT services including communicating any prospective change.</li>
    <br> <br> <br> <br> <br> <br>

  </div>
  <?php
  require "footer.php"; ?>
  </body></html>
