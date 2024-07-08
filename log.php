<html>
    <head>
<title>LogIn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav class="bg-light py-4">
        <h4 class="ml-5 pl-5">LogIn Form</h4>
    </nav>
    <h4 class="text-center mt-5">LogIn Form<h4>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="form-group">
                            <lable>Enter Name</lable>
                            <input type="text" name="nam" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Enter Password</lable>
                            <input type="text" name="fnam" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" name="btnb" class="form-control bg-dark text-light">
                        </div>
                    </form>
                    <?php

if(isset($_POST['btnb'])){
$username = $_POST['nam'];
$passowrd = $_POST['fnam'];


$conn = mysqli_connect("localhost","root","","form")or die("error");

$sql = "SELECT id,district FROM district  WHERE id  = '{$username}' AND district = '{$passowrd}'";
$result = mysqli_query($conn,$sql)or die("error");

while($row = mysqli_fetch_assoc($result)){
        session_start();
        $_SESSION["name"] = $row['name'];
        $_SESSION["fname"] = $row['fname'];
        header("Location: http://localhost/form/header.php");


    }
}
?>
                </div>
            </div>
        </div>
<?php include 'fot.php' ?>
</body>
</html>