<html>
    <head>
        <title>Task 3.2</title>
        <style type="text/css">
            .pass {
                color: green;
            }
            .fail {
                color: red;
            }
        </style>
    </head>
    <body>
        
<?php
    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    $m3 = $_POST['m3'];
    $m4 = $_POST['m4'];
    $m5 = $_POST['m5'];

    $sum = $m1 + $m2 + $m3 + $m4 + $m5;
    $avg = $sum / 5;
    echo "Percentage: $avg<br/>";

    if($avg >= 33) {
        echo "<p class='pass'>Congratulations! You're passed!</p>";
        echo "Grade: ";

        if($avg >= 80) {
            echo "A";
        }
        else if($avg >= 70) {
            echo "B";
        }
        else if($avg >= 60) {
            echo "C";
        }
        else if($avg >= 40) {
            echo "D";
        }
        else {
            echo "E";
        }
    }
    else {
        echo "<p class='fail'>We're sorry. You've failed.</p>";
        echo "Grade: F";
    }    
?>
    </body>
</html>