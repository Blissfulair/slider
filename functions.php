<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "project";
$appName = "chatin";
$connect = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if(!$connect) die("Database unavailable");

function query($sql){
  global $connect;
  $result = mysqli_query($connect, $sql);
  if(!$result)die("Query error");
  return $result;
}

function createTable($name, $sql){
  query("CREATE TABLE IF NOT EXISTS $name($sql)");
  echo "Table $name already exists <br>";
}

function profile($user){
  if(file_exists("$user.jpg") || file_exists("$user.jpeg") ||file_exists("$user.png"))
  echo "<img src='$user.jpg'>";
}

function sessionDestroy(){
  if(session_id() != "" || isset($_COOKIE['session_name()']) )
  setcookie(session_name(), '', time()-60, '/');
  session_destroy();
}
function fix($var){
  global $connect;
  $var = stripslashes($var);
  $var = strip_tags($var);
  $var = htmlentities($var);
  $var = mysqli_real_escape_string($connect, $var);
  return $var;
}

?>
