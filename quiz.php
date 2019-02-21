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
 <div id="quiz" style="background-color:green; border-radius: 7;color: white;font-size: 20;
 font-family:sans-serif;margin-top: 0;padding: 10;" >
<h2 style="margin-left:20%;color:white"><bold>WELCOME TO CAR AND GENERAL QUIZ SITE FOR ELEARNING</bold></h2>
</div>
<div class="quizmain" style="margin-left:20%;">


<h2 style="margin-left:3%;color:red;font-family:verdana;font-size:bold;"><i>SELECT THE
   ANSWERS YOU
   CONSIDER CORRECT BEFORE YOU SUBMIT!!! </i></h2>
<form class="" action="quizprocessing.php" method="post">

<labe>Username:</label>
      <input type="text" name="userid" required style="height: 30;" />
    <br> <br> <br>
  1. What is the vision of Car and General Company?
     <ol type="A">
      <li> <input type="radio" name="ans1" value="0">  To supply automotive and engineering products. </li>
   <li> <input type="radio" name="ans1" value="1"> To provide power for better living And
   make customers smile on every street, in every town. </li>
   <li>
    <input type="radio" name="ans1" value="0">To provide power for better living
   and better tomorrow. </li>
 <li>
    <input type="radio" name="ans1" value="0"> None of the above. </li>

</ol>
2. What is the mission of Car and General Company?
    <ol type="A">

    <li>
    <input type="radio" name="ans2" value=1> To be the leading organization in East Africa
   in power generation, automotive and engine-related products.  </li>
    <li>
    <input type="radio" name="ans2" value=0> To be the leading organization
   in East Africa in supply of power generators.  </li>
     <li>
    <input type="radio" name="ans2" value=0> To be the champion in supply of engine-related
   products. </li>
 <li>
    <input type="radio" name="ans2" value=0>None of the above.  </li>  </ol>

  3. Which among the listed products below is not part
     of what the Car and General supplies?
     <ol type="A">
     <li>
     <input type="radio" name="ans3" value=0>Generators. </li> <br>
     <li>
     <input type="radio" name="ans3" value=0>Scooters. </li> <br>
    <li>
     <input type="radio" name="ans3" value=0>Marine Engines. </li> <br>
<li>
     <input type="radio" name="ans3" value=1>None of the above. </li>
  <br>  </ol>

    4. Which of the listed towns below has Car and General
     Company established a branch in Kenya?

   <ol type="A">
   <li>
   <input type="radio" name="ans4" value=0>Kiambu. </li>
 <li>
   <input type="radio" name="ans4" value=0>Marsabit. </li>
 <li>
   <input type="radio" name="ans4" value=1>Mombasa. </li>
 <li>
   <input type="radio" name="ans4" value=0>Isiolo. </li>
   <li>
   <input type="radio" name="ans4" value=0>None of the above. </li> </ol>

    5. Which of the following is a partner to Car and General?
  <ol type="A">
  <li>
  <input type="radio" name="ans5" value=0> Kenchic poultry ltd.</li>
 <li>
  <input type="radio" name="ans5" value=1> Garmin limited. </li>
     <li>
  <input type="radio" name="ans5" value=0>KPLC. </li>
  <li>
  <input type="radio" name="ans5" value=0>None of the above. </li> </ol>
<br>

    <input type="submit" name="quiz_submit" value="SUBMIT" style="width: auto;
    height: auto;
    background-color: green;
    border-radius: 5;
    font-size: 20;" />

</ol>
</form>



</div>
 <br> <br> <br> <br> <br> <br>
 <?php
 require "footer.php";
 ?>

 </body></html>
