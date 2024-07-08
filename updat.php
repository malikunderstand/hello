<?php
if(isset($_POST['btn2'])){
$id = $_POST['id'];    
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
$sql = "UPDATE home SET name = '{$name}', fname = '{$fname}', Caste = '{$caste}', cnic = '{$cnic}',
number = '{$number}', domicile = '{$domicile}' , district = '{$district}',address = '{$address}' WHERE id = {$id}";
//check result
$result = mysqli_query($conn,$sql)or die("Error");
if($result){
    echo "<script>alert('Updated')</script>";
}
else{
    echo "<script>alert('not updated')</script>";
}
header("Location: http://localhost/form/home.php");
}
?>