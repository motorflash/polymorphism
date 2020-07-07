<?php

namespace AppBundle\Service\Basic;

class AnimalService
{
    // WHAT IS ANIMAL?
    public function live($animal)
    {
        $animal->makeNoise();
        $animal->eat();
        $animal->makeNoise();
        $animal->roam();
        $animal->eat();
        $animal->sleep();
    }
}