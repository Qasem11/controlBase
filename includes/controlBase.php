<?php
include_once './connect.php';

$movment = $_POST['movment'];
print_r($_POST);

$sql = "SELECT * from control";
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) > 0) {
    $sql = "UPDATE control SET movment = '$movment' where id = 1;";
}
else {
    $sql = "INSERT INTO control(movment) values('$movment');";
    
}

if(mysqli_query($connect, $sql)) {
    header("Location: ../index.html");
}
else {
    echo "Error";
    print_r($connect->error_list);
}