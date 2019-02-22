<?php

class Shape
{
    private $tol;

    public static $name = 'morabbae';

    public function setTol($tol)
    {
        $this->tol = (int)$tol;
    }

    protected function getTol()
    {
        return $this->tol;
    }

    public function calculateMohit()
    {
        return $this->getTol() * 4;
    }

    public function calculateMasahat()
    {
        return $this->getTol() * $this->getTol();
    }
}
class Rect extends Shape
{
    protected $arz;

    public static $name = 'Rect';

    public function setArz($arz)
    {
        $this->arz = (int)$arz;
    }

    public static function describe()
    {
        return 'this is ' . self::$name;
    }

    protected function getArz()
    {
        return $this->arz;
    }

    public function calculateMohit()
    {
        return ($this->getTol()+$this->getArz()) * 2;
    }

    public function calculateMasahat()
    {
        return $this->getTol() * $this->getArz();
    }
}

var_dump(Rect::describe());



$shape = new Shape();
$shape->setTol(12);
echo 'borabae:';
echo 'Masahat:';
var_dump($shape->calculateMasahat());
echo 'Mohit:';
var_dump($shape->calculateMohit());

$shape = new Rect();
$shape->setTol(12);
$shape->setArz(22);
echo 'mostatil:';
echo 'Masahat:';
var_dump($shape->calculateMasahat());
echo 'Mohit:';
var_dump($shape->calculateMohit());
