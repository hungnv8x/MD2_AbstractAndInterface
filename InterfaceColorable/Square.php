<?php
include_once "Colorable.php";
class Square implements Colorable
{
    public $name;
    public $width;

    /**
     * @param $width
     */
    public function __construct( $name,$width)
    {
        $this->name = $name;
        $this->width = $width;
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

    public function getArea()
    {
        return $this->width*$this->width;
    }
    public function howToColor()
    {
        echo "Color all four sides";
    }
}