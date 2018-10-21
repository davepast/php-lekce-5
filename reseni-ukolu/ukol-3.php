<?php

interface IGeometrickyUtvar
{
    public function ziskejObvod();
}

abstract class GeometrickyUtvar implements IGeometrickyUtvar
{
    private $pocetStran;

    public function __construct($pocetStran)
    {
        $this->pocetStran = $pocetStran;
    }

    public function ziskejPocetStran()
    {
        return $this->pocetStran;
    }
}

class Ctverec extends GeometrickyUtvar
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
        parent::__construct(4);
    }

    public function ziskejObvod()
    {
        return $this->a * $this->ziskejPocetStran();
    }
}

class Trojuhelnik extends GeometrickyUtvar
{
    private $a;

    private $b;

    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct(3);
    }

    public function ziskejObvod()
    {
        return $this->a + $this->b + $this->c;
    }
}

function vypisDetail(IGeometrickyUtvar $utvar)
{
    echo '<h3>' . get_class($utvar) . '</h3>';
    echo 'Pocet stran: ' . $utvar->ziskejPocetStran() . '<br>';
    echo 'Obvod: ' . $utvar->ziskejObvod() . '<br><br>';
}

$ctverec = new Ctverec(3);
vypisDetail($ctverec);

$trojuhelnik = new Trojuhelnik(2, 4, 5);
vypisDetail($trojuhelnik);
