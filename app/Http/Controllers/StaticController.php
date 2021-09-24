<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class StaticController extends Controller
{
    public function home()
    {
        dd(Fruit::all());
        return view('welcome');
        //ceci est un commentaire
    }
}
