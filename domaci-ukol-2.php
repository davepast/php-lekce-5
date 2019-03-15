<?php

class Uzivatel
{
    public $jmeno;

    public $heslo;

    public function __construct(string $jmeno, string $heslo)
    {
        $this->jmeno = $jmeno;
        $this->heslo = $heslo;
    }

    public function overeni(string $zadaneJmeno, string $zadaneHeslo)
    {
        if ($this->jmeno == $zadaneJmeno && $this->heslo == $zadaneHeslo) {
            return true;
        } else {
            return false;
        }
    }

    public function ziskejJmeno()
    {
        return $this->jmeno;
    }
}

class Prihlasovani
{
    public $prihlaseniUzivatele;

    public function prihlas(Uzivatel $uzivatel, string $prihlasitJmeno, string $prihlasitHeslo)
    {
        if ($uzivatel->overeni($prihlasitJmeno, $prihlasitHeslo) === true) {
            $this->prihlaseniUzivatele[] = $uzivatel->ziskejJmeno();
        }

    }

    public function zobrazPrihlaseneUzivatele(){

    echo "Přihlášení uživatelé: ";
    if(empty($this->prihlaseniUzivatele)) {

    } else {
        foreach ($this->prihlaseniUzivatele as $value) {
        echo $value . ", ";
        }
    }
    echo "<br>";

    }

}

$josef = new Uzivatel('josef', 'josef1234');

$prihlasovani = new Prihlasovani();

$prihlasovani->zobrazPrihlaseneUzivatele();

$prihlasovani->prihlas($josef, 'josef', 'josef1234');

$prihlasovani->zobrazPrihlaseneUzivatele();

$karel = new Uzivatel('karel', 'karel1234');

$prihlasovani->prihlas($karel, 'karel', 'kar34');

$prihlasovani->zobrazPrihlaseneUzivatele();

$prihlasovani->prihlas($karel, 'karel', 'karel1234');

$prihlasovani->zobrazPrihlaseneUzivatele();


