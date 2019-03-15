<?php

interface TrojrozmernyObrazec {
    public function ziskejObjem();
    public function ziskejPovrch();
}

function vypisDetaily(TrojrozmernyObrazec $teleso) {
    echo "<strong>" . get_class($teleso) . "</strong> má objem " . $teleso->ziskejObjem() . " cm^3 a povrch " . $teleso->ziskejPovrch() . " cm^2";
    echo "<br>";
}


class Kvadr implements TrojrozmernyObrazec
{
    public $kvadrStranaA;
    public $kvadrStranaB;
    public $kvadrStranaC;

    public function ziskejObjem()
    {
        return $this->kvadrStranaA * $this->kvadrStranaB * $this->kvadrStranaC;
    }
    public function ziskejPovrch()
    {
        return 2 * ($this->kvadrStranaA * $this->kvadrStranaB + $this->kvadrStranaA * $this->kvadrStranaC + $this->kvadrStranaA * $this->kvadrStranaC);
    }

    public function __construct($kvadrStranaA, $kvadrStranaB, $kvadrStranaC)
    {
        $this->kvadrStranaA = $kvadrStranaA;
        $this->kvadrStranaB = $kvadrStranaB;
        $this->kvadrStranaC = $kvadrStranaC;
    }
}

class Krychle implements TrojrozmernyObrazec
{
    public $stranaKrychle;

    public function __construct($stranaA)
    {
        $this->stranaKrychle = $stranaA;
    }

    public function ziskejObjem()
    {
        return pow($this->stranaKrychle, 3);
    }

    public function ziskejPovrch()
    {
        return 6 * pow($this->stranaKrychle, 2);
    }
}

class Koule implements TrojrozmernyObrazec
{

    public $polomer;

    public function __construct($polomer)
    {
        $this->polomer = $polomer;
    }

    public function ziskejPovrch()
    {
        return 4 * M_PI * pow($this->polomer, 2);
    }

    public function ziskejObjem()
    {
        return 4 * M_PI * pow($this->polomer, 3) / 3;
    }
}

class Jehlan implements TrojrozmernyObrazec
{
    public $jehlanStrana;
    public $jehlanVyskaNaStranu;

    public function ziskejObjem()
    {
        return pow($this->jehlanStrana, 2) * $this->jehlanVyskaNaStranu / 3;
    }

    public function ziskejPovrch()
    {
        return (pow($this->jehlanStrana, 2) + 4 * $this->jehlanStrana * (sqrt(pow($this->jehlanStrana /2 , 2) + pow($this->jehlanVyskaNaStranu,2))));


    }

    public function __construct($jehlanStrana, $jehlanVyskaNaStranu)
    {
        $this->jehlanStrana = $jehlanStrana;
        $this->jehlanVyskaNaStranu = $jehlanVyskaNaStranu;
    }
}



$kvadr1 = new Kvadr(2,3,7);
$krychle1 = new Krychle(5);
$koule1 = new Koule(6);
$jehlan1 = new Jehlan(3,6);

vypisDetaily($kvadr1);
vypisDetaily($koule1);
vypisDetaily($krychle1);
vypisDetaily($jehlan1);
