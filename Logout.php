<?php
 session_start();
 if (!isset($_SESSION['user'])) {
  header("Location: RegPage.php");
 } else if(isset($_SESSION['user'])!="") {
  header("Location: Index.html");
 }
 
 if (isset($_GET['logout'])) {
  unset($_SESSION['user']);
  session_unset();
  session_destroy();
  header("Location: Index.html");
  exit;
 }