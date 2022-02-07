<?php

namespace App\Modules;

use App\Interfaces\Programming;

class User
{
    private $name;
    private $gender;
    private $age;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setGender(string $gen)
    {
        $this->gender = $gen;
    }

    public function getGender()
    {
        return $this->gender;
    }


    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }



    public function work(Programming $persComp, $lang)
    {
        $persComp->setLanguage($lang);
        print_r($persComp);
    }
}
