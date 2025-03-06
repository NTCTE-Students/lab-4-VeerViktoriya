<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $greet = function($name) {
            return "Привет, $name!";
        };

        // Вызов функции
        print($greet('Анна'));
    ?>
</body>
</html>