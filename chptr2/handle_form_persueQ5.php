<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Arrays</title>
</head>
<body>
    <?php
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comments'])) {
            print '<p>Thank You, <strong>' . $_POST['name'] . '</strong>, for the following comments: </p>
            <pre>' . $_POST['comments'] . '</pre>
            <p>We will reply to you at <em>' . $_POST['email'] . '</em>.</p>';
        }
        else {
            print '<p>Please go back and fill out the form again.</p>';
        }
    ?>
</body>
</html>