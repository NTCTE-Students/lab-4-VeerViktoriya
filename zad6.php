<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sumDigitsString(int $number): int {
        $number = abs($number); 
        $digits = str_split((string)$number);
        $sum = 0;
        foreach ($digits as $digit) {
            $sum += (int)$digit;
        }
        return $sum;
        }

        $number = 12345;
        $sum = sumDigitsString($number);
        echo "Сумма цифр числа $number: $sum";
    ?>

</body>
</html>