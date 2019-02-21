
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
  <div class="body">
<div id="products">
  <h1> <i>About Car and General Company. <br></h1>
  <strong>  Car and General is an organization that has been a great champion in supplying all the products listed below in East Africa for more than 75 years:</strong>
    <ol type="1">
      <li>Generators</li>
      <li>Motorbikes</li>
      <li>Tuktuks</li>
      <li>Laundry Equipments</li>
      <li>Lawn Mowers</li>
      <li>Scooters</li>
      <li>Marine Engines</li>
      <li>Construction Equipment</li>
      <li>A variety of automotive and Engineering Products. </li>
    </ol>
    Reach to the car & general limited to get any of the above listed products today. <br>
     You will not regret it! Our products are of international standards, durable,
     cost friendly, and above all, <br> there is freedom of choice in the product you find best suiting your needs. Come and we will give you a smile!
</div>
<div id="locations">
<h4>Car & General has its headquarter located in Nairobi with branches in Mombasa, Kisumu, Nakuru, <br>
  Kitengela and Eldoret. It also has subsidiaries in the following areas:</h4>
  <ol type="a">
    <li>Uganda (Kampala) with branches in Mbarara, Ndeeba. Car and general (Uganda limited)
    ...Situated at plot 81, Jinja Road, P.O. BOX 207,Kampala</li>
    <li>Tanzania  (Dar-es-Salaam) with branches in Arusha, Mwanza, and Zanzibar...
     Situated at Azikiwe Maktaba Street, Opposite Mafuta House, P.O.BOX 1552, Dar-es-Salaam, Tanzania.
    and Arusha, P.O.BOX 6131, Arusha.</li>
    <li>Rwanda in Kigali,...Car and general(Rwanda)limited,
     ...Situated at KN3 Road, RN 15, Ramera Road. P.O.BOX 7238 Kigali, Rwanda.</li>
  </ol>
In Tanzania, Car and General Company operates Kibo Poultry Products Limited, One of the Oldest Chicken Broiler Farms
 on the African Continent, which is situated at Moshi.
</div>
</div>
<br> <br> <br> <br> <br> <br>
<?php
require "footer.php"; ?>
</body></html>
