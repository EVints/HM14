<?php

namespace App\Modules;

use App\Interfaces\Programming;


class Computer implements Programming
{

    private $processor;
    private $ram;
    private $pcPassword;

    private $language;

    public function setProcessor(string $proc)
    {
        $this->processor = $proc;
    }

    public function getProcessor()
    {
        return $this->processor;
    }


    public function setRam(string $ram)
    {
        $this->ram = $ram;
    }

    public function getRam()
    {
        return $this->ram;
    }


    public function setPcPassword(string $pass)
    {
        $this->pcPassword = md5($pass);
    }

    public function getPcPassword()
    {
        return $this->pcPassword;
    }



    public function setLanguage(string $lang)
    {
        $this->language = $lang;
    }

    public function getLanguage()
    {
        return $this->language;
    }
}
