<?php

include "CircleComparator.php";
include_once(dirname(__FILE__)."/../InterfaceComparable/Circle.php");
$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->comparator($circleOne, $circleTwo));