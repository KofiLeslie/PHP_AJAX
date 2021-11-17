<?php
require 'connection.php';
$sql = "SELECT * FROM table1 ORDER BY id ASC";
$res = mysqli_query($con, $sql);
$output = "";
$output .="
<table class='table table-bordered table-striped'>
        <tr>
            <th width = '10%'>ID</th>
            <th width = '20%'>First Name</th>
            <th width = '20%'>Surname</th>
            <th width = '30%'>Email</th>
            <th width = '20%'>Action</th>
        </tr>
";
echo "<a href='add_new_user.php'>
<button class='btn btn-success my-3'>Add New User</button>
</a>";
if (mysqli_num_rows($res)<1) {
    $output .= "
    <tr>
        <td colspan='5' align= 'center'>NO DATA EXISTS!!!</td>
    </tr>
    ";
} else {
    # code...
}

while ($row = mysqli_fetch_array($res)) {
    $output .= "
    <tr>
            <td>".$row['id']."</td>
            <td>".$row['firstname']."</td>
            <td>".$row['surname']."</td>
            <td>".$row['email']."</td>
            <td><div class='col-md-12'>
            <div class='row'>
                <div class='col-md-6'>
                <a href='edit_user.php?id=".$row['id']."'>
                    <button id='".$row['id']."' class='btn btn-success col-md-12'>Edit</button>
                </a>
                </div>
                <div class='col-md-6'>
                    <button id='".$row['id']."' class='btn btn-danger col-md-12'>Delete</button>
                </div>
            </div>
        </div></td>
    </tr>
    ";
}

echo $output;

?>