<?php
    class Bike {
        protected $speed; // Bike has-a $speed 的屬性
        // private -> protected -> public(var)

        function __construct(){ // 建構式/方法
            echo 'Bike()<br />';
            $this->speed = 10;
        }
        function upSpeed(){
            $this->speed = $this->speed < 1 ? 1 : $this->speed*1.2;
        }

        function downSpeed(){
            $this->speed = $this->speed < 0 ? 0 : $this->speed*0.7;
        }

        function getSpeed(){
            return $this->speed;
        }

    }

    class Scooter extends Bike {
        private $gear;

        function __construct(){
            echo 'Scooter()<br />';
        }

        function upSpeed(){
            $this->speed = $this->speed < 1 ? 1 : $this->speed*3.1*$this->gear;
        }

        function chageGear($gear = 0){
            $this->gear = $gear;
        }
    }

    $b1 = new Bike(); $b2 = new Bike();
    echo $b1->getSpeed() . '<br />';
    $b1->upSpeed();$b1->upSpeed();
    $b1->upSpeed();$b1->upSpeed();
    $b1->upSpeed();$b1->upSpeed();
    echo $b1->getSpeed() . '<br />';
    $b1->downSpeed();
    echo $b1->getSpeed() . '<br />';

    //$b2->speed = 6.1;
    echo $b2->getSpeed() . '<br />';
    echo '<hr />';
    $s1 = new Scooter();
    $s1->upSpeed(); $s1->upSpeed();
    echo $s1->getSpeed();







?>