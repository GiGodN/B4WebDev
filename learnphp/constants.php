<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>constants.php</title>
</head>
<body>
    <?php
        define('TODAY', 'April 23, 2017');
        echo '<p>Toay is ' . TODAY . '.<br>This server is running version <strong>' . PHP_VERSION . 
        '</strong> of PHP on the <strong>' . PHP_OS . '</strong> operating system.';
    ?>
</body>
</html>