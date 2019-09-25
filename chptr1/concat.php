<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strings.php</title>
</head>
<body>
    <?php
        $first_name = 'Haruki';
        $last_name = 'Murakami';
        $book = 'Kafka on the Shore';
        $author = $first_name . ' ' . $last_name;

        echo "<p>The book <em>$book</em> was written by $author.</p>"
    ?>
</body>
</html>