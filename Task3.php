<!--
    Day 3:
    Things Learned:
    -   Loop:
        -   while loop
        -   do while loop
        -   for loop
    -   Power of Loop in PHP
    -   Taking Value from User
        -   GET vs POST
        -   Get Method
        -   Post Method
        -   Request Method
    -   Use of 'required', 'min', and 'max' attributes in HTML 5.
    -   Email type in Input Tag.
    -   'Date' Picker in Input Tag.
    -   'Time' Picker in Input Tag.
    -   'Range' Picker in Input Tag.
    Task 3:
        -   Registration Form using GET and POST method. Display Data in the Next Page.
        -   Take 5 Subject Marks from the user and Display all marks, total, grade system, and color on passed/fail.
-->

<html>
    <head>
        <title>Task 3</title>
        <link rel="stylesheet" href="CSS/Day3.css"/>
    </head>
    <body class="neon-dark-theme">

<!-- While Loop: -->
<?php
    echo "<strong>While Loop:</strong> ";
    $w = 0;
    while($w < 10) {
        echo $w;
        $w++;
    }
?>
<br/>
<!-- Do-While Loop: -->
<?php
    echo "<strong>Do-While Loop:</strong> ";
    $dw = 10;
    do {
        echo $dw;
        $dw++;
    } while($dw < 5);
?>
<br>
<!-- For Loop: -->
<?php
    echo "<strong>For Loop:</strong> ";
    for($i = 0; $i < 10; $i++) {
        echo $i;
    }
?>
<br>
<?php //Variation:
    echo "<strong>Loop in Table:</strong><br/>";
    echo "<table border='4' class='table'";
    for($i = 1; $i <= 1000; ) {
        echo "<tr>";
        for($z = 1; $z <= 25; $z++) {
            if ($i % 2 != 0) {
                echo "<td bgcolor='blue'>$i</td>";
                $i++;
            }
            else {
                echo "<td bgcolor='green'>$i</td>";
                $i++;
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>
<br>
    <ul>
        <li>
            <!--Taking Value From User:-->
            <form id="Get" action="Task3Get.php">
                <table class="table">
                    <caption>Get Method:</caption>
                    <tr>
                        <th>Name</th>
                        <td><input type="text" name="txt1" placeholder="Enter name"/></td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td><input type="number" name="txt2" placeholder="Enter age"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Get"/></td>
                        <td><input type="reset" value="Reset"/></td>
                    </tr>
                </table>
            </form>
        </li>
        <li>
            <form id="Post" method="POST" action="Task3Post.php">
                <table class="table">
                <caption>Post Method:</caption>
                    <tr>
                        <th>Name</th>
                        <td><input type="text" name="txt1" placeholder="Enter name"/></td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td><input type="number" name="txt2" placeholder="Enter age"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Post"/></td>
                        <td><input type="reset" value="Reset"/></td>
                    </tr>
                </table>
            </form>
        </li>
    </ul>

    <h1>Daily Task:</h1>
    <ul>
        <li>
            <!-- Task 3.1: Registration Form using GET and POST method. Display Data in the Next Page. -->
            <form id="3.1" method="POST" action="Task3.1.php">
                <table class="table">
    		        <caption>Task 3.1 - Registration Page</caption>
			        <tbody>
				        <tr>
					        <th>Name</th>
					        <td><input type="text" name="in1" placeholder="Enter your name" required/></td>
				        </tr>
				        <tr>
					        <th>E-Mail</th>
					        <td><input type="email" name="in2" placeholder="Enter your e-mail" required/></td>
				        </tr>
				        <tr>
					        <th>Contact</th>
					        <td><input name="in3" type="number" placeholder="Enter your contact number" required/></td>
				        </tr>
				        <tr>
					        <th>Gender</th>
					        <td>
						        <label for="Male">Male</label>
						        <input id="Male" name="in4" value="Male" type="radio">
						        <label for="Female">Female</label>
						        <input id="Female" name="in4" value="Female" type="radio">
					        </td>
				        </tr>
                        <tr>
                            <th>User-Name</th>
                            <td><input type="text" name="in5" placeholder="Enter your username"/></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><input type="password" name="in6" placeholder="Enter your password"/></td>
                        </tr>
                        <tr>
					        <td>
						        <input type="submit" value="Submit"/>
					        </td>
					        <td>
						        <input type="reset" value="Reset"/>
					        </td>
				        </tr>
			        </tbody>
		        </table>        
            </form>
        </li>
        <li>
            <!-- Task 3.2: Take 5 Subject Marks from the user and Display all marks, total, grade system, and color on passed/fail. -->
            <form id="3.2" method="POST" action="Task3.2.php">
                <table class="table">
    		        <caption>Task 3.2 - Enter Your Marks</caption>
                    <tbody>
                        <tr>
                            <th>PHP</th>
                            <td><input type="text" name="m1" maxlength="3" placeholder="Enter your marks" required/></td>
                        </tr>
                        <tr>
                            <th>Java</th>
                            <td><input type="text" name="m2" maxlength="3" placeholder="Enter your marks" required/></td>
                        </tr>
                        <tr>
                            <th>Python</th>
                            <td><input type="text" name="m3" maxlength="3" placeholder="Enter your marks" required/></td>
                        </tr>
                        <tr>
                            <th>Dot Net</th>
                            <td><input type="text" name="m4" maxlength="3" placeholder="Enter your marks" required/></td>
                        </tr>
                        <tr>
                            <th>C Programming</th>
                            <td><input type="text" name="m5" maxlength="3" placeholder="Enter your marks" required/></td>
                        </tr>
                        <tr>
        					<td>
						        <input type="submit" value="Submit"/>
					        </td>
					        <td>
						        <input type="reset" value="Reset"/>
					        </td>
				        </tr>
                    </tbody>
                </table>
            </form>
        </li>
    </ul>
    </body>
</html>