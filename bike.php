<?php

class Bike{

    private int $nbWheels = 2;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats = 1;


    /* Nombre de roues */

    /**
     * @return int
     */
    public function getNbWheels()
    {
        return $this->nbWheels;
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

    /**
     * @param int $nbSeats
     */
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;
    }







}