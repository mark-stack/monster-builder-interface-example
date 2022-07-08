<?php

namespace App\Services;

use App\MonsterTemplates\Goblin;
use App\MonsterTemplates\Dragon;

class MonsterObjectsService {

    public function monsterObjectsArray(){

        //List all monster classes
        $monster_objects = [
            'dragon' => new Dragon(),
            'goblin' => new Goblin()
        ];

        return $monster_objects;
    }
    
}