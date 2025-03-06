<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function divide($a, $b) {
            if ($b == 0) {
                return 'Ошибка: деление на ноль';
            } else {
                return $a / $b;
            }
        }

        // Вызов функции
        $result = divide(10, 0);
        print($result);

        $result = divide(10, 2);
        print($result);
    ?>
</body>
</html>