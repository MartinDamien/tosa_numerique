<?php

namespace alloCine\models\services;

use alloCine\models\daos\acteurDao;

class ActeurService
{
    private $acteurDao;

    public function __construct()
    {
        $this->acteurDao = new ActeurDao();
    }

    public function getAllActeur()
    {
        $result = $this->acteurDao->findAll();
        return $result;
    }

    public function getAllActeurs()
    {
        return $this->ActeurDao->findAll();
    }

    public function getActorById($id)
    {
        return $this->ActeurDao->findById($id);
        var_dump($id);
    }
}
