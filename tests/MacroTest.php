<?php

namespace Pre\PropertyLoaders;

use Pre\Plugin\Testing\Runner;

class MacroTest extends Runner
{
    protected function path(): string
    {
        return __DIR__ . "/specs";
    }
}
