<!--
    -   Task:
        - tbl_student table
            - st_id
            - st_name
            - st_gender
            - st_dob
            - st_email
            - st_mobile
            - st_address
            - st_password
            - st_area
            - st_pincode
            - st_bloodgroup
        - Insert Data Dynamically without Theme.
-->

<?php
    $connection = mysqli_connect("localhost:3308", "root", "", "db_internship");

    if($_POST) {
        $name = $_POST['txt1'];
        $gender = $_POST['txt2'];
        $dob = $_POST['txt3'];
        $email = $_POST['txt4'];
        $mobile = $_POST['txt5'];
        $address = $_POST['txt6'];
        $pincode = $_POST['txt7'];
        $erno = $_POST['txt8'];
        $pass = $_POST['txt9'];

        $q = mysqli_query($connection, "INSERT INTO tbl_student (st_name, St_gender, st_dob, st_email, st_mobile, st_address, st_pincode, st_erno, st_password)"
                        . "VALUES('{$name}', '{$gender}', '{$dob}', '{$email}', {$mobile}, '{$address}', '{$pincode}', '{$erno}', '{$pass}')")
                        or die("Error: " . mysqli_error($connection));
        
        if($q) {
            echo "<script type='text/javascript'>alert('Your new account has been successfully registered.');</script>";
        }
    }
?>

<html>
    <head>
        <title>Task 6.1 - Insert Dynamic Record Without Template</title>
        <link rel="stylesheet" href="css/Day6.css"/>
    </head>
    <body>
        <form method="post">
            <table>
                <caption>Student Records:</caption>
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td><input type="text" name="txt1" placeholder="Enter your full name" required autofocus/></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>
                            <select name="txt2" required>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Date Of Birth</th>
                        <td><input type="date" name="txt3" required/></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><input type="email" name="txt4" placeholder="Enter your email" required/></td>
                    </tr>
                    <tr>
                        <th>Mobile Number</th>
                        <td><input maxlength="10" type="number" name="txt5" placeholder="Enter your mobile number" required/></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><textarea name="txt6" placeholder="Enter your real address" required></textarea></td>
                    </tr>
                    <tr>
                        <th>Pin Code</th>
                        <td><input type="number" maxlength="6" name="txt7" placeholder="Enter your pin code" required/></td>
                    </tr>
                    <tr>
                        <th>Er. No.</th>
                        <td><input type="number" maxlength="12" name="txt8" placeholder="Enter your enrolnment number" required/></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="password" name="txt9" placeholder="Enter your password" required/></td>
                    </tr>
                    <tr>
                        <td><input type="submit"></td>
                        <td><input type="reset"></td>
                    </tr>
            </table>
        </form>
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
                </tr>
            </thead>
            <tbody>
                <?php
                    $select_query = mysqli_query($connection, "SELECT * FROM tbl_student")
                                        or die("Error: " . mysqli_error($connection));
                    //$stmt = $connection->prepare("SELECT * FROM tbl_user");
                    while($row = mysqli_fetch_array($select_query, MYSQLI_ASSOC)) {
                     
                ?>
                <tr>
                    <td>
                        <?php
                            echo "{$row['st_id']}</td>";
                            echo "<td>{$row['st_name']}</td>";
                            echo "<td>{$row['st_gender']}</td>";
                            echo "<td>{$row['st_dob']}</td>";
                            echo "<td>{$row['st_email']}</td>";
                            echo "<td>{$row['st_mobile']}</td>";
                            echo "<td>{$row['st_address']}</td>";
                            echo "<td>{$row['st_pincode']}</td>";
                            echo "<td>{$row['st_erno']}</td>";
                            echo "<td>{$row['st_password']}";
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