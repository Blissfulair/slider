<?php
session_start();
require_once 'functions.php';
if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
$loggedin = TRUE;
}else $loggedin = FALSE;
 echo <<<_END
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>$appName</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="jquery-3.2.1.min.js"></script>

  </head>
<body>
<div class='header'>
  <div class='menu' id='menu'><i class='fa fa-bars'></i></div>
</div>
_END;
if ($loggedin) {
echo <<<_END
<div class='nav' id='nav'>
<ul>
  <li><a href='profile.php?view=$user'>Home</a></li>
  <li><a href='profile.php'>Profile</a></li>
  <li><a href='friend.php'>Friends</a></li>
  <li><a href='chat.php'>Chat</a></li>
</ul>
</div>
_END;
}else {
  echo <<<_END
  <div class='nav' id='nav1'>
        <ul>
          <li><a href='index.php'>Home</a></li>
          <li><a href='signup.php'>Signup</a></li>
          <li><a href='login.php'>Login</a></li>
          <li><a href='contact.php'>Contact</a></li>
        </ul>
  </div>
_END;
}
?>
<script>

</script>
<script src="script.js"></script>
