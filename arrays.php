<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
<?php
$months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
    'November', 'December'];

// Ассоциативный массив. Пара: ключ => значение
$person = [
    'name' => 'Arthur',
    'surname' => 'Imamutdinov',
    'age' => 22,
    'months' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',  // пример многомерного массива
        'October',
        'November', 'December']
];










//Задание. Создать 2 массива. 1 - список стран, которые хочется посетить, 2 - Список любимых животных Должны быть ассоциативными массивами с многомерными массивами

$placesVisit = [
        'countries' => ['Kazakhstan', 'Canada', 'Russia', 'Italy', 'Netherlands'],
        'city' => ['Nukus', 'Nur-Sultan', 'Toronto', 'Moscow', 'Turin', 'Assen'],
];

$likeAnimals = [
        'dogs' => ['Airedale Terrier', 'Alaskan Klee Kai', 'American Bulldogs'],
        'cats' => ['Persian Longhair Cat', 'Siberian Forest Cat', 'Sphynx Cat' ]
];



echo 'я бы посетил страну в первую очередь: ', $placesVisit['countries'][1], '<br>';
echo 'больше всего из собак мне нравятся: ', $likeAnimals['dogs'][0],'<br>';
echo 'больше всего из котов мне нравятся ', $likeAnimals['cats'][1], '<br>';




?>
</body>
</html>


