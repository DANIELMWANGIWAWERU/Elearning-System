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
  <div style="min-width:980px;margin:0 auto;">
  <div class="menu" >
    <div class="logo">
  <i>CarGen</i>
</div>
     <a href="welcome.php" target="_self">HOME  |</a>
    <a href="about.php" target="_self">ABOUT US  |</a>

    <div id="select">
    <select id="moreselect" onchange="window.location.href=this.value" >
    <option selected="view more">VIEW MORE HERE</option>
    <option value="brands.php">OUR PRINCIPAL SUPPLIERS</option>
    <option value="partners.php"> OUR PARTNERS</option>
    <option value="videos.php">VIDEOS</option>
    <option value="documents.php">VIEW AVAILABLE DOCUMENTS</option>

    </select>

    </div>
    <div id="select">
    <select id="select" onchange="window.location.href=this.value" >
    <option selected="DEPARTMENTS">DEPARTMENTS</option>
    <option value="finance.php">Accounting & Finance</option>
    <option value="sales.php">Sales & Marketing</option>
    <option value="hr.php">HRM</option>
    <option value="production.php">Production</option>
    <option value="R&D.php">Research And Development</option>
    <option value="purchasing.php">Purchasing & Procurement</option>
    <option value="helpdesk.php">IT Help Desk</option>

    </select>

</div>

    <a href="quiz.php" target="_self">ATTEMPT QUIZ  |</a>
  <a href="logout.php" target="_self" style="margin-right:0;"> LOGOUT</a>
<h6>
  <?php
echo "LAST LOGIN:"." ".date("m/d/y h:i A");
  ?>
</h6>
</div> <br><br><br> <br>

</div>

</body></html>
