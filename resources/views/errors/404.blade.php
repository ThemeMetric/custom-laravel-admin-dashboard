<?php
/**
 * Created by PhpStorm.
 * User: Sajjad
 * Date: 19-Oct-16
 * Time: 3:20 PM
 */
?>
<!DOCTYPE html>
<html>
<head>

    <title>404</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
        }
        .container {
            display: table-cell;
            vertical-align: middle;
        }
        .content {
            display: inline-block;
        }
        .footer-copyright {
            display: block;
            position: fixed;
            width: 100%;
            left: 0;
            right: 0;
            bottom: 10px;
        }
    </style>

</head>
<body>
<div class="container text-center">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-danger" style="font-size:72px; font-weight: bold;">Oops! 404</h1>
                <h2 class="text-warning" style="font-size:52px; font-weight: bold;">Sorry - File not Found!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-danger"><a href="{{ route('error::checkout') }}"> Back to Home</a></p>
            </div>
        </div>
    </div>
    <div class="footer-copyright" style="vertical-align: bottom;">
        <div class="row">
            <div class="col-md-12">
                <p><strong>Copyright &copy; <?php echo date("Y") ?> <a href="http://webdesignernet.com" target="_blank">Sajjad Hossain</a>.</strong> All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>

