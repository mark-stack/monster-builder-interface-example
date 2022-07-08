<?php

namespace App\Interfaces;

interface MonsterAttributesInterface {

    public function strength($arms): float;

    public function jumpingHeight($legs): float;
 
}