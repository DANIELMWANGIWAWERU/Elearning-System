
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
<script type="text/javascript">
function backBlock()
{
  window.history.forward()
}
backBlock();
window.onload=backBlock;
window.onpageshow=function(evt)
if(evt.persisted) backBlock{
  window.onload= function() {void(0)}
}
</script>
</head>
<body class="bg" onload="javascript:backBlock();">
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
  margin-left: 33%;
  font-weight: bold;">
      <p >WELCOME TO STAFF LOGIN PANEL</p>

      </div>
      <section>
      <form class="frm" action="login.processing.php" method="POST"
    style=" background-color: cyan;
      border:solid black 2px;
      height:auto;
      width:auto;
      margin-left:30%;
      margin-right:30%;" >

      <table>
        <tr>
        <thead>
          <div id="admin" style="font-family: serif;
          background-color: orange;
          height:auto; padding-left: 30%;
          font-size: 20;align:center;
      ">
            STAFF LOGIN
          </div>
        </thead> </tr>
      <tr>
        <td rowspan="4"><img src="img/profile.png" alt="Profile icon" ></td></tr>
      <tr>
        <td><labe>Username:</label> <br>
          <input type="text" name="userid" required  /> </td> </tr>
          <tr> <td>
          <label>Password:</label> <br>
          <input type="password" name="password" required />
        </td>
      </tr>
      <tr>
        <td><input type="submit" name="login_submit" value="login" class="button" style="height:auto;
        background-color: green;
        border-radius: 5;
        font-size: 20;" />

        </td>
      </tr>
<tr>
<td> <br>
  <a href="reset.php" target="_self">RESET YOUR PASSWORD </a> </td>
</tr>
<td>
  <a href="mailto:info@cargen.com" target="_self">HAVE NO ACCOUNT? EMAIL US. </a> </td>
</tr>


  </section>
  </table>

</form>
</div>
</body> </html>
