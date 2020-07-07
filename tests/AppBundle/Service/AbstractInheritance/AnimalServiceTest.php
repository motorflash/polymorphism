<?php

namespace Tests\AppBundle\Service\AbstractInheritance;

use AppBundle\Model\AbstractInheritance\Cat;
use AppBundle\Model\AbstractInheritance\Dog;
use AppBundle\Model\AbstractInheritance\Lion;
use AppBundle\Service\AbstractInheritance\AnimalService;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class AnimalServiceTest extends TestCase
{
    public function testCatLive()
    {
        $expected = "Prrrrrrrr!Prrrrrrrr ñam ñam prrrrrrPrrrrrrrr!Roaming...Prrrrrrrr ñam ñam prrrrrrzzzzzzz...Taming cat...";
        $this->expectOutputString($expected);

        $service = new AnimalService();
        $cat = new Cat();
        $service->live($cat);
    }

    public function testLionLive()
    {
        $expected = "Rooaaaarrrr!Rooaaaarrrr ñam ñamRooaaaarrrr!Roaming...Rooaaaarrrr ñam ñamzzzzzzz...";
        $this->expectOutputString($expected);

        $service = new AnimalService();
        $lion = new Lion();
        $service->live($lion);
    }

    public function testDogLive()
    {
        $expected = "Guau guau!!Guau ñam ñam guau!Guau guau!!Roaming...Guau ñam ñam guau!zzzzzzz...Taming dog...";
        $this->expectOutputString($expected);

        $service = new AnimalService();
        $lion = new Dog();
        $service->live($lion);
    }
}