<?php

namespace InterfaceResizeable;
include_once "Resizeable.php";

class Rectangle implements \Resizeable
{
    public $width;
    public $height;

    /**
     * @param $width
     * @param $height
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width): void
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function resize($percent)
    {
        $this->width = $this->width + $this->width * $percent / 100;
        $this->height = $this->height + $this->height * $percent / 100;
    }
}