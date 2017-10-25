<?php

$string = 'Moscow is the capital of Russia';

$result = substr($string, 0, 6);

//var_dump($result);

$result = str_replace('Moscow', 'Else', $string);

//var_dump($result);

$result = strpos($string, 'Moscow');
//var_dump($result);

$result = strlen($string);

//var_dump($result);

echo md5($string);