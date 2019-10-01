<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
</head>
<body>
    <?php
        $months = [1 => 'January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        print "<select name=\"month\">\n";
        foreach ($months as $value) {
            print "\t\t<option value=\"$value\">$value</option>\n";
        }
        print "\t</select>\n";

        print "\t<select name=\"day\">\n";
        for ($day = 1; $day <= 31; $day++) {
            print "\t\t<option value=\"$day\">$day</option>\n";
        }
        print "\t</select>\n";

        print "\t<select name=\"year\">\n";
        for ($year = 1900; $year <= 3000; $year++) {
            print "\t\t<option value=\"$year\">$year</option>\n";
        }
        print "\t</select>\n";
    ?>
</body>
</html>