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
 <h2><u><i>Click on the links below to open the documents attached.</i></u></h2>
<p> <a href="docs/automation.pdf" download style="color:blue;
  font-family: serif;
  padding: 10 10;
font-size: 30;
text-decoration: underline;">
    Proposal for automation of IT process. </a> </p>  <br>
  <p> <a href="docs/automation.pdf" download style="color:blue;
  font-family: serif;
  padding-left: 10;
  font-size: 30;
  text-decoration: underline;">
    Objectives of our proposed IT systems development. </a>
</p> <br>
<p> <a href="docs/automation.pdf" download style="color:blue;
font-family: serif;
padding-left: 10;
font-size: 30;
text-decoration: underline;">
  IT system projects </a>
</p>  <br>
<p> <a href="docs/automation.pdf" download style="color:blue;
font-family: serif;
padding-left: 10;
font-size: 30;
text-decoration: underline;">
  IT process automation.  </a>
</p>  <br>


 <br> <br> <br> <br> <br> <br>
 <?php
 require "footer.php"; ?>
 </body></html>
