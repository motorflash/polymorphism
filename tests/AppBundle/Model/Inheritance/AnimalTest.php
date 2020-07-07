<?php

namespace Tests\AppBundle\Model\Inheritance;

use AppBundle\Model\Inheritance\Animal;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class AnimalTest extends TestCase
{
    public function testMakeNoise()
    {
        $expected = "...";
        $this->expectOutputString($expected);

        $animal = new Animal();
        $animal->makeNoise();
    }

    public function testEat()
    {
        $expected = "ñam ñam";
        $this->expectOutputString($expected);

        $animal = new Animal();
        $animal->eat();
    }

    public function testSleep()
    {
        $expected = "zzzzzzz...";
        $this->expectOutputString($expected);

        $animal = new Animal();
        $animal->sleep();
    }

    public function testRoam()
    {
        $expected = "Roaming...";
        $this->expectOutputString($expected);

        $animal = new Animal();
        $animal->roam();
    }
}