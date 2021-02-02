<?php

interface Vehicle{

    public function info();
}

interface Car extends Vehicle{

    public function drive();
}

interface Boat extends Vehicle{

    public function swim();
}

class Audi implements Car{

    public function info()
    {
        echo "<br>Автомобиль AUDI изготовлен в Германии";

    }

    public function drive()
    {
       echo "<br>это автомобиль";
    }
}

$car = new Audi();
$car->info();
$car->drive();


class mercedesAmphibius implements Car , Boat{

    public function info()
    {
        echo "<br>Машина Мерседес из Германии";
    }

    public function drive()
    {
        echo  "<br>Машина едит";
    }

    public function swim()
    {
        echo "<br> Машина плывет";
    }
}

$car1 = new mercedesAmphibius();
$car1->info();
$car1->drive();
$car1->swim();