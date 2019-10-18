<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback form</title>
</head>
<body>
    <?php
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $webs = $_REQUEST['website'];
        $pro = $_REQUEST['poriority'];
        $type = $_REQUEST['type'];
        $message = $_REQUEST['message'];
        $valid = true;

        if(!empty($name) && !empty($email) && !empty($phone) && !empty($webs) && isset($pro) && isset($type) && !empty($message)) {
            if(strpos($email, '@') == false) {
                $valid = false;
            }

            if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)) {
                $valid = false;
            }
        }
        else {
            $valid = false;
        }

        if($valid) {
            print "<p>Thank You, $name, from $webs, for your feedback with priority $pro, and type $type, your message stated: <br>
            $message
            <br>You will soon recive a response from our Dev team about this at either your email, $email or your phone number, $phone";
        }
        else {
            print "please refillout the form something went wrong";
        }
    ?>
</body>
</html>