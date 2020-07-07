<?php

namespace AppBundle\Model\Inheritance;

// WHAT IF CLASS CAN'T BE INSTANTIATED?
class Animal
{
    // WHAT IF YOU DON'T WANT DEFAULT BEHAVIOUR?
    public function makeNoise()
    {
        echo "...";
    }

    public function eat()
    {
        echo "ñam ñam";
    }

    public function sleep()
    {
        echo "zzzzzzz...";
    }

    public function roam()
    {
        echo "Roaming...";
    }
}