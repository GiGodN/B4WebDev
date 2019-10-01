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
                $movies = [
                    'Casablanca' => 10,
                    'To Kill A Mocking Bird' => 10,
                    'The English Patient' => 2,
                    'Stranger than Fiction' => 9,
                    'Stories of the Weeping Camel' => 5,
                    'Donnie Darko' => 7
                ];

                echo '<tr><td colspan="2"><strong>In their original order:</strong></td></tr>';
                foreach($movies as $title => $rating) {
                    echo"\n";
                    echo "<tr><td>$rating</td><td>$title</td></tr>\n";
                }

                ksort($movies);
                echo '<tr><td colspan="2"><strong>Sorted by title:</strong></td></tr>';
                foreach ($movies as $title => $rating) {
                    echo"\n";
                    echo "<tr><td>$rating</td><td>$title</td></tr>";
                }

                arsort($movies);
                echo '<tr><td colspan="2"><strong>Sorted by rating:</strong></td></tr>';
                foreach ($movies as $title => $rating) {
                    echo"\n";
                    echo "<tr><td>$rating</td><td>$title</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>