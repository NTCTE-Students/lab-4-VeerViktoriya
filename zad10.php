<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function arr(&$arr) {
            $arr = array_unique($arr);
            return $arr;
        }
        $arr = [1,25, 4, 4, 1];
        arr($arr);
    ?>

</body>
</html>