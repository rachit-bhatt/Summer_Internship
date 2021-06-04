<!--
    Task 7:
-->
<?php
    $connection = mysqli_connect("localhost:3308", "root", "", "db_internship");
?>
<html>
    <head>
        <title>Task 7</title>
        <link rel="stylesheet" href="../Day 6/css/Day6.css"/>
    </head>
    <body>
        <table style="text-align: center;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Date Of Birth</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Pin Code</th>
                    <th>Er. No.</th>
                    <th>Password</th>
                    <th colspan='2'>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $select_query = mysqli_query($connection, "SELECT * FROM tbl_student WHERE is_deleted = 0")
                                        or die("Error: " . mysqli_error($connection));
                    //$stmt = $connection->prepare("SELECT * FROM tbl_user");
                    $i = 0;
                    while($row = mysqli_fetch_array($select_query, MYSQLI_ASSOC)) {
                        $i++;
                ?>
                <tr>
                    <td>
                        <?php
                            echo $i . "</td>";
                            echo "<td>{$row['st_name']}</td>";
                            echo "<td>{$row['st_gender']}</td>";
                            echo "<td>{$row['st_dob']}</td>";
                            echo "<td>{$row['st_email']}</td>";
                            echo "<td>{$row['st_mobile']}</td>";
                            echo "<td>{$row['st_address']}</td>";
                            echo "<td>{$row['st_pincode']}</td>";
                            echo "<td>{$row['st_erno']}</td>";
                            echo "<td>{$row['st_password']}";
                            echo "<td><a href = './Day 7/Edit.php?id={$row['st_id']}'>Edit</a></td>";
                            echo "<td><a href = './Day 7/Delete.php?id={$row['st_id']}'>Delete</a></td>";
                        ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>