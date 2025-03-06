<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function sort_num(&$arr) {
            sort($arr) ;
            foreach ($arr as $value) {
                print $value;
            }
        }
        $array =[1,4,2,3,5];
        sort_num($array);
    ?>
</body>
</html>