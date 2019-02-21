<?php

session_start();
unset ($_session['loggedin']);
session_destroy();
  header('location: login.php');

 ?>
