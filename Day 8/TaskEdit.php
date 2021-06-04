<!--
    Edit/Update Record:
-->
<?php
    //Connection:
    $connection = mysqli_connect("localhost:3308", "root", "", "db_internship");

    if(!isset($_GET['id'])) {
        header("location:../Task8.php");
    }
    $id = $_GET['id'];

    //Query:
    $query = "SELECT * FROM tbl_student WHERE st_id = {$id} and is_deleted = 0";
    $q = mysqli_query($connection, $query) or die("Error in Query.");

    $edit = mysqli_fetch_array($q);
    //print_r($edit);

    if($_POST) {
        $name = $_POST['txt1'];
        $gender = $_POST['txt2'];
        $dob = $_POST['txt3'];
        $email = $_POST['txt4'];
        $cno = $_POST['txt5'];
        $add = $_POST['txt6'];
        $pin = $_POST['txt7'];
        $erno = $_POST['txt8'];
        $pass = $_POST['txt9'];

        $query = "UPDATE tbl_student
        SET st_name = '{$name}', st_gender = '{$gender}',
        st_dob = '{$dob}', st_email = '{$email}',
        st_mobile = {$cno}, st_address = '{$add}',
        st_pincode = '{$pin}', st_erno = {$erno},
        st_password = '{$pass}'
        WHERE st_id = {$id}";

        $uq = mysqli_query($connection, $query) or die("Error in update query." . mysqli_error($connection));
        header("location:Task8.1.php");
    }
?>

<html>
    <head>
        <title>Edit Record</title>
        <link rel="stylesheet" href="../Day 6/css/Day6.css"/>
    </head>
    <body>
    <form method="post">
            <table>
                <caption>Student Records:</caption>
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td><input type="text" name="txt1" value="<?php echo $edit['st_name']; ?>" placeholder="Enter your full name" autofocus/></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>
                            <select name="txt2">
                                <option <?php if($edit['st_gender'] == 'Male') { echo "checked"; } ?>>Male</option>
                                <option <?php if($edit['st_gender'] == 'Female') { echo "checked"; } ?>>Female</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Date Of Birth</th>
                        <td><input type="date" name="txt3" value="<?php echo $edit['st_dob']; ?>"/></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><input type="email" name="txt4" value="<?php echo $edit['st_email']; ?>" placeholder="Enter your email"/></td>
                    </tr>
                    <tr>
                        <th>Mobile Number</th>
                        <td><input maxlength="10" type="number" name="txt5" value="<?php echo $edit['st_mobile']; ?>" placeholder="Enter your mobile number"/></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><textarea name="txt6" placeholder="Enter your real address"><?php echo $edit['st_address']; ?></textarea></td>
                    </tr>
                    <tr>
                        <th>Pin Code</th>
                        <td><input type="number" maxlength="6" name="txt7" value="<?php echo $edit['st_pincode']; ?>" placeholder="Enter your pin code"/></td>
                    </tr>
                    <tr>
                        <th>Er. No.</th>
                        <td><input type="number" maxlength="12" name="txt8" value="<?php echo $edit['st_erno']; ?>" placeholder="Enter your enrolnment number"/></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="password" name="txt9" value="<?php echo $edit['st_password']; ?>" placeholder="Enter your password"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit"></td>
                        <td><input type="reset"></td>
                    </tr>
            </table>
        </form>
    </body>
</html>