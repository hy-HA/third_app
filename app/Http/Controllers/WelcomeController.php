<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show($tomato, $apple)
    {
        return view('index',[
            'tomato' => $tomato, 
            'apple' => $apple,
            'name' => 'Finn'
        ]);
    }
}
