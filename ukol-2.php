<?php

class GeometrickyUtvar
{
    private $pocetStran;

    public function __construct($pocetStran)
    {
        $this->pocetStran = $pocetStran;
    }

    public function ziskejPocetStran() {
        return $this->pocetStran;
    }
}

class Ctverec extends GeometrickyUtvar
{
    private $delkaStrany;
    public function __construct($delkaStrany)
    {
        parent::__construct(4);
        $this->delkaStrany = $delkaStrany;
    }

    public function ziskejObvod(){
        return $this->ziskejPocetStran() * $this->delkaStrany;
    }
}

class Trojuhelnik extends GeometrickyUtvar
{
    private $stranaA;
    private $stranaB;
    private $stranaC;

    public function __construct($stranaA, $stranaB, $stranaC)
    {
        $this->stranaA = $stranaA;
        $this->stranaB = $stranaB;
        $this->stranaC = $stranaC;
        parent::__construct(3);


    }

    public function ziskejObvod(){
        return $this->stranaA + $this->stranaB + $this->stranaC;
    }
}

$trojuhelnik = new Trojuhelnik(1,2,3);

    echo $trojuhelnik->ziskejObvod();

$ctverec = new Ctverec(4);

echo $ctverec->ziskejObvod();