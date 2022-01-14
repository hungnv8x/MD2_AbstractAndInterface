<?php
include_once "Circle.php";
include_once "Comparable.php";
class ComparableCircle extends Circle implements Comparable
{

    public function compareTo($objTwo)
    {
        $radius2 = $objTwo->getRadius();
        if ($this->getRadius() > $radius2){
            return 1;
        }elseif ($this->getRadius() < $radius2){
            return -1;
        }else{
            return 0;
        }
    }
}