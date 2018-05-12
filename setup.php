
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require_once 'functions.php';
     createTable('profile', 'user varchar(128),
                  AboutMe varchar(4096), time int(16), INDEX(user(6))');

     createTable('members', 'id int(11) not null auto_increment primary key,
                  first varchar(128) not null,
                  last varchar(128) not null,
                  user varchar(128),
                  pass varchar(256), INDEX(user(6))');
     createTable('friends', 'user varchar(128),
                  friend varchar(128), time int(16), INDEX(user(6),friend(6))');
     createTable('post', 'user varchar(128),
                  post varchar(8192), time int(16), INDEX(user(6))');
    ?>
  </body>
</html>
