<?php
require_once 'header.php';
if ($loggedin) die();
$user = "";
if (isset($_POST['user'])) {
   $user = fix($_POST['user']);
   $result = query("SELECT * FROM profile WHERE user='$user'");
   $num = $result->num_rows;
   if ($num > 0) {
profile($user);
}
}
echo "<div id='login'>
  <div id='picture'>";

      profile($user);

echo <<<_END
</div>
<pre>
 <form action='login.php' method='post'>
  <input type="text" name="user" placeholder='Username'>
  <input type="password" name="pass" placeholder='Password'>
  <input type="submit" name="submit" value='Login'>
 </form>
</pre>
</div>
_END;
?>

</body>
</html>
