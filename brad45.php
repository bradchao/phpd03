<?php
    class Bike {
        var $speed; // Bike has-a $speed 的屬性

        function __construct(){ // 建構式/方法
            $this->speed = 0;
        }
        function upSpeed(){
            $this->speed = $this->speed < 1 ? 1 : $this->speed*1.2;
        }

        function downSpeed(){
            $this->speed = $this->speed < 0 ? 0 : $this->speed*0.7;
        }

    }

    $b1 = new Bike(); $b2 = new Bike();
    echo $b1->speed . '<br />';
    $b1->upSpeed();$b1->upSpeed();
    $b1->upSpeed();$b1->upSpeed();
    $b1->upSpeed();$b1->upSpeed();
    echo $b1->speed . '<br />';
    $b1->downSpeed();
    echo $b1->speed . '<br />';


?>