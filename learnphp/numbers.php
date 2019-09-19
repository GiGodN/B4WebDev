<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numbers</title>
</head>
<body>
    <?php
        $quantity = 30;
        $price = 119.95;
        $taxrate = 0.05;

        $total = $quantity * $price;
        $total = $total + ($total * $taxrate);

        $total = number_format($total, 2);

        print '<p>You are purchasing <strong>' . $quantity . '</strong> widget(s) at a cost of <strong>' . $price . 
        '</strong> each. With tax, the total comes to <strong>' . $total . '</strong>.</p>';
    ?>
</body>
</html>