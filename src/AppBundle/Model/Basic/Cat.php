<?php

namespace AppBundle\Model\Basic;

class Cat
{
    public function makeNoise()
    {
        echo "Prrrrrrrr!";
    }

    public function eat()
    {
        echo "Prrrrrrrr ñam ñam prrrrrr";
    }

    // DRY - Don't Repeat Yourself
    public function sleep()
    {
        echo "zzzzzzz...";
    }

    // DRY
    public function roam()
    {
        echo "Roaming...";
    }
}