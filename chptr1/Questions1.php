<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questions 1</title>
</head>
<body>
    <?php
        $String_Var = "This is a random string sotred in a varible";

        print "<h3>Test 1 </h3> <p>This is a string wraped in double quotes. This string is stored in a varable <b>$String_Var</b>.</p>";
        print '<h3>Test 2 </h3> <p>This is a string wraped in single quotes. This string is stored in a varable <b>' . $String_Var . '</b>.</p>';
    ?>
</body>
</html>