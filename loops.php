<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Циклы</title>
</head>
<body>
<?php
    //Виды циклов: foreach, while, for, do-while

    $months = ['January ', 'February ', 'March ', 'April ', 'May ', 'June ', 'July ', 'August ', 'September ', 'October ',
    'November ', 'December '];

    foreach ($months as $month) /// Вывод месяцев через foreach
    {
        echo  $month;
    }



    // цикл for. for (от; пока; изменения счётчика) {выполнение блока}

    for ($i = 0; $i < 8; $i = $i + 1) {
        echo $i . ' ';
    }

    // цикл while. записывается только одно условаие

    $i = 0;

    while ($i <= 10) {
        $i++;
        echo 'проверка цикла while', $i, '<br>';
    }


    // Цикл do-while

    $i = 100;
    do {
        echo $i;
    } while($i < 10); // условие неверно


    // Операторы в циклах

    for ($el = 100;  $el > 10; $el /= 2) {
        if ($el < 15) {
            break; // полный выход из цикла
        }
        if ($el % 2 == 0) {
            continue; // пропуск итерациии
        }
        echo $el.'<br>';
    }


    $list = ['age ' => 22, 'name ' => 'Arthur', 'hobby ' => 'run'];

    foreach ($list as $item => $value){
        echo 'Key '. $item . 'value ' . $value . '<br>';
    }


?>

</body>
</html>