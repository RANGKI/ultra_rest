<?php

namespace App\Http\Controllers;

use App\Http\Requests\CharacterRequest;
use App\Http\Resources\CharacterResource;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function add_character(CharacterRequest $request): CharacterResource {
        $data = $request->validated();
        $character = Character::create([
    'MODEL' => $request->input('model'),
    'DESCRIPTION' => $request->input('description'),
    'UNIT' => $request->input('unit'),
    'PURPOSE' => $request->input('purpose'),
    'PRODUCTION' => $request->input('production'),
]);


        return Character::all()->toResource();
    }
}
