<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function generatePassword(int $length): string {
            $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $password = '';
            $max = strlen($chars) - 1;

            for ($i = 0; $i < $length; $i++) {
                $password .= $chars[random_int(0, $max)];
            }
            return $password;
        }

        $password = generatePassword(12);
        echo $password; 
    ?>

</body>
</html>