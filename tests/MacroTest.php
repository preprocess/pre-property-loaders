<?php

namespace Pre\PropertyLoaders;

use PHPUnit\Framework\TestCase;

class MacroTest extends TestCase
{
    public function testPropertyLoaders()
    {
        $fixture = new Fixture\Fixture();

        $this->assertEquals($fixture->name(), "Acme Fixture");
        $this->assertEquals($fixture->thing(), new \stdClass);
    }
}
