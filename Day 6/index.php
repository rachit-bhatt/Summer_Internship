<?php
/*
    $host = "localhost:3308";
    $username = "root";
    $pass = "";
    $dbname = "db_internship";

    //Connection Function:
    $connection = mysqli_connect($host, $username, $pass, $dbname)
        or die("Error" . mysqli_error($connection));

    $query = mysqli_query($connection, 
            "INSERT INTO tbl_user (user_name, user_gender, user_number) VALUES ('Akash', 'Male', '123')")
            or die("Error" . mysqli_error($connection));
    if($query) {
        echo "<script type='text/javascript'>alert('Record Added');</script>";
    }
    
*/
?>

<?php
    $connection = mysqli_connect("localhost:3308", "root", "", "db_internship");

    if($_POST) {
        $name = $_POST['txt1'];
        $gender = $_POST['txt2'];
        $mobile = $_POST['txt3'];

        $q = mysqli_query($connection, "INSERT INTO tbl_user (user_name, user_gender, user_number)
                        VALUES('{$name}', '{$gender}', '{$mobile}')")
                        or die("Error: " . mysqli_error($connection));
        
        if($q) {
            echo "<script type='text/javascript'>alert('Record Inserted.');</script>";
        }
    }
?>

<html>
    <head>
        <title>Today's Learning</title>
        <link rel="stylesheet" href="css/Day6.css"/>
    </head>
    <body>
        <form method="post">
            <table>
                <caption>User Details:</caption>
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td><input type="text" name="txt1" placeholder="Enter Your Full Name" required autofocus/></td>
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
                        <th>Mobile Number</th>
                        <td><input maxlength="10" placeholder="Enter Your Mobile Number" type="number" name="txt3" required/></td>
                    </tr>
                    <tr>
                        <td colspan='2'><input type="submit"></td>
                    </tr>
            </table>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Mobile Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $select_query = mysqli_query($connection, "SELECT * FROM tbl_user")
                                        or die("Error: " . mysqli_error($connection));
                    //$stmt = $connection->prepare("SELECT * FROM tbl_user");
                    while($row = mysqli_fetch_array($select_query, MYSQLI_ASSOC)) {
                     
                ?>
                <tr>
                    <td>
                        <?php
                            echo "{$row['user_id']}</td>";
                            echo "<td>{$row['user_name']}</td>";
                            echo "<td>{$row['user_gender']}</td>";
                            echo "<td>{$row['user_number']}";
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