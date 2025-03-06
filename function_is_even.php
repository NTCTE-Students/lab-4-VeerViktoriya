<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function isEven($number) {
            if ($number % 2 == 0) {
                return "{$number} - четное число";
            } else {
                return "{$number} - нечетное число";
            }
        }

        // Вызов функции
        $result = isEven(4);
        print($result);
    ?>
</body>
</html>