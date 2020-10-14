<?php

require_once 'Car.php';
$myCar = new Car('blue', 4, 'diesel');
var_dump($myCar);


$myCar->setCurrentSpeed = 0;
var_dump($myCar);

echo $myCar->forward();
echo '<br> Vitesse de la voiture : ' . $myCar->setCurrentSpeed . ' km/h' . '<br>';
echo $myCar->brake();
echo '<br> Vitesse de la voiture : ' . $myCar->setCurrentSpeed . ' km/h' . '<br>';
echo $myCar->brake();