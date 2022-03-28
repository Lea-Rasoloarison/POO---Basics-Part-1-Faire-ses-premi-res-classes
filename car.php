<?php

class Car{

    private int $nbWheels = 4;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats = 5;

    private string $energyType = 'electric';

    private int $energieLevel = 80;


    /* Nombre de roues */

    /**
     * @return int
     */
    public function getNbWheels()
    {
        return $this->nbWheels;
    }


    /* Vitesse de la voiture */

    public function setCurrentSpeed(int $currentSpeed): void // invalide les vitesses négatives
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function forward(): string // Définition de FORWARD
    {
        $this->currentSpeed = 50;

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
    
    // Définition de la couleur

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /* Nombre de places */

    /**
     * @param int $nbSeats
     */
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;
    }


    /* Type énergie */

    /**
     * @return string
     */
    public function getEnergyType()
    {
        return $this->energyType;
    }

    /* Niveau d'énergie */

    /**
     * @param int $energieLevel
     */
    public function setEnergieLevel($energieLevel)
    {
        $this->energieLevel = $energieLevel;
    }


}
