<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persue Question 2</title>
</head>
<body>
    <?php
        $count = count($_POST['input']);
        print "Values: <br>";
        foreach($_POST['input'] as $v) {
            print "$v<br>\n";
        }
        print "Amount: $count";
    ?>
</body>
</html>