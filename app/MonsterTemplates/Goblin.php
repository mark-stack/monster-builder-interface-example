<?php

namespace App\MonsterTemplates;

use App\Interfaces\MonsterAttributesInterface;

class Goblin implements MonsterAttributesInterface {

    //MonsterAttributesInterface
    public function strength($arms): float
    {
        $unique_strength_factor = 1.3;
        $strength = $unique_strength_factor * $arms;

        return $strength;
    }

    //MonsterAttributesInterface
    public function jumpingHeight($legs): float{

        $jumping_height = $legs * 20;

        return $jumping_height;
    }

}