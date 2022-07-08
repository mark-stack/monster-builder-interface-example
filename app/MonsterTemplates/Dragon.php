<?php

namespace App\MonsterTemplates;

use App\Interfaces\MonsterAttributesInterface;
use App\Interfaces\FlyingInterface;

class Dragon implements MonsterAttributesInterface,FlyingInterface {

    //MonsterAttributesInterface
    public function strength($arms): float
    {
        $unique_strength_factor = 1.7;
        $strength = $unique_strength_factor * $arms;
        
        return $strength;
    }

    //MonsterAttributesInterface
    public function jumpingHeight($legs): float{

        $jumping_height = $legs * 30;

        return $jumping_height;
    }

    //FlyingInterface
    public function flyingSpeed(): float{

        $flyingSpeed = 27;
        return $flyingSpeed;
    }
}