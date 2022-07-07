<?php

namespace App\MonsterTemplates;

use App\Interfaces\MonsterAnatomyInterface;

class Dragon implements MonsterAnatomyInterface {

    public function strength($arms): float
    {
        $unique_strength_factor = 1.7;
        $strength = $unique_strength_factor * $arms;
        
        return $strength;
    }

    public function jumpingHeight($legs): float{

        $jumping_height = $legs * 30;

        return $jumping_height;
    }

}