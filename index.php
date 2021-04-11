<?php

require "MotorWay.php";
require "PedestrianWay.php";
require "ResidentialWay.php";
require "Car.php";
require "Truck.php";
require "Bicycle.php";

//Creation nouvel objet bike de la classe Bicycle
$bike = new Bicycle("blue", 1);
//creation nouvel objet porsche de la classe Car
$porsche = new Car("blue", 4, "fuel");

//Creation nouvel objet superWay de la class MotorWay
$superWay = new MotorWay();
//var_dump($superWay);

//Utilisation de la fonction addVehicle pour verifier si le vehicle peut circuler sur la superWay
echo $superWay->addVehicle($porsche); //il peut car la fonction abstraite pour MotorWay car la variable vehicle est bien instancié à ma classe Car
//var_dump($porsche);
echo "En prenant l'objet bike cela nous retourne : " .$superWay->addVehicle($bike) ."<br/>"; // Ne peut pas car bike est issus de la class Bicycle.
//var_dump($bike);


//Creation nouvel objet residentialWay de la classe ResidentialWay
$residentialWay = new ResidentialWay();

echo $residentialWay->addVehicle($porsche); //Stocké dans le tableau currentVehicles
echo $residentialWay->addVehicle($bike); // Stocké dans le tableau currentVehicles


//Creation nouvel objet pedestrianWay de la classe PedestrianWay
$pedestrianWay = new PedestrianWay();

echo $pedestrianWay->addVehicle($porsche); //Return Le véhicule n'est pas adapté pour la zone pietonne
echo $pedestrianWay->addVehicle($bike); //Stocké dans le tableau currentVehicles