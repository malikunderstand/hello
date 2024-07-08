<?php
if(isset($_POST['btn1'])){
$name = $_POST['name'];
$fname = $_POST['fname'];
$caste = $_POST['caste'];
$cnic = $_POST['cnic'];
$number = $_POST['num'];
$domicile = $_POST['domicile'];
$district = $_POST['district'];
$address = $_POST['address'];


//create connection
$conn = mysqli_connect("localhost","root","","form")or die("Error");

//Write query
$sql = "INSERT INTO home(name,fname,Caste,cnic,number,domicile,district,address) 
VALUE('{$name}','{$fname}','{$caste}','{$cnic }','{$number }','{$domicile}','{$district}','{$address}')";

//check result
$result = mysqli_query($conn,$sql)or die("Error");
if($result){
    echo "<script>alert('Submitted')</script>";
}
else{
    echo "<script>alert('not Submitted')</script>";
}
header("Location: http://localhost/form/home.php");
}
?>