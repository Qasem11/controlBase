<?php include_once './connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" />
    <title>Data</title>
</head>
<body>

<div class="container">
    <div class="form">
        <?php
            $sql = "SELECT movment from control WHERE id = 1;";
            $result = mysqli_query($connect, $sql);
            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_row($result);
            ?>
        <h1 class="retrieve"><?php  echo $row[0];?></h1>
        <?php } else {?>
            <h1 class="retrieve">No Data</h1>
        <?php }?>

        <div class="links">
            <a href="../index.html">Back</a> 
        </div>
    </div>
</div>
</body>
</html>