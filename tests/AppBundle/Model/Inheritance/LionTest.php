<?php

namespace Tests\AppBundle\Model\Inheritance;

use AppBundle\Model\Inheritance\Lion;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class LionTest extends TestCase
{
    public function testMakeNoise()
    {
        $expected = "Rooaaaarrrr!";
        $this->expectOutputString($expected);

        $lion = new Lion();
        $lion->makeNoise();
    }

    public function testEat()
    {
        $expected = "Rooaaaarrrr ñam ñam";
        $this->expectOutputString($expected);

        $lion = new Lion();
        $lion->eat();
    }

    public function testSleep()
    {
        $expected = "zzzzzzz...";
        $this->expectOutputString($expected);

        $lion = new Lion();
        $lion->sleep();
    }

    public function testRoam()
    {
        $expected = "Roaming...";
        $this->expectOutputString($expected);

        $lion = new Lion();
        $lion->roam();
    }
}