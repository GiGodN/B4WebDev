<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorting Arrays</title>
</head>
<body>
    <table border="0" cellspacing="3" cellpadding="3" align="center">
        <thead>
            <tr>
                <th><h2>Rating</h2></th>
                <th><h2>Title</h2></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $Letters = [
                    'g' => 'h',
                    'a' => 'b',
                    'e' => 'f',
                    'c' => 'd',
                    'i' => 'j'
                ];

                echo '<tr><td colspan="2"><strong>In their original order:</strong></td></tr>';
                foreach($Letters as $A => $B) {
                    echo"\n";
                    echo "<tr><td>$B</td><td>$A</td></tr>\n";
                }

                ksort($Letters);
                echo '<tr><td colspan="2"><strong>Sorted by Key:</strong></td></tr>';
                foreach ($Letters as $A => $B) {
                    echo"\n";
                    echo "<tr><td>$A</td><td>$B</td></tr>";
                }

                arsort($Letters);
                echo '<tr><td colspan="2"><strong>Sorted by Value in Reverse:</strong></td></tr>';
                foreach ($Letters as $A => $B) {
                    echo"\n";
                    echo "<tr><td>$A</td><td>$B</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>