<?php
// index.php

require_once 'Bicycle.php';
$bike = new Bicycle('blue');
var_dump($bike);

//$bike->setColor = "blue";
$bike->setCurrentSpeed = 0;
var_dump($bike);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();



