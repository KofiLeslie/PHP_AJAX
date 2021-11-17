<?php
require 'connection.php';
$id = $_GET['id'];
// Populate Textboxes
$sql = "SELECT * FROM table1 WHERE id = '$id'";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_array($res);
$fn = $row['firstname'];
$sn = $row['surname'];
$em = $row['email'];
// Update User
if (isset($_POST['submit'])) {
    $fn = $_POST['fname'];
    $sn = $_POST['sname'];
    $em = $_POST['email'];

    $sql = "UPDATE table1 SET firstname = '$fn', surname = '$sn', email = '$em' WHERE id = '$id'";
    $res = mysqli_query($con, $sql);
    if ($res) {
        echo "<script>alert('User Updated Successfully')</script>";
        header("location: index.php");
    } else {
        echo "<script>alert('User Update Failed')</script>";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD| Edit User</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 my-2 jumbotron my-5">
                    <h4 class="text-center">Add New User</h4>
                    <form action="" method="post">
                        <label for="fname">First Name:</label>
                        <input type="text" name="fname" id="fname" class="form-control" required value = "<?php echo $fn ?>">
                        <label for="sname">Surname:</label>
                        <input type="text" name="sname" id="sname" class="form-control" required value = "<?php echo $sn; ?>">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required value = "<?php echo $em; ?>">
                        <input type="submit" value="Add New User" name="submit" class = "btn btn-success my-2">
                    </form>
            </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</body>
</html>