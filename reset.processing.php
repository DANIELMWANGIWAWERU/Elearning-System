<?php
session_start();
if (isset($_POST['reset_submit'])){
  $userid= $_POST['userid'];
  $oldpwd= $_POST['oldpassword'];
  $newpwd= $_POST['newpassword'];
  $confirmpwd= $_POST['confirmpassword'];
  if(empty ($userid) || empty ($oldpwd) || empty($newpwd) || empty ($confirmpwd)){
    echo "Fill in all fields!";
    echo '<br><br><form action="reset.php" method="POST" > <br>
    <input type="submit" name="reset_submit" value="GO BACK TO RESET" class="button" style="width: 200;height: 30;background-color: green;
    border-radius: 5;font-size: 15;"/>
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
  $userid= stripcslashes($userid);
  $oldpwd= stripcslashes($oldpwd);
  $newpwd= stripcslashes($newpwd);
  $confirmpwd= stripcslashes($confirmpwd);

  $userid= mysqli_real_escape_string($conn,$userid);
  $oldpwd= mysqli_real_escape_string($conn,$oldpwd);
  $newpwd= mysqli_real_escape_string($conn,$newpwd);
  $confirmpwd= mysqli_real_escape_string($conn,$confirmpwd);

  $userid= htmlentities($userid);
  $oldpwd= htmlentities($oldpwd);
  $newpwd= htmlentities($newpwd);
  $confirmpwd= htmlentities($confirmpwd);

  //connecting to server
  if(!$conn) {
    die ("Could not connect:" .mysqli_error($conn));
  }
  else {
if($newpwd !== $confirmpwd) {
echo "The Password do not Match!";
echo '<br><br><form action="reset.php" method="POST" > <br>
<input type="submit" name="reset_submit" value="GO BACK TO RESET" class="button" style="width: 200;height: 30;background-color: green;
border-radius: 5;font-size: 15;"/>
</form>
 ';
}
 else {
    $sql= "UPDATE staff_login SET password='$confirmpwd' WHERE password='$oldpwd' and username ='$userid'";
    $result=mysqli_query($conn,$sql);

    if($result !== true) {
      echo "Password Reset Failed. Try again!";
      echo '<br><br><form action="reset.php" method="POST" > <br>
      <input type="submit" name="reset_submit" value="GO BACK TO RESET" class="button" style="width: 200;height: 30;background-color: green;
      border-radius: 5;font-size: 15;"/>
      </form>
       ';
  }
else{
  echo "YOU HAVE SUCCESSFULLY RESET YOUR PASSWORD!</h2>";
      echo '<br><br><form action="login.php" method="POST" > <br>
      <input type="submit" name="login_submit" value="GO BACK TO LOGIN" class="button" style="width: 200;height: 30;background-color: green;
      border-radius: 5;font-size: 15;"/>
      </form>
       ';}
}
}
}

mysqli_close($conn);
}


 ?>
