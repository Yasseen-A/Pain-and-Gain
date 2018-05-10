<!--this some of the stuff that I had to learn myself-->
<!--This php file is what connects the webpage to my databse-->
<?php

$dbServername = "localhost";
$dbUserrname = "root";
$dbPassword = "";
$dbName = "my_yasseen";

$conn = mysqli_connect($dbServername,$dbUserrname,$dbPassword,$dbName);
