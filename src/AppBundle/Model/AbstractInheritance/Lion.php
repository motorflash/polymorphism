<?php

namespace AppBundle\Model\AbstractInheritance;

class Lion extends Animal
{
    public function makeNoise()
    {
        echo "Rooaaaarrrr!";
    }

    public function eat()
    {
        echo "Rooaaaarrrr ñam ñam";
    }
}