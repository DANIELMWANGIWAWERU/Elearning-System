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
    <h1> <i>Car & General Human Resource Management Department</i> </h1>
  <h3> <i>Roles in this Department:</i> </h3>
  <ul type="disc">
    <li>Oversee hiring, screening,interviewing and recruiting of employees within Car&General
     for open positions.</li>
    <li>Develop employee training materials explaining clearly the CarGen's policies and procedures
     to the new staffs</li>
    <li>Handle training and development of staff within CarGen; Determine training needs of employees.</li>
    <li>Contract training personnels and monitor training budgets.</li>
    <li>Handle employee payroll and ensure all employees receive their payments on time and precisely.</li>
    <li>Manage compensations including pensions and any other benefit offered to our employees.</li>
    <li>Manage all kinds of employee benefits such as medical insurance.</li>
    <li>Keep track of our employees attendance to work and job protected leave.</li>
    <li>Handle employee relation matters within CarGen company.</li>
    <li>Interpret and enforce employement and labor laws within our company.</li>
    <br> <br> <br> <br> <br> <br>

  </div>
  <?php
  require "footer.php"; ?>
  </body></html>
