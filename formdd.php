<html>
    <head>
<title>Add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <?php include 'header.php'?>

    <h4 class="text-center mt-5">Delete Record<h4>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <?php 
                    if(isset($_POST['btn3'])){
                        $conn = mysqli_connect("localhost", "root", "", "form")or die("Error");
                    
                        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
                        $id = max(1, min($id, 1000));
                    
                        $sql = "DELETE FROM home WHERE id = '{$id}'";
                        $result =  mysqli_query($conn, $sql) or die("Error");
                        mysqli_close($conn);
                        header("Location: http://localhost/form/home.php");
                    }
                    ?>
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="form-group">
                            <lable>ID</lable>
                            <input type="text" name="id" class="form-control">
                        </div>
                        <div class="form-group">
                        <input type="submit" value="Delete" name="btn3" class="form-control bg-dark text-light">
                        </div>
                        </form>
                </div>
            </div>
        </div>

</body>
</html>