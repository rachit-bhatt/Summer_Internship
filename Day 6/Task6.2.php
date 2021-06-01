<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>Register Task 6.2 - Insert Data Using Theme</title>

        <style type='text/css'>
            * {
                color: white;
            }
            table {
                text-align: center;
            }
            input {
                background-color: #335;
            }
            .div {
                width: 85%;
                margin-left: 7.5%;
            }
            .centered {
                width: 85%;
                margin-left: 7.5%;
            }
            .centered table {
                width: 100%;
            }
            .centered table caption {
                color: white;
                text-align: center;
                caption-side: top;
                font-weight: bolder;
                border: 4px solid white;
                width: 30%;
                margin-left: 35%;
                margin-bottom: 1%;
            }
            th {
                border-bottom: 3px solid white;
            }
            .col-md-7 button {
                width: 25%;
            }
        </style>
    </head>
    <body class="bg-dark">

    <?php include 'Nav.php'; ?>

    <?php include 'Register.php'; ?>
    
    <br/>

    <div class="centered"><?php include 'ShowData.php'; ?></div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    </body>
</html>