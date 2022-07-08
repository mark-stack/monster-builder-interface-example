<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use App\Http\Requests\MonsterStoreRequest;

class MonsterController extends Controller
{
    public function store(MonsterStoreRequest $request){

        //Create using validation array
        $new_monster = Monster::create($request->validated());

        //Success message and CTA to check out docs below
        $flash_msg = 'You created a '. ucfirst($new_monster->type).". <a href='#solid'>Scroll down</a> to see why it's SOLID code.";

        return back()->with('success',$flash_msg);
    }
}
