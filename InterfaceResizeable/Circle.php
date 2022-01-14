<?php

namespace InterfaceResizeable;
include_once "Resizeable.php";

class Circle implements \Resizeable
{
    public $name;
    public $radius;

    /**
     * @param $radius
     */
    public function __construct( $name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
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

    public function getArea()
    {
        return 2*pi()*pow($this->radius,2);
    }

    public function resize($percent)
    {
        $this->radius = $this->radius + $this->radius * $percent / 100;
    }
}