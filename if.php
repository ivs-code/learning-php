<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Условия</title>
</head>
<body>
    <?php

        $a = 5;
        $b = 3;
        if ($a > $b) {
            echo 'Ура работает';
        }
        else {
            echo 'увы не работает';
        }



        //Задание. С помощью конструкции if & else вывести из массива все списки кроме 'February'
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
            'November', 'December'];

        foreach ($months as $month) {
            if ($month == 'February') {

            }
            else {
                echo $month . '<br>';
            }
        }

    ?>
</body>
</html>