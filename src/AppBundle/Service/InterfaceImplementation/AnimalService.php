<?php

namespace AppBundle\Service\InterfaceImplementation;

use AppBundle\Model\InterfaceImplementation\Animal;
use AppBundle\Model\InterfaceImplementation\Pet;

class AnimalService
{
    public function live(Animal $animal)
    {
        $animal->makeNoise();
        $animal->eat();
        $animal->makeNoise();
        $animal->roam();
        $animal->eat();
        $animal->sleep();

        if ($animal instanceof Pet) {
            $animal->tame();
        }
    }

    public function tame(Pet $pet)
    {
        $pet->tame();
    }
}