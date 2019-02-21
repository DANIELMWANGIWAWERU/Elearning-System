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
  <h1> <i>Car & General eLEARNING PLATFORM</i> </h1>
  <h2>Are You Ready To Learn about the Car and General company? Then you are at the right place.</h2> <br>
  <p>This is Car and General company elearning site. This is where you can get self educated <br>
   about all the products and services of the Car and General company. You can also view some of the videos provided here
 by clicking on the video link in the navigation bar above.  </p>
 <br>
 All information provided here is for the purpose of helping our staff understand our organization better at their own pace and
  time, to access necessary resources to enhance their learning about CarGen so that they can improve on their output
  as they work with us. <br> <br>
  This elearning platform is also designed ideally to help in actualization of our vision and mission which are: <br> <br>
<i> <strong>  OUR VISION: To provide power for better living and make customers smile on every street, in every town. <br><br>
  OUR MISSION: To be the leading oganization in East Africa in power generation, automotive and engine-related products.</strong></i>
</div>
<br> <br> <br> <br> <br> <br>
<?php
require "footer.php"; ?>
</body></html>
