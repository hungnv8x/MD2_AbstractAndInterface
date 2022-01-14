<?php

namespace InterfaceResizeable;
include_once "Resizeable.php";

class Circle implements \Resizeable
{
    public $radius;

    /**
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }


    public function resize($percent)
    {
        $this->radius = $this->radius + $this->radius * $percent / 100;
    }
}