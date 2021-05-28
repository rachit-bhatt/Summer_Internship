<!--
    Things Learned:
    -   Work with Templates
        -   HTML Themes
            -   Stampalike Template (themeforest.net)
        -   Structure of Web-Page
            -   Header
            -   Menu
            -   Content
            -   Side-Bar
            -   Footer
        -   Breaking Structure
        -   Including Code
        -   Crtl + Shift + R: Removes Cache from Browser
    Tasks:
    -   Integrate Three Different Templates.
-->

<?php
    //Include Code:
    //include 'Day 4/index.html';
?>
<!--<a href="Day 4/Template 1/index.php">Template 1</a>
<a href="Day 4/Template 2/index.php">Template 2</a>-->
<!--<a href="Day 4/index.php">Just Open It</a>-->
<html>
    <head>
        <title>Task 4</title>
        <style type="text/css">
            body {
                background-color: #333;
            }
            iframe {
                width: 100%;
                height: 100%;
            }
            div {
                width: 100%;
                color: white;
                text-align: center;
            }
            h1 {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div><h1>Template 1:</h1></div>
        <br/>
        <iframe src="./Day 4/Template 1/index.php"></iframe>
        <iframe src="./Day 4/Template 1/index.php#featured"></iframe>
        <iframe src="./Day 4/Template 1/index.php#projects"></iframe>
        <iframe src="./Day 4/Template 1/index.php#video"></iframe>
        <iframe src="./Day 4/Template 1/index.php#blog"></iframe>
        <iframe src="./Day 4/Template 1/index.php#contact"></iframe>
        <br/>
        <div><h1>Template 2:</h1></div>
        <br/>
        <iframe src="./Day 4/Template 2/index.php" style="height: 33.5%;"></iframe>
        <iframe src="./Day 4/Template 2/courses.php" style="height: 65%;"></iframe>
        <iframe src="./Day 4/Template 2/blogs.php" style="height: 33.5%;"></iframe>
        <iframe src="./Day 4/Template 2/contact.php" style="height: 33.5%;"></iframe>
        <iframe src="./Day 4/Template 2/about.php" style="height: 33.5%;"></iframe>
    </body>
</html>