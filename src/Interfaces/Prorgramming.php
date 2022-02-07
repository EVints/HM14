<?php

namespace App\Interfaces;

interface Programming
{

    private $language;

    public function setLanguage(string $lang);

    public function getLanguage();
}
