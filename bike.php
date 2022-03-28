<?php

class Bike{


    private int $currentSpeed;

    public function __construct(int $nbWheels,string $color, int $nbSeats){
        $this-> nbWheels = $nbWheels;
        $this-> color = $color;
        $this-> nbSeats = $nbSeats;
    }


    /* Nombre de roues */

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    /* Vitesse du vélo */

    public function setCurrentSpeed(int $currentSpeed): void // invalide les vitesses négatives
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function forward(): string // Définition de FORWARD
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string // Définition de Brake
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /* Nombre de place */

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

}
