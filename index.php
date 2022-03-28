<?php

require_once 'car.php';

$car = new Car('red');

echo $car->forward();


var_dump($car);

echo'</br>';

require_once 'bike.php';

$bike = new Bike('blue');

echo $bike->forward();

var_dump($bike);


