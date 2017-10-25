<?php

class Car
{
    var $color;
    var $brand;
    var $model;

    function describe($count = null)
    {
        return (!is_null($count) ? $count . ' машины    ' : '') . $this->brand
            . ' ' . $this->model
            . ' color: ' . $this->color;
    }
}

$car1 = new Car();
$car1->color = 'red';
$car1->brand = 'Ferrary';
$car1->model = '916';
echo $car1->describe(2);

$car2 = new Car();
$car2->color = 'blue';
$car2->brand = 'Subary';
$car2->model = 'Impreza';

//echo $car2->describe();
//*echo '<pre>';
/*print_r($car1);
print_r($car2);*/

