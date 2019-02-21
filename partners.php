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


<div class="partners">
  <table>
    <tr>
    <td style="padding:20px 20px"><img src="img/kibochick.jpeg" alt="Kibo Chick Logo" height="150px" width="200px" align="left"</td>
    <td style="padding:15px">Car & General has been operating Kibo poultry products limited which is located in Moshi in Tanania,
    and is one of the oldest chicken broiler farms n the African continent. Kibo poultry products farm has also introduced day-old layers in addition to
   the broilers products.</td>
    </tr>
    <tr>
  <td style="padding:20px 20px"><img src="img/uon.jpeg" alt="uon Logo" height="150px" width="200px" align="left"></td>
  <td style="padding:15px">In the engagement of Corporate Social Responsibility (CSR) activities Car and General
  collaborates with education institutions such as in the university of Nairobi in enhancing education in Kenya. Car & general
signs memoranda with universities and technical institutions in order to offer trainings to students and even lecturers at its facility and
donates equipments. Students in these institutions get attachment positions and the institutions also get general support
 from car and general limited. </td>
</tr>
<tr>
  <td style="padding:20px 20px"><img src="img/garmin.png" alt="garmin Logo" height="150px" width="200px" align="left"></td>
  <td style="padding:15px">Car and General partnes with Garmin limited which was formely known as ProNav. Garmin is a multinational
   technology company started in 1989 in Lenexa, Kansas in the United States. It supplies Car and General ltd with motorcycles,
  marine products, and a variety of automotive products. Car and General partners with the garmin limited from the sub-saharan Africa.</td>
</tr>
  </table>
</div>
<br> <br> <br> <br> <br> <br>
<?php
require "footer.php"; ?>
</body></html>
