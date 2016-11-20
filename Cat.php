<?php
require_once 'Animal.php';

class Cat extends Animal
{
    public function meow()
    {
        $name = $this->getName();
        echo "Cat $name saying meow";
    }

}

