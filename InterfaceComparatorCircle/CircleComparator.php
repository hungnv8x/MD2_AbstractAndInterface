<?php
include_once "Comparator.php";
include_once(dirname(__FILE__)."/../InterfaceComparable/Circle.php");
class CircleComparator implements Comparator
{
    public function comparator($circleOne, $circleTwo){
        $radius1 = $circleOne->getRadius();
        $radius2 = $circleTwo->getRadius();
        if ($radius1 >$radius2){
            return 1;
        }elseif ($radius1 < $radius2){
            return -1;
        }else{
            return 0;
        }
    }
}