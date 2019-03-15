<?php

class Ctverec
{
    public $delkaStrany;

    public function __construct($delkaStrany)
    {
    $this->delkaStrany = $delkaStrany;
    }

    public function spocitejObsah() {
        return pow($this->delkaStrany, 2);
    }
}

$ctverec1 = new Ctverec(6);
$ctverec2 = new Ctverec(120);
$ctverec1->delkaStrany = 8;

echo "Obsah čtverce o straně $ctverec1->delkaStrany cm je " . $ctverec1->spocitejObsah() . " cm^2 <br>";
echo "Obsah čtverce o straně $ctverec2->delkaStrany cm je " . $ctverec2->spocitejObsah() . " cm^2";
