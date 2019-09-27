<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multidimensional Arrays</title>
</head>
<body>
    <p>Some North American States, Provinces, and Territories</p>
    <?php
        $mexico = [
            'YU' => 'Yucatan',
            'BC' => 'Baja California',
            'OA' => 'Oaxaca'
        ];

        $us = [
            'MD' => 'Maryland',
            'IL' => 'Illinois',
            'PA' => 'Pennsylvania',
            'IA' => 'Iowa'
        ];

        $canada = [
            'QC' => 'Quebec',
            'AB' => 'Alberta',
            'NT' => 'Northwest Territories',
            'YT' => 'Yukon',
            'PE' => 'Prince Edward Island'
        ];

        $n_america = [
            'Mexico' => $mexico,
            'United States' => $us,
            'Canada' => $canada
        ];

        foreach($n_america as $country => $list) {
            print "<h2>$country</h2>\n<ul>";

            foreach($list as $k => $v) {
                print "<li>$k - $v</li>\n";
            }

            print "</ul>";
        }
    ?>
</body>
</html>