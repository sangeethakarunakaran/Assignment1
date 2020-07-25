<?php
$connect = mysqli_connect('localhost', 'root', '');
if (!$connect){
    die("Database Connection Failed" . mysqli_error($connect));
}
$select_db = mysqli_select_db($connect, 'project');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connect));
}