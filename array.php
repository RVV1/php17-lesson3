<?php

$countries = [
    '0' => [
        'Мюнхен',
        'Берлин'
    ],
    '1' => [
        'Москва',
        'Санкт-Петербург',
        'Нижний Новгород',
        'Тверь'
    ],
    '2' => [

    ]
];
//shuffle($countries['Россия']);
//$something = array_shift($countries);

list($germany, $russia, $italy, $spain) = $countries;
//$germany = $countries[0];
//$russia = $countries[1];

echo '<pre>';
print_r($germany);
//print_r($russia);
echo '<pre>';

//var_dump(array_search('Мюнхен', $something));


exit();

/*foreach ($countries as $country => $cities) {
    echo '<b>' . $country . '</b><br>';
    echo implode(', ', $cities) . '<br>';
    //foreach ($cities as $city) {
        //echo $city, ',<br>', PHP_EOL;
    //}
}*/

$names = 'Анна, Ольга, Мария, Светлана';
echo $names, '<br>';

$array_names = explode(', ', $names);

echo '<pre>';
print_r($array_names);

var_dump(in_array('Зинаида', $array_names));

//unset($cities['второй']);

/*$cities[] = 'Брянск';
$cities[] = 'Рязань';


/*echo '<pre>';
print_r($cities);*/

/*echo $cities['0'];*/

