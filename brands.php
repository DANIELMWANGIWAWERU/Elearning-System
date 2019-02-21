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

  <div class="brands" >

  </div>
  <h1 style="margin-left:15%"> <i>Our products are from the following main companies</i> </h1>
<table style="margin-left:15%;border:solid" border="1">
<tr>
<td style="padding:20 40;"> <img src="img/mrf.png" alt="mrf logo" height="150px" width="150px" > </td>
<td style="padding:20 40"><img src="img/brigs.png" alt="brigs&stratton logo" height="150px" width="150px"></td>
<td style="padding:20 40"><img src="img/cummins.png" alt="cummins logo" height="150px" width="150px"></td>
<td style="padding:20 40"><img src="img/tvs.png" alt="tvs logo" height="150px" width="150px"></td>
</tr>
<tr>

  <td style="padding:20 40"><img src="img/lmi.png" alt="lmi logo" height="150px" width="150px"></td>
  <td style="padding:20 40"><img src="img/champion.png" alt="champion logo" height="150px" width="150px"></td>
<td style="padding:20 40"> <img src="img/piaggio.png" alt="piaggio logo" height="150px" width="150px"></td>
<td style="padding:20 40"><img src="img/suzuki.png" alt="suzuki logo" height="150px" width="150px"></td>
</tr>
<tr>


  <td style="padding:20 40"><img src="img/ingersoll.png" alt="ingersoll Rand logo" height="150px" width="150px"></td>
  <td style="padding:20 40"><img src="img/electrolux.png" alt="electrolux logo" height="150px" width="150px"></td>
  <td style="padding:20 40"><img src="img/ferodo.jpeg" alt="ferodo logo" height="150px" width="150px"></td>
  <td style="padding:20 40"><img src="img/kubota.jpg" alt="kubota logo" height="150px" width="150px"></td>
</tr>
<tr>


  <td style="padding:20 40"><img src="img/doosan.png" alt="doosan logo" height="150px" width="150px"></td>


</tr>
</table>
</div>
<br> <br> <br> <br> <br> <br>
<?php
require "footer.php"; ?>
</body></html>
