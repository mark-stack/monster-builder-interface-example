<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monster;

class MonsterController extends Controller
{
    public function create(Request $request){

        $validated = $request->validate([
            'type' => 'required',
            'arms' => 'required|digits_between:0,6',
            'legs' => 'required|digits_between:0,8',
        ]);

        $new_monster = Monster::create($validated);

        $flash_msg = 'You created a '. ucfirst($new_monster->type).". <a href='#solid'>Scroll down</a> to see why it's SOLID code.";

        return back()->with('success',$flash_msg);
    }
}
