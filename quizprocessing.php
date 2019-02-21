<?php
require "header.php";
if (isset ($_POST['quiz_submit'])){
  $questions=5;
  $percent=0;
  $correct=0;
  if(!isset($_POST['ans1']))
  {
    $correct1=0;
  }
  elseif(isset($_POST['ans1'])){
  if($_POST['ans1'] ==1) {
    $correct1=1;
  }
    else{
      $correct1=0;
    }
  }
    if(!isset($_POST['ans2']))
    {
      $correct2=0;
    }
    elseif(isset($_POST['ans2'])){
  if ($_POST['ans2'] ==1) {
    $correct2=1;
  }
    else{
      $correct2=0;
    }

}

if(!isset($_POST['ans3']))
{
  $correct3=0;
}
  elseif(isset($_POST['ans3'])){
  if($_POST['ans3']==1) {
    $correct3=1;
  }
    else{
      $correct3=0;
  }
}
if(!isset($_POST['ans4']))
{
  $correct4=0;
}

elseif(isset($_POST['ans4'])){
  if($_POST['ans4']==1) {
    $correct4=1;
  }
    else{
      $correct4=0;
  }
}
if(!isset($_POST['ans5']))
{
  $correct5=0;
}

elseif(isset($_POST['ans5'])){
  if($_POST['ans5'] ==1) {
    $correct5=1;
  }
    else{
      $correct5=0;
  }
}

$correct=$correct1+$correct2+$correct3+$correct4+$correct5;
$percent=($correct/$questions)*100;

$user=$_POST['userid'];
$servername= 'localhost';
$username= 'daniel';
$userpass= '_MaradonaH!19912';
$dbname= 'elearning';
$conn= mysqli_connect($servername,$username,$userpass,$dbname);

$user= mysqli_real_escape_string($conn,$user);
$user= stripcslashes($user);
$user= htmlentities($user);
$sql="UPDATE quiz SET quiz_score='$percent' WHERE username='$user' AND quiz_score=0";
$result = mysqli_query($conn,$sql);

if($result) {
    echo "
  <table border=2 width=40% height=20% style='background-color:
  purple;margin-left:30%;margin-top:5%'>
  <tr>
  <td>Total Questions </td>
  <td>Your score</td>
  <td>Score in Percentage</td>
  </tr>
  <tr>
  <td>$questions</td>
  <td>$correct</td>
  <td>$percent</td>
  </tr>

  </table> <br> <br>";
  echo "<h1 style='color:red;margin-left:20%;
  font-family:sans-serif;font-wight:bold'>Only your first attempt results are saved.</h1> <br>";

  echo "<h1 style='color:red;margin-left:13%;
  font-family:sans-serif;font-wight:bold'>Your chance to attempt quiz has expired! Wait till next quiz
  update.</h1> <br> ";
}
  else
  {
    echo "<h1 style='color:red;margin-left:20%;
  font-family:sans-serif;font-wight:bold'>Your Your username may be
   incorrect or you had already made your first attempt!!!</h1> <br> <br>";
}
mysqli_close($conn);
}

?>
