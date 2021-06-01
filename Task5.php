<!--
    Array:
    - 3 Ways to create arrays.
    - count(var_name);
    - Display using (for) loop.
    - Types of loops.
    - 50+ Inbuilt Array Functions.
    - array_sum();
    - array_product();
    - print_r();
    - var_dump();
    - Types of Arrays:
        - Numberic Array (Classic)
        - Associative Array (Dictionary)
    - Tasks:
        - 30 Array Functions
-->

<?php
    echo "<strong>Numeric Array:</strong><br/>";
    //Method 1:
    $a[0] = 1;
    $a[1] = 2;
    $a[2] = 3;
    $a[3] = 4;
    $a[4] = 5;
    //Method 2:
    $a[] = 6;
    $a[] = 7;
    $a[] = 8;
    $a[] = 9;
    $a[] = 10;

    print_r($a);
    
    echo "<br/>";
    
    //Method 3:
    $a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    for($i = 0; $i < count($a); $i++) {
        echo " " . $a[$i];
    }
?>

<?php
    //Associative Array:
    //Key = Value
    //Method 1:
    $a[0] = 10;
    $a['CE'] = 'Computer Engineering';
    $a['PHP'] = 'Web Programming';
    
    //Method 2:
    //Always use this method to create an array:
    $a = array(
        0 => 10,
        'CE' => 'Computer Engineering',
        'PHP' => 'Web Programming'
    );

    echo "<br/><strong>Associative Array:</strong><br/>";
    //Single Element:
    echo "CE for " . $a['CE'];
    //For-Each Loop:
    foreach($a as $key => $value) {
        echo "<br/>$key: $value";
    }

?>

<html>
    <head>
        <title>Day 5</title>
        <style type='text/css'>
            ul {
                list-style: none;
            }
            table {
                text-align: justify;
            }
        </style>
    </head>
    <body>
        <h1>Tasks:</h1>
        <table>
            <tr>
                <?php
                    echo "<th>Random Method:</th> <td>";
                    for($i = 0; $i < 5; $i++) {
                        $array[] = rand(1, 5);
                    }
                    print_r($array);
                    echo "</td></tr><tr>";
                
                    echo "<th>Count Method:</th> <td>" . count($array) . "</td></tr><tr>";
                    echo "<th>Sum Method:</th> <td>" . array_sum($array) . "</td></tr><tr>";
                    echo "<th>Product Method:</th> <td>" . array_product($array) . "</td></tr><tr>";
                    echo "<th>In Array Method:</th> <td>" . in_array(4, $array) . "</td></tr><tr>";
                    echo "<th>Reverse Method:</th> <td>";
                    foreach ($array as $value) {
                        echo " $value";
                    }
                    echo "</td></tr><tr>";
                    echo "<th>Random Value from Array:</td> <td>" . $array[array_rand($array)] . "</td></tr><tr>";
                    echo "<th>Unique Method:</th> ";
                    foreach ($array as $value) {
                        echo " $value";
                    }
                    echo "</td></tr><tr>";
                    echo "<th>Search Method:</th> <td>" . array_search(4, $array) . "</td></tr><tr>";
                    echo "<th>Range Method:</th> <td>";
                    foreach ($array as $value) {
                        echo " $value";
                    }
                    echo "</td></tr><tr>";
                    echo "<th>Sorting Method:</th> <td>";
                    foreach ($array as $value) {
                        echo " $value";
                    }
                    echo "</td></tr><tr>";
                    echo "<th>R Sorting Method:</th> <td>";
                    foreach ($array as $value) {
                        echo " $value";
                    }
                    echo "</td></tr><tr>";
                    echo "<th>A Sorting Method:</th> <td>";
                    foreach ($array as $value) {
                        echo " $value";
                    }
                    echo "</td></tr><tr>";
                    echo "<th>K Sorting Method:</th> <td>";
                    foreach ($array as $value) {
                        echo " $value";
                    }
                    echo "</td></tr><tr>";
                    echo "<th>KR Sorting Method:</th> <td>";
                    foreach ($array as $value) {
                        echo " $value";
                    }
                    echo "</td></tr><tr>";
                    echo "<th>Shuffle Method:</th> <td>";
                    foreach ($array as $value) {
                        echo " $value";
                    }
                    echo "</td></tr><tr>";
                    echo "<th>Array Key Exists Method:</th> <td>";
                    
                    $arr2 = array("Akash" => 1234567890, "Darshan" => 2345678901, "Dhumil" => 3456789012, "Preet" => 4567890123, "Rachit" => 7990803727);
                    
                    echo array_key_exists('Rachit', $arr2);
                    echo "</td></tr><tr>";
                    echo "<th>Array Combine Method:</th> <td>";
                    print_r(array_combine($array, $arr2));
                    echo "</td></tr><tr>";
                    echo "<th>End Method:</th> <td>";
                    echo end($array) . " ";
                    echo end($arr2);
                    echo "</td></tr><tr>";
                    echo "<th>Compact Method:</th> <td>";
                    $Name = "Rachit";
                    $Subject = "Python";
                    print_r(compact("Name", "Subject"));
                    echo "</td></tr><tr>";
                    echo "<th>Array Flip Method:</th> <td>";
                    print_r(array_flip($array));
                    echo "</td></tr><tr>";
                    echo "<th>Array Diff Method:</th> <td>";
                    print_r(array_diff($array, $arr2));
                    echo "</td></tr><tr>";
                    echo "<th>Array Intersect Method:</th> <td>";
                    print_r(array_intersect($array, $arr2));
                    echo "</td></tr><tr>";
                    echo "<th>Array Values Method:</th> <td>";
                    print_r(array_values($arr2));
                    echo "</td></tr><tr>";
                    echo "<th>Array PUSH Method:</th> <td>";
                    array_push($array, 0);
                    print_r($array);
                    echo "</td></tr><tr>";
                    echo "<th>Array POP Method:</th> <td>";
                    array_pop($array);
                    print_r($array);
                    echo "</td></tr><tr>";
                    echo "<th>Explode Method:</th> <td>";
                    $x = explode(", ", "Hello, World.");
                    print_r($x);
                    echo "</td></tr><tr>";
                    echo "<th>Implode Method:</th> <td>";
                    echo implode(", ", $x);
                    echo "</td></tr><tr>";
                ?>
            </tr>
    </body>
</html>