<?php
   define('DB_SERVER', 'localhost:3036');
   define('username', 'root');
   define('password', 'rootpassword');
   define('userdatabase', 'database');
   $db = mysqli_connect(DB_SERVER,username,password,userdatabase);
?>