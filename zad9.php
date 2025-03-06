<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function zad9(float $celsius): float {
        return ($celsius * 9/5) + 32;
        }

        $celsius = 25;
        $fahrenheit = zad9($celsius);
        echo "$celsius  Цельсия =  $fahrenheit  Фаренгейта"; 
    ?>
</body>
</html>