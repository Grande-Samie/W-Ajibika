<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'Grande@2$24$m');
define('DB_NAME', 'cms1');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>