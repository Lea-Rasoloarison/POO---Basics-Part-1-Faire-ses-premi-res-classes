<?php

class Car{

    private int $nbWheels = 4;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats = 5;

    private string $energyType = 'electric';

    private int $energieLevel = 80;


    /* Nombre de roues */

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
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

    /* Nombre de places */

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }


    // Energie utilisée

    private function getEnergy(): string
    {
        return $this->energy;
    }

    // Relier à ALLOWED ENERGIES = permettant de choisir une des deux énergie disponible
    private function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) { /* SELF est utilisé à la place de THIS car il représente la classe et non l'instance */
            $this->energy = $energy;
        }
        return $this;
    }


    // Niveau d'énergie

    private function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    private function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

// Possibilité d'avoir uniquement ses deux ressources possibles pour les énergies utilisées
    private const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
}
