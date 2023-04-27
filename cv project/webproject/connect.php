<?php
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_nivinshabat'); 
$connect= new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME)or die("Could not connect to database".mysqli_error($connect));
?>