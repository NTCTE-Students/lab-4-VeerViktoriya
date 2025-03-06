<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function zad7(string $string): int {
    $length = 0;
    $i = 0;
    while (isset($string[$i])) {
        $length++;
        $i++;
    }
    return $length;
}

$string = "aaaaa a";
$length = zad7($string);
echo "Длина строки: " . $length; 
?>

</body>
</html>