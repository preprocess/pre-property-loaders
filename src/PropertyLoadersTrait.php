<?php

namespace Pre\PropertyLoaders;

trait PropertyLoadersTrait
{
    public function __construct()
    {
        $this->loadProperties();
    }

    /**
     * Run all defined property loader methods.
     */
    protected function loadProperties()
    {
        $methods = get_class_methods($this);

        foreach ($methods as $method) {
            preg_match("/load[a-zA-Z]+Property/", $method, $matches);

            if (count($matches)) {
                $this->$method();
            }
        }
    }
}
