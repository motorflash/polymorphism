<?php

namespace AppBundle\Model\InterfaceImplementation;

abstract class Animal
{
    abstract public function makeNoise();

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