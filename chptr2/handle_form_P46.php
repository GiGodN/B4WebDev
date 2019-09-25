<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Handling with if cases</title>
</head>
<body>
    <?php
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $comments = $_REQUEST['comments'];

        if(isset($_REQUEST['gender'])) {
            $gender = $_REQUEST['gender'];
        }
        else {
            $gender = null;
        }

        print "<p>Thank You, <strong>$name</strong>, for the following comments:</p>
        <pre>$comments</pre>
        <p>We will reply to yau at <em>$email</em>.</p>\n";

        if($gender == 'M') {
            print '<p><strong>Good day, Sir!</strong></p>';
        }
        elseif($gender == 'F') {
            print '<p><strong>Good Day, Madam!';
        }
        else {
            print '<p><strong>Good Day!</strong></p>';
        }
    ?>
</body>
</html>