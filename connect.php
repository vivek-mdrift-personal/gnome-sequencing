<?php
$connection = mysql_connect('localhost', 'root', 'Om@shantiom123');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('users');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>
