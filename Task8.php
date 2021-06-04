<!--
    Day 8:
    -   Edit/Update
    -   isset()
    -   RazorPay Payment Gateway
-->

<?php
    //Connection:
    $connection = mysqli_connect("localhost:3308", "root", "", "db_internship");

    //Query:
    $query = "SELECT * FROM tbl_user WHERE is_deleted = 0";
    $q = mysqli_query($connection, $query) or die("Error in connection.");

?>
    <head>
        <title>Day 8</title>
        <style type='text/css'>
            table {
                text-align: justify;
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
            tr:last-child {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <table>
            <caption>Table User:</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Mobile Number</th>
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
                            echo $i . "</td><td>";
                            echo $row[1] . "</td><td>";
                            echo $row[2] . "</td><td>";
                            echo $row[3];
                            echo "<td><a href = './Day 8/Edit.php?id=$row[0]'>Edit</a></td>";
                            echo "<td><a href = './Day 8/Delete.php?id=$row[0]'>Delete</a></td>";
                        ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <td colspan='3'><a href="./Day 6/index.php">Add Record</a></td>
                    <td colspan='3'><a href="./Day 8/Task8.1.php">Task</a></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>