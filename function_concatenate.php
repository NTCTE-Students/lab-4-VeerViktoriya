<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function concatenate(string $a, string $b): string {
            return $a . $b;
        }

        // Вызов функции
        print(concatenate('Hello, ', 'world!')); // Результат: Hello, world!
    ?>
</body>
</html>