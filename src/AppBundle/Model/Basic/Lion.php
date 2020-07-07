<?php

namespace AppBundle\Model\Basic;

class Lion
{
    public function makeNoise()
    {
        echo "Rooaaaarrrr!";
    }

    public function eat()
    {
        echo "Rooaaaarrrr ñam ñam";
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