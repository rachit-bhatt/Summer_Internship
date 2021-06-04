<?php
    $connection = mysqli_connect("localhost:3308", "root", "", "db_internship");
    
    $id = $_GET['id'];
    echo $id;

    $query = "UPDATE tbl_user SET is_deleted = 1 WHERE `user_id` = $id";
    $q = mysqli_query($connection, $query) or die("Error: Can't delete ID.");

    if($q) {
        echo "<script>alert('Record Deleted.');window.location='../Task7.php'</script>";
    }
?>