<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sum(int $a, int $b): int {
            return $a + $b;
        }

        // Вызов функции
        print(sum(3, 5)); // Результат: 8
    ?>
</body>
</html>