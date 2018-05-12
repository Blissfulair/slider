<?php
require_once 'header.php';
if($loggedin)die();
$error = "";
if (isset($_POST['submit'])) {
   $first = fix($_POST['first']);
   $last = fix($_POST['last']);
   $user = fix($_POST['user']);
   $pass = fix($_POST['pass']);
   $pass2 = fix($_POST['pass2']);
   if (empty($first) || empty($last) || empty($user) || empty($pass) || empty($pass2)) {
     $error = "Please fill all fields";
   }else {
     if (!preg_match( "/A-Za-z0-9/", $user)) {
       $error = "Enter valid charaters like A-Z, a-z, 0-9, _, ., -";
     }else {
       if (strlen($user) < 8) {
         $error = "Username must be more than 8 charaters";
       }else {
         if (!preg_match("/A-Za-z0-9\W{1,}/", $pass)) {
           $error = "Password must contain A-Z, a-z, 0-9 and at least a special character";
         }else {
           if (strlen($pass) < 8) {
            $error = "Password must be more than 8 charaters";

          }else {
            $salt1 = "blessing";
            $salt2 = "blessing";
            $hashpass = hash('ripemd128', "$salt1$pass$salt2");
            $hashpass1 = password_hash($hashpass, PASSWORD_DEFAULT);
            query("INSERT INTO members(first, last, user, pass) VALUES('$first', '$last', '$user',
              '$hashpass1')");
          }
         }
       }
     }
   }
}
echo <<<_END
<div id='login'>
  <form action='signup.php' method='post'>
    <pre>
      <h3 style='color:green; font-size:24px; font-weight: bold;'>Please fill the form below to sign up.</h3>
      <p>$error</p>
      <input type="text" name="first" placeholder='First Name'>
      <input type="text" name="last" placeholder='Last Name'>
      <input type="text" name="user" placeholder='Username'>
      <input type="password" name="pass" placeholder='Password'>
      <input type="password" name="pass2" placeholder='Confirm Password'>
      <input type="submit" name="submit" value='Sign Up'>
   </pre>
  </form>
</div>
_END;
?>
</body>
</html>
