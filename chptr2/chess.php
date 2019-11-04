<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chess</title>
</head>
<body>
    <table>
    <?php
        for($y = 0; $y < 8; $y++) {
            print "<tr>";
            for($x = 0; $x < 8; $x++) {
                if($x % 2 == 0 && $y % 2 == 0) {
                    print '<td style="background-color: #000" height="30px" width="30px"></td>';
                }
                else if($x % 2 == 1 && $y % 2 == 0) {
                    print '<td style="background-color: #fff" height="30px" width="30px"></td>';
                }
                else if($x % 2 == 0 && $y % 2 == 1) {
                    print '<td style="background-color: #fff" height="30px" width="30px"></td>';
                }
                else if($x % 2 == 1 && $y % 2 == 1) {
                    print '<td style="background-color: #000" height="30px" width="30px"></td>';
                }
            }
            print "</tr>";
        }
    ?>
    </table>
</body>
</html>