<?php
    //Showing Live Data On The Web Page From The Data Base.
?>

<table>
    <caption>Live Data From The Data Base</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Address 1</th>
                    <th>Address 2</th>
                    <th>City</th>
                    <th>State</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $select_query = mysqli_query($connection, "SELECT * FROM tbl_themed_data")
                                        or die("Error: " . mysqli_error($connection));
                    //$stmt = $connection->prepare("SELECT * FROM tbl_user");
                    while($row = mysqli_fetch_array($select_query, MYSQLI_ASSOC)) {
                     
                ?>
                <tr>
                    <td>
                        <?php
                            echo "{$row['id']}</td>";
                            echo "<td>{$row['email']}</td>";
                            echo "<td>{$row['pass']}</td>";
                            echo "<td>{$row['address1']},</td>";
                            echo "<td>{$row['address2']},</td>";
                            echo "<td>{$row['city']},</td>";
                            echo "<td>{$row['state']}.</td>";
                        ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
</table>