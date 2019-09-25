<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Handling</title>
</head>
<body>
    <?php
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $comments = $_REQUEST['comments'];

        print "<p>Thank You, <strong>$name</strong>, for the following comments:</p>
        <pre>$comments</pre>
        <p>We will reply to yau at <em>$email</em>.</p>\n";
    ?>
</body>
</html>