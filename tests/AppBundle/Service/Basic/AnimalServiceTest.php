<?php

namespace Tests\AppBundle\Service\Basic;

use AppBundle\Model\Basic\Cat;
use AppBundle\Model\Basic\Lion;
use AppBundle\Service\Basic\AnimalService;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class AnimalServiceTest extends TestCase
{
    public function testCatLive()
    {
        $expected = "Prrrrrrrr!Prrrrrrrr ñam ñam prrrrrrPrrrrrrrr!Roaming...Prrrrrrrr ñam ñam prrrrrrzzzzzzz...";
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
}