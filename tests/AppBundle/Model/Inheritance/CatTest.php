<?php

namespace Tests\AppBundle\Model\Inheritance;

use AppBundle\Model\Inheritance\Cat;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class CatTest extends TestCase
{
    public function testMakeNoise()
    {
        $expected = "Prrrrrrrr!";
        $this->expectOutputString($expected);

        $cat = new Cat();
        $cat->makeNoise();
    }

    public function testEat()
    {
        $expected = "Prrrrrrrr ñam ñam prrrrrr";
        $this->expectOutputString($expected);

        $cat = new Cat();
        $cat->eat();
    }

    public function testSleep()
    {
        $expected = "zzzzzzz...";
        $this->expectOutputString($expected);

        $cat = new Cat();
        $cat->sleep();
    }

    public function testRoam()
    {
        $expected = "Roaming...";
        $this->expectOutputString($expected);

        $cat = new Cat();
        $cat->roam();
    }
}