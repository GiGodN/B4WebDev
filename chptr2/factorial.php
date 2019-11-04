<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factorial</title>
</head>
<body>
    <?php
        function Factorial($num1) {
            $result = 0;
            for($i = 0; $i < $num1; $i++) {
                $result += $i+1;
            }
            return $result;
        }
        $factor = 7;
        print "Factorial of $factor is " . Factorial($factor);
    ?>
</body>
</html>