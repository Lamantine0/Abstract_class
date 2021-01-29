<?php

abstract class  TestClass{

    public $a;
    public $b;
    public $c

    function __construct($a , $b)
    {
        $this->a=$a;
        $this->b=$b;


    }

    abstract public function multiplication();

}


class  TextMessege extends  TestClass{

    public function multiplication()
    {
        return $this->a*$this->b;
    }
}

$decision = new TextMessege(2,2);
echo $decision->multiplication();