<?php

namespace alloCine\controllers;

class controller
{

    private $twig;

    public function __construct($t)
    {
        $this->twig = $t;
    }

    public function index(){
        echo $this->twig->render('index.html.twig');
    }
}