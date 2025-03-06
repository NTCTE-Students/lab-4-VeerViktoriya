<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function factorial($n) {
    $result = 1;
    for ($i = $n; $i != 0; $i--) {
        $result *= $i;
    }
    return $result;
}

// Вызов функции
$result = factorial(5);
print("Факториал 5: {$result}");
?>
</body>
</html>