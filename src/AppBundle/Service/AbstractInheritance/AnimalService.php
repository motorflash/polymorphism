<?php

namespace AppBundle\Service\AbstractInheritance;

use AppBundle\Model\AbstractInheritance\Animal;

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
        $animal->tame();
    }
}