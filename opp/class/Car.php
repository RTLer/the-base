<?php

class Car extends Vehicle
{
    public $engine;

    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function getDescription()
    {
        return 'this car\'s color is '
            . $this->color
            . ' and it\'s engine is ' . $this->enginez . '.';
    }
}