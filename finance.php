
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
    <h1> <i>Car & General Finance And Accounting Department</i> </h1>
<h3> <i>Roles in this Department:</i> </h3>
<ul type="disc">
  <li>Receiving and Recording the cash paid by clients for any servive rendered or good sold.</li>
  <li>Ensure our customers receive an invoice for any good or service.</li>
  <li>Ensure that our customers pay any balance due on the invoice.</li>
  <li>Keen monitoring of cash disbursements in the Car and General organization; Paying our vendors
  all supplies purchased and also monitoring all expenses incurred by our businesses including
taxes, utilities and other expenses </li>
  <li>Accounts payable to ensure that write checks are written to pay our vendors</li>
  <li>Ensure employees are paid timely and on a regular schedule.</li>
<br> <br> <br> <br> <br> <br>
</ul>

</div>
<?php
require "footer.php"; ?>
</body></html>
