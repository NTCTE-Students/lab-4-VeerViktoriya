<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function multiply(...$numbers) {
            $result = 1;
            foreach ($numbers as $number) {
                $result *= $number;
            }
            return $result;
        }

        // Вызов функции
        print(multiply(1, 2, 3, 4)); // Результат: 24
    ?>

</body>
</html>