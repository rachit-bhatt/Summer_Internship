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
    $query = "SELECT * FROM tbl_user WHERE user_id = {$id} and is_deleted = 0";
    $q = mysqli_query($connection, $query) or die("Error in Query.");

    $edit = mysqli_fetch_array($q);
    //print_r($edit);

    if($_POST) {
        $name = $_POST['txt1'];
        $gender = $_POST['txt2'];
        $cno = $_POST['txt3'];

        $uq = mysqli_query($connection, "UPDATE tbl_user SET user_name = '{$name}', user_gender = '{$gender}', user_number = '{$cno}' WHERE user_id = {$id}") or die("Error in update query.");
        header("location:../Task8.php");
    }
?>

<html>
    <head>
        <title>Edit Record</title>
        <link rel="stylesheet" href="Day 6/css/Day6.css"/>
    </head>
    <body>
        <form method="POST">
            <table>
                <caption>User Details:</caption>
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td><input type="text" name="txt1" value="<?php echo $edit['user_name']; ?>" placeholder="Enter Your Full Name" autofocus/></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>
                            <select name="txt2">
                                <option <?php if($edit['user_gender'] == 'Male') { echo "checked"; } ?>>Male</option>
                                <option <?php if($edit['user_gender'] == 'Female') { echo "checked"; } ?>>Female</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Mobile Number</th>
                        <td><input maxlength="10" value="<?php echo $edit['user_number']; ?>" placeholder="Enter Your Mobile Number" type="number" name="txt3"/></td>
                    </tr>
                    <tr>
                        <td colspan='2'><input type="submit"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>