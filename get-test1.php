<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пример Массив $_GET</title>
</head>
<body>
    <?php
      echo $_GET['name']; //Суперглобальный массив $_GET

    ?>

    <a href="/learning-php/get-test2.php?name=Arthur">Отправить get запрос name</a>
</body>
</html>