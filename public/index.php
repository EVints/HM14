<?php

include('/app/vendor/autoload.php');

use App\Modules\User;
use App\Modules\Computer;


$user_1 = new User();

$user_1->setName('Grisha');
$user_1->setGender('Male');
$user_1->setAge(28);

echo '<pre>';
var_dump($user_1);
echo '</pre>';

echo "<br>";
echo "<br>";

$computer_1 = new Computer();

$computer_1->setProcessor('Intel');
$computer_1->setRam('16GB');
$computer_1->setPcPassword('qwerty123');

echo '<pre>';
var_dump($computer_1);
echo '</pre>';

echo "<br>";
echo "<br>";


$user_1->work($computer_1, 'PHP');
