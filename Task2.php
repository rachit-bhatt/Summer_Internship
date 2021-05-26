<!-- 
    Things Learned:
    -   Difference between HTML and PHP
    -   Power of PHP
    -   PHP Comments
    -   PHP Variables
    -   PHP is a loosy typed language
    -   Single vs Multi-Quotes
    -   Branching Conditions
    -   Switch Case
    Task 2: Practice of different branching statements and Switch Case.
 -->

 <html>
    <head>
        <title>Day 2</title>
        <link rel="stylesheet" href="CSS/Day2.css">
    </head>

    <body class="dark-theme">

<?php /*

    $a = 10;
    $b = 20;
    echo "A: " . $a . "<br/>B: " . $b;
    //Single Quotes:
    echo '<br/>A: $a <br/>B: $b <br/>Sum: ' . ($a + $b);
    //Multi Quotes:
    echo "<br/>A: $a <br/>B: $b <br/>Sum: " . ($a + $b);

?>
<br/>
<?php

    if($a == 10) {
        echo "A = 10";
    }
    else if($a < 10) {
        echo "A < 10";
    }
    else {
        echo "A > 10";
    }

?>
<br/>
<?php

    $x = 1;
    switch($x) {
        case 1:
            echo "One";
            break;
        case 2:
            echo "Two";
            break;
        case 3:
            echo "Three";
            break;
        default:
            echo "Please Select 1-3";
    }

*/ ?>

    <ul>
        <li>

<?php

    //echo "<h1>Home Work</h1><br/>";

    $z = 1;

    switch($z) {
        case 1:
            
            echo "<!--<br/>--><h2><strong>Programs taught today:</strong></h2><!--<br/>-->";

            echo "<ul><li>";

            echo "<br/><strong>Different ways to use variables in echo:</strong><br/>";

            echo "</li><li>";

            $a = 10;
            $b = 20;
            echo "<br/>Normal Approach:<br/>";
            echo "A: " . $a . "<br/>B: " . $b;
            echo "<br>";

            //Single Quotes:
            echo "<br/>Single Quotes:";
            echo '<br/>A: $a <br/>B: $b <br/>Sum: ' . ($a + $b);
            echo "<br/>";
            
            //Multi Quotes:
            echo "<br/>Multi Quotes:";
            echo "<br/>A: $a <br/>B: $b <br/>Sum: " . ($a + $b);

            echo "</li><li>";

            echo "<br/><strong>Else If Ladder:</strong><br/>";

            echo "</li><li>";

            if($a == 10) {
                echo "A is equal to 10.";
            }
            else if($a < 10) {
                echo "A is less than 10.";
            }
            else {
                echo "A is greater than 10.";
            }

            echo "</li><li>";

            echo "<br/><strong>Switch Case:</strong><br/>";

            echo "</li><li>";

            //Business Logic:

            $x = 1;
            switch($x) {
                case 1:
                    echo "Number Select is One.";
                    break;
                case 2:
                    echo "Number Select is Two.";
                    break;
                case 3:
                    echo "Number Select is Three.";
                    break;
                default:
                    echo "Please Select between 1-3.";
            }
            echo "</li></ul>";
            //break;

        case 2:
            echo "</li><li>";

            echo "<br/><strong>Odd / Even Number:</strong> [If-Else]<br/>";

            echo "</li><li>";

            //Business Logic:

            $no = 4;

            if($no % 2 != 0) {
                echo "$no is an <strong>Odd</strong> number.";
            }
            else {
                echo "$no is an <strong>Even</strong> number.";
            }

            //break;

        case 3:
            echo "</li><li>";
            
            echo "<br/><strong>Leap Year: </strong>[Nested Else-If Ladder]<br/>";
            
            echo "</li><li>";
            
            //Business Logic:

            $previous_year = 2020;
            $year = 2021;
            if($year % 4 == 0) {
                if($previous_year % 4 == 0) {
                    echo "It is never possible.";
                }
                else {
                    echo "<strong>$year</strong> is a leap year, but $previous_year is not a leap year.";
                }
            }
            else {
                if($previous_year % 4 == 0) {
                    echo "$year is not a leap year, but <strong>$previous_year</strong> is a leap year.";
                }
                else {
                    echo "Neither $year is not a leap year, nor $previous_year is a leap year.";
                }
            }
            echo "</li><li>";
            //break;

        case 4:
            echo "</li><li>";

            echo "<br/><strong>Positive / Negative / Zero Number: </strong>[Else-If Ladder]<br/>";

            echo "</li><li>";

            //Business Logic:

            $signature = 0;

            if($signature > 0) {
                echo "$signature is a <strong>Positive</strong> number.";
            }
            else if($signature < 0) {
                echo "$signature is a <strong>Negative</strong> number.";
            }
            else {
                echo "$signature is a <strong>Neutral</strong> number.";
            }

            break;

        default:
            echo "</li><li>";

            echo "Program out of syllabus for now!";
            
            echo "</li><li>";

            //Business Logic:
            
            break;
    }

?>

    </ul>

    </body>
 </html>