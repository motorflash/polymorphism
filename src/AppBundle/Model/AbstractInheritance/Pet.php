<?php

namespace AppBundle\Model\AbstractInheritance;

// WE CAN'T HAVE MULTIPLE INHERITANCE
class Pet
{
    public function tame()
    {
        echo "Taming...";
    }
}