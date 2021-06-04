<?php
    //Connection:
    $connection = mysqli_connect("localhost:3308", "root", "", "db_internship");

    //Query:
    $query = "SELECT * FROM tbl_student WHERE is_deleted = 0";
    $q = mysqli_query($connection, $query) or die("Error in connection.");

?>
    <head>
        <title>Day 8</title>
        <style type='text/css'>
            table {
                text-align: center;
                border: 3px solid black;
            }
            caption {
                font-weight: bolder;
            }
            th {
                border: 2px solid;
            }
            td {
                border: 1px solid;
            }
            /*tr:last-child {
                text-align: center;
            }*/
        </style>
    </head>
    <body>
        <table>
            <caption>Student Information:</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Pin-Code</th>
                    <th>Enrolnment Number</th>
                    <th>Password</th>
                    <th colspan='2'>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 0;
                    while($row = mysqli_fetch_row($q)) {
                        $i++;
                ?>
                <tr>
                    <td>
                        <?php
                            echo $i . "</td>";
                            /*echo $row[1] . "</td><td>";
                            echo $row[2] . "</td><td>";
                            echo $row[3];*/
                            for($x = 1; $x < count($row) - 1; $x++) {
                                echo "<td>{$row[$x]}</td>";
                            }
                            echo "<td><a href = 'TaskEdit.php?id=$row[0]'>Edit</a></td>";
                            echo "<td><a href = 'Delete.php?id=$row[0]'>Delete</a>";
                        ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <td colspan='12'><a href="./Day 6/index.php">Add Record</a></td>
                    <!--<td colspan='6'><a href="./Day 8/Task8.1.php">Task</a></td>-->
                </tr>
            </tbody>
        </table>
    </body>
</html>