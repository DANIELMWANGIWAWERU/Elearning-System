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


  <h2 style="font-size:30; font-family:serif;color:black;padding-left:20%;">WATCH THE VIDEOS BELOW FOR MORE INSIGHT ON THE CAR & GENERAL COMPANY CSR
     ENGAGEMENTS AND OTHER INITIATIVES.</h2>
<div class="video">
  <table>

<tr>
<td>
<video width="300" height="200" controls align="left">
  <source src="vids/Car_and_General_at_the_23rdKenyaHomesEx.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</td>
<td>Car and General at the 23rdKenyaHomesEx</td>
</tr>
<tr>

<td>
<video width="300" height="200" controls align="left">
  <source src="vids/Car_and_General_introduces_a_new_motorcycle_dubbed_TVS_150cc_at_the_Coast.mp4" type="video/mp4">
Your browser does not support the video.
</video>
</td>
<td>Car & General introduces a new motorcycle dubbed TVS 150cc at the coast</td>
</tr>
<tr>

<td>
<video width="300" height="200" controls align="left">
  <source src="vids/Mombasa_residents_treated_to_free_rides_during_Valentine_s_Day_by_Car_and_General_Company.mp4" type="video/mp4">
Your browser does not support the video.
</video>
</td>
<td>Mombasa residents treated to free rides during Valentines Day by Car and General Company</td>
</tr>
<tr>
  <td>

<video width="300" height="200" controls align="left">
  <source src="vids/Car_and_General_in_Kitengela.webm" type="video/webm">
Your browser does not support the video.
</video>
</td>
<td>Car and General in Kitengela</td>
</tr>
<tr>
  <td>

<video width="300" height="200" controls align="left">
  <source src="vids/Vijay_Gidoomal_Group_Managing_Director_at_Car_General.webm" type="video/webm">
Your browser does not support the video.
</video>
</td>
<td>Vijay Gidoomal Group Managing Director at Car General</td>
</tr>

</table>
</div>
<br> <br> <br> <br> <br> <br>
<?php
require "footer.php"; ?>
</body></html>
