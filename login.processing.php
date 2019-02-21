<?php
if (isset ($_POST['login_submit'])){
  $user= $_POST['userid'];
  $pass= $_POST['password'];

  if(empty ($user) || empty ($pass)){
    echo "Fill in all fields!";
    echo '<br><form action="login.php" method="post"><br>
    <input type="submit" name="login_submit" value="GO BACK TO LOGIN" class="button" style="width: 200;height: 30;background-color: green;
    border-radius: 5;font-size: 15;" />
    </form>
     ';

  }
  else{
  //preventing mysql injection

  $servername= 'localhost';
  $username= 'daniel';
  $userpass= '_MaradonaH!19912';
  $dbname= 'elearning';
  $conn= mysqli_connect($servername,$username,$userpass,$dbname);
  $user= stripcslashes($user);
  $pass= stripcslashes($pass);

  $user= mysqli_real_escape_string($conn,$user);
  $pass= mysqli_real_escape_string($conn,$pass);
  $user= htmlentities($user);
  $pass= htmlentities($pass);
  //connecting to server
  if(!$conn) {
    die ("Could not connect:" .mysqli_error($conn));
  }
  else{
$sql= "SELECT * FROM staff_login where username='$user' and password='$pass'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if ($row['username'] == $user && $row['password'] == $pass) {
  $_SESSION['loggedin'] = true;
  $_SESSION['userid'] = $user;
  require "welcome.php";
}
else{
echo 'LOGIN FAILED <br> <br>
<form action="login.php" method="post"> <input type="submit" name="login_submit" value="GO BACK TO LOGIN" class="button" style="width: 200;height: 30;background-color: green;
border-radius: 5;font-size: 15;" />
</form>
 ';


}
  mysqli_close($conn);

}

}
}
?>
