<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use App\Services\MonsterObjectsService;

class FrontendController extends Controller
{
    public function index(){

        //Monster Objects Service
        $monster_objects = (new MonsterObjectsService)->monsterObjectsArray();

        //Get most recent user created monsters
        $monsters = Monster::latest()->get()->take(7);

        return view('welcome',compact('monsters','monster_objects'));
    }
}
