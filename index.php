<?php

echo 'Car'.'</br>';

require_once 'car.php';

$ferrari = new Car(4, 'red', 2, 'fuel');
var_dump($ferrari);

echo'</br>'.'</br>';

echo 'Bike'.'</br>';

require_once 'bike.php';

$bike = new Bike (2, 'blue',1);
var_dump($bike);



