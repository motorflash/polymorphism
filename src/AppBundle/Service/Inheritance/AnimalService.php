<?php

namespace AppBundle\Service\Inheritance;

use AppBundle\Model\Inheritance\Animal;

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
    }
}