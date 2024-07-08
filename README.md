# hello
<html>
    <head>
<title>Add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <?php include 'header.php'?>

    <h4 class="text-center mt-5">Register Form<h4>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="submit.php" method="POST">
                        <div class="form-group">
                            <lable>Name</lable>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Father Name</lable>
                            <input type="text" name="fname" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Caste</lable>
                            <input type="text" name="caste" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>C/NIC Number</lable>
                            <input type="number" name="cnic" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Mobile</lable>
                            <input type="number" name="num" class="form-control">
                            </div>
                            <div class="form-group">
                            <lable>Domicile</lable>
                            <select class="form-control" name="domicile">
                            <option>Select Domicile</option> 
                            <?php
                            $conn = mysqli_connect("localhost","root","","form")or die("Error");
                            $sql = "SELECT * FROM domicile";
                            $result = mysqli_query($conn,$sql)or die("Error");
                            while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <option value="<?php echo $row['domicile'];?>"><?php echo $row['domicile'];?></option>
                            <?php }?>
                            </select>  
                            </div>
                            <div class="form-group">
                            <lable>District</lable>
                            <select class="form-control" name="district">
                            <option>Select District</option> 
                            <?php
                            $conn = mysqli_connect("localhost","root","","form")or die("Error");
                            $sql1 = "SELECT * FROM district";
                            $result1 = mysqli_query($conn,$sql1)or die("Error");
                            while($row1 = mysqli_fetch_assoc($result1)){
                            ?>
                            <option value="<?php echo $row1['district'];?>"><?php echo $row1['district'];?></option>
                            <?php }?>
                            </select>  
                            </div>
                        <div class="form-group">
                            <lable>Address</lable>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Register" name="btn1" class="form-control bg-dark text-light">
                        </div>
                    </form>
                </div>
            </div>
        </div>

</body>
</html>
