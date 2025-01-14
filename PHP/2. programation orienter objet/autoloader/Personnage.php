<?php

class Personnage
{
    //datas
    private $_nom;
    private $_prenom;
    private $_age;
    protected $quemafille;

    public static $varclass = "une propriété statique";
    public static $compteur = 0;

    const PI = 3.14;

    public function __construct($n, $p, $a)
    {
        $this->_nom = $n;
        $this->_prenom = $p;
        $this->_age = $a;
    }

    public function parler($qui)
    {
        echo "je suis le personnage" . $qui . "\n";
    }

    public function get_nom()
    {
        return $this->_nom;
    }

    public function set_nom($_nom)
    {
        $this->_nom = $_nom;
    }

    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;
    }

    public function get_age()
    {
        return $this->_age;
    }

    public function set_age($_age)
    {
        $this->_age = $_age;
    }

    public function pi()
    {
        echo self::PI;
    }
}
