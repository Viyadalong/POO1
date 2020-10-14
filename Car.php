<?php


class Car
{
    private $nbWheels;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;


public function forward()
{
    $this->setCurrentSpeed = 15;       
    return "Go !";
}

public function brake(): string
{
    $sentence = "";
    while ($this->setCurrentSpeed > 0) {
        $this->setCurrentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
}



public function getNbWheels(): int
{
    return $this->nbWheels;
}
public function setNbWheels(int $nbWheels) : void
{
    $this->nbWheels = $nbWheels;
}
public function __construct(string $color, int $nbSeats, string $energy)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
}      


public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}
public function setCurrentSpeed(int $currentSpeed): void
{
    if($currentSpeed >= 0){
        $this->currentSpeed = $currentSpeed;
    }
}


public function getColor(): string
{
    return $this->color;
}
public function setColor(string $color) : void
{
    $this->color = $color;
}



public function getNbSeats(): int
{
    return $this->nbWheels;
}
public function setNbSeats(int $nbSeats) : void
{
    $this->nbSeats = $nbSeats;
}



public function getEnergy(): string
{
    return $this->color;
}
public function setEnergy(string $energy) : void
{
    $this->energy = $energy;
}


public function getEnergyLevel(): int
{
    return $this->energyLevel;
}
public function setEnergyLevel(int $energyLevel) : void
{
    $this->energyLevel = $energyLevel;
}



}