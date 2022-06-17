<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вывод Массива $_GET</title>
</head>
<body>
    <?php
        if (isset($_GET['name'])){   //проверка на существование переменной на странице
            echo $_GET['name'];
        }
        else {
          echo 'не установлено';
        }
    ?>
</body>
</html>