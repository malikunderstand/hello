<?php
//create connection
$conn = mysqli_connect("localhost","root","","form")or die("Error");

$id = " ";
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

//write query
$sql = "DELETE FROM home WHERE id = '{$id}'";
$result = mysqli_query($conn,$sql)or die("Error");

header("Location: http://localhost/form/home.php");
?>