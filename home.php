<html>
    <head>
<title>Read</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <?php include 'header.php'?>

<!--
    <div class="row mt-5 d-flex justify-content-end ml-5 pl-5">
        <div class="col-6">
            <a href="" class="btn btn-primary ml-5 mr-5">Register</a>
        </div>
    </div>
    -->
<div class="container mt-5">
<h4 class="text-center mt-5 mb-3">Read The Record<h4>
    <div class="row">
        <div class="col-12">
            <?php 
            //create connection
            $conn = mysqli_connect("localhost","root","","form",)or die("Error");
            
            //write query
            $sql = "SELECT * FROM home";
            $result = mysqli_query($conn,$sql)or die("Error");
            if(mysqli_num_rows($result) > 0 ){
            ?>
            <table class="table table-striped bg-light text-dark text-center">
                <thead class="thead-dark">
                <tr>
               <th>S:No</th>
               <th>Name</th>
               <th>F/Name</th>
               <th>Caste</th>
               <th>Cnic</th>
               <th>Mobile</th>
               <th>Domicile</th>
               <th>District</th>
               <th>Address</th>
               <th>Edit</th>
               <th>Delete</th>
               </tr>
</thead>      
              <?php
              while($row = mysqli_fetch_assoc($result)){
              ?>
<tbody>
               <tr>
               <td><?php echo $row['id'];?></td>
               <td><?php echo $row['name'];?></td>
               <td><?php echo $row['fname'];?></td>
               <td><?php echo $row['Caste'];?></td>
               <td><?php echo $row['cnic'];?></td>
               <td><?php echo $row['number'];?></td>
               <td><?php echo $row['domicile'];?></td>
               <td><?php echo $row['district'];?></td>
               <td><?php echo $row['address'];?></td>
               <td><a href="formup.php?id=<?php echo $row['id'];?>" class="btn btn-warning">Edit</a></td>
               <td><a href="formd.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
               </tr>
               </tbody>
               <?php 
            }
             ?>
            </table>
             <?php 
            }
             ?>
        </div>
    </div>
</div>
</body>
</html>