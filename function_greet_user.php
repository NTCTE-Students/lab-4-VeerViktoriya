<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function greetUser($name = 'гость') {
            echo "Привет, {$name}!";
        }

        // Вызов функции
        greetUser();
        greetUser('Анна');
    ?>
</body>
</html>