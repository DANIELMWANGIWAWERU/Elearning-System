
<?php
session_start();
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
  <div style="min-width:980px;margin:0 auto;">
  <div id="loginpagehead" style="background-color: black;
  border-radius: 5;
  color: white;
  font-size: 20;
  padding: 10 10;
  font-family:serif;
  margin-top: 0;
" >
    <h2>Welcome to CarGen Elearning Portal. This eLearning Platform is Designed for CarGen Staff</h2>
  </div>
  <br> <br>
  <div id="loginheading" style="font-size: 30;
  font-family: monospace;
  margin-left: 35%;
  font-weight: bold;">
      <p >PASSWORD RESET PANEL</p>

      </div>
      <section>
      <form class="frm" action="reset.processing.php" method="POST"
      style=" background-color: cyan;
        border:solid black 2px;
        height:auto;
        width:auto;
        margin-left:30%;
        margin-right:30%;">
<table>
  <tr>
  <thead>
    <div id="admin" style="font-family: serif;
    background-color: orange;
    height:auto; padding-left: 30%;
    font-size: 20;align:center;
">
      RESET YOUR PASSWORD
    </div>
  </thead> </tr>
      <tr>
        <td rowspan="5"><img src="img/profile.png" alt="Profile icon" /></td>
      </tr>
      <tr><td>
          <labe>Username:</label><br>
          <input type="text" name="userid" required  /></td>
        </tr>
        <tr> <td>
          <label>Old Password:</label> <br>
          <input type="password" name="oldpassword" required  />
      </td>
      </tr>
    <tr>
        <td><labe>New Password:</label> <br>
          <input type="password" name="newpassword" required  /></td>
        </tr>
        <tr>
        <td>  <label> Confirm Password:</label> <br>
          <input type="password" name="confirmpassword" required />
        </td>
      </tr>

<tr><br>
  <td><input type="submit" name="reset_submit" value="Reset Your Password" class="button"
    style="height: auto;
    background-color: green;
    border-radius: 2;
    font-size: 20;
    margin-top: 5%;"/>
</tr>

  </section>
  </table>

</form>
</div>
</body> </html>
