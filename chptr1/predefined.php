<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic PHP Page</title>
</head>
<body>
    <?php
        $file = $_SERVER['SCRIPT_FILENAME'];
        $user = $_SERVER['HTTP_USER_AGENT'];
        $server = $_SERVER['SERVER_SOFTWARE'];

        print "<p>You are running the file:<br><strong>$file</strong>\n";
        print "<p>You are veiwing the page using:<br><strong>$user</strong>\n";
        print "<p>This server is running:<br><strong>$server</strong>\n";
    ?>
</body>
</html>