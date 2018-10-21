<?php

class Ctverec
{
    public $delkaStrany;

    public function __construct($delkaStrany)
    {
        $this->delkaStrany = $delkaStrany;
    }

    public function spocitejObsah()
    {
        return $this->delkaStrany * $this->delkaStrany;
    }
}

$ctverec = new Ctverec(6);

echo 'Obsah ctverce o delce strany ' . $ctverec->delkaStrany . ' je ' . $ctverec->spocitejObsah();

