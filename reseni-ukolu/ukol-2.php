<?php

class GeometrickyUtvar
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

echo '<h3>Ctverec</h3>';
$ctverec = new Ctverec(3);
echo 'Pocet stran: ' . $ctverec->ziskejPocetStran() . '<br>';
echo 'Obvod: ' . $ctverec->ziskejObvod() . '<br><br>';

echo '<h3>Trojuhelnik</h3>';
$trojuhelnik = new Trojuhelnik(2, 4, 5);
echo 'Pocet stran: ' . $trojuhelnik->ziskejPocetStran() . '<br>';
echo 'Obvod: ' . $trojuhelnik->ziskejObvod() . '<br>';
