<?php
include_once "Circle.php";
include_once "Rectangle.php";
$geometry[] = new \InterfaceResizeable\Circle("circle",30);
$geometry[]= new \InterfaceResizeable\Rectangle("rect",30,20);
echo "<pre>";
echo " Kích thước ban đầu : ";
foreach ($geometry as $item) {
    print_r($item);
}
$percent = rand(1,100);
echo "Kích thước sau khi thay đổi ".$percent."%";
echo "<br>";
foreach ($geometry as $item) {
    $item->resize($percent);
    print_r($item);
}