<html>
    <head>
<title>Updates</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <?php include 'header.php'?>

    <h4 class="text-center mt-5">Update Form<h4>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <?php 
                    //create connection
                    $conn = mysqli_connect("localhost","root","","form")or die("Error");
                    
                    $id = " ";
                    if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    }
                    
                    $sql2 = "SELECT name,fname FROM home WHERE id = '{$id}' ";
                    $result2 = mysqli_query($conn,$sql2)or die("Error");

                    if(mysqli_num_rows($result2) > 0 ){
                        while($row2 = mysqli_fetch_assoc($result2)){
                    
                    ?>
                    <form action="updat.php" method="POST">
                        <div class="form-group">
                            <lable>Name</lable>
                            <input type="hidden" name="id" class="form-control" value="<?php echo $row2['id']; ?>"/>
                            <input type="text" name="name" class="form-control" value="<?php echo $row2['name']; ?>"/>
                        </div>
                        <div class="form-group">
                            <lable>Father Name</lable>
                            <input type="text" name="fname" class="form-control" value="<?php echo $row2['fname']; ?>"/>
                        </div>
                        <div class="form-group">
                            <lable>Caste</lable>
                            <input type="text" name="caste" class="form-control" value="<?php echo $row2['Caste']; ?>"/>
                        </div>
                        <div class="form-group">
                            <lable>C/NIC Number</lable>
                            <input type="number" name="cnic" class="form-control" value="<?php echo $row2['cnic']; ?>"/>
                        </div>
                        <div class="form-group">
                            <lable>Mobile</lable>
                            <input type="number" name="num" class="form-control" value="<?php echo $row2['number']; ?>"/>
                            </div>
                            <div class="form-group">
                            <lable>Domicile</lable>
                            <select class="form-control" name="domicile" value="<?php echo $row2['domicile']; ?>">
                            <option>Select Domicile</option> 
                            <?php
                            $conn = mysqli_connect("localhost","root","","form")or die("Error");
                            $sql = "SELECT * FROM domicile";
                            $result = mysqli_query($conn,$sql)or die("Error");
                            while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <option selected value="<?php echo $row['domicile'];?>"><?php echo $row['domicile'];?></option>
                            <?php }?>
                            </select>  
                            </div>
                            <div class="form-group">
                            <lable>District</lable>
                            <select class="form-control" name="district" value="<?php echo $row2['district']; ?>">
                            <option>Select District</option> 
                            <?php
                            $conn = mysqli_connect("localhost","root","","form")or die("Error");
                            $sql1 = "SELECT * FROM district";
                            $result1 = mysqli_query($conn,$sql1)or die("Error");
                            while($row1 = mysqli_fetch_assoc($result1)){
                            ?>
                            <option selected value="<?php echo $row1['district'];?>"><?php echo $row1['district'];?></option>
                            <?php }?>
                            </select>  
                            </div>
                        <div class="form-group">
                            <lable>Address</lable>
                            <input type="text" name="address" class="form-control" value="<?php echo $row2['address']; ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update" name="btn2" class="form-control bg-dark text-light">
                        </div>
                    </form>
                    <?php }}?>
                </div>
            </div>
        </div>

</body>
</html>