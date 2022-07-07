<?php

namespace App\Interfaces;

interface MonsterAnatomyInterface {

    public function strength($arms): float;

    public function jumpingHeight($legs): float;

}