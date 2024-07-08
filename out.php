<?php
$conn = mysqli_connect("localhost","root","","form")or die("Error");


session_start();

session_destroy();

session_unset();



header("Location: http://localhost/form/log.php");













?>