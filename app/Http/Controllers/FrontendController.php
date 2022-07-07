<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MonsterTemplates\Goblin;
use App\MonsterTemplates\Dragon;
use App\Models\Monster;

class FrontendController extends Controller
{
    public function index(){

        //Monster attributes array
        $dragon = new Dragon();
        $goblin = new Goblin();
        $monster_objects = [
            'dragon' => $dragon,
            'goblin' => $goblin
        ];

        //dd($goblin->killProbability($arms),$dragon->strength($arms));

        $monsters = Monster::latest()->get()->take(7);

        return view('welcome',compact('monsters','monster_objects'));
    }
}
