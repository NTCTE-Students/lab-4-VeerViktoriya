<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function average($numbers) {
            $sum = array_sum($numbers);
            $count = count($numbers);
            return $sum / $count;
        }

        // Вызов функции
        $numbers = [1, 2, 3, 4, 5];
        $result = average($numbers);

        print("Среднее значение: {$result}");
    ?>
</body>
</html>