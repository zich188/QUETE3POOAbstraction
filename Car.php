<?php

require_once "vehicle.php";

class Car extends Vehicle
{

    private string $energy;
    private int $energyLevel;
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent:: __construct($color,$nbSeats);
        $this->setEnergy($energy);
    }


    public function start()
    {
        return "vroom !";
    }


    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy(string $energy) : Car
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy=$energy;
        }
        return $this;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }
}