<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validating form data</title>
    <style type="text/css">
        .error {
            font-weight: bold;
            color: #COO;
        }
    </style>
</head>
<body>
    <?php
        if (!empty($_POST['name'])) {
            $name = $_POST['name'];
        }
        else {
            $name = NULL;
            print '<p class="error">You Forgot to Enter Your Name</p>';
        }

        if(!empty($_POST['email'])) {
            $email = $_POST['email'];
        }
        else {
            $email = NULL;
            print '<p class="error">Your Forgot to Enter Your eMail</p>';
        }

        if (!empty($_POST['comments'])) {
            $comments = $_POST['comments'];
        }
        else {
            $comments = NULL;
            print '<p class="error">Your Forgot to Enter Your Comments</p>';
        }

        if (isset($_POST['gender'])) {
            $gender = $_POST['gender'];

            if ($gender == "M") {
                $greeting = '<p><strong>Good Day, Sir!</strong></p>';
            }
            elseif ($gender == "F") {
                $greeting = '<p><strong>Good Day Madam!</strong></p>';
            }
            else {
                $gender = NULL;
                print '<p class="error">Unacceptable Gender Inputed</p>';
            }
        } 
        else {
            $gender = NULL;
            print '<p class="error">Your Forgot to Enter Your Gender</p>';
        }

        if ($name && $comments && $gender && $email) {
            print "<p>Thank You <strong>$name</strong>, for the following comments:</p>
            <pre>$comments</pre>
            <p>We will reply to you at <em>$email</em>.</p>";
            echo $greeting;
        }
        else {
            print '<p class="error">Please go back and fill out hte form again.</p>';
        }
    ?>
</body>
</html>