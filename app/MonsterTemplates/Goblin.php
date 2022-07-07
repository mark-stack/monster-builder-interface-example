<?php

namespace App\MonsterTemplates;

use App\Interfaces\MonsterAnatomyInterface;
use App\Interfaces\WeaponsInterface;

class Goblin implements MonsterAnatomyInterface,WeaponsInterface {

    public function strength($arms): float
    {
        $unique_strength_factor = 1.3;
        $strength = $unique_strength_factor * $arms;

        return $strength;
    }

    public function jumpingHeight($legs): float{

        $jumping_height = $legs * 20;

        return $jumping_height;
    }

    public function killProbability($arms): float{

        return 85;
    }

}