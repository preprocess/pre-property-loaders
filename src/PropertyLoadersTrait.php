<?php

namespace Pre\PropertyLoaders;

trait PropertyLoadersTrait
{
    /**
     * @inheritdoc
     */
    public function __construct()
    {
        $this->__property_loaders();
    }

    /**
     * Run all defined property loader methods.
     */
    protected function __property_loaders()
    {
        $methods = get_class_methods($this);

        foreach ($methods as $method)
        {
            if (stripos($method, "__property_loader_") === 0) {
                $this->$method();
            }
        }
    }
}
