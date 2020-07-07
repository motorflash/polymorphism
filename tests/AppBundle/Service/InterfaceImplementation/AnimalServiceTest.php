<?php

namespace Tests\AppBundle\Service\InterfaceImplementation;

use AppBundle\Model\InterfaceImplementation\Cat;
use AppBundle\Model\InterfaceImplementation\Dog;
use AppBundle\Model\InterfaceImplementation\Lion;
use AppBundle\Service\InterfaceImplementation\AnimalService;
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

    public function testCatPet()
    {
        $expected = "Taming cat...";
        $this->expectOutputString($expected);

        $service = new AnimalService();
        $cat = new Cat();
        $service->tame($cat);
    }

    public function testDogPet()
    {
        $expected = "Taming dog...";
        $this->expectOutputString($expected);

        $service = new AnimalService();
        $dog = new Dog();
        $service->tame($dog);
    }
}