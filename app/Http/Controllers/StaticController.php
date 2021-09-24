<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class StaticController extends Controller
{
    public function home()
    {
        return view('write',['fruits'=>Fruit::all()]);
    }
    public function fruit()
    {
        return view('write',['fruits'=>Fruit::all()]);
    }
    public function create()
    {
        return view('create',['fruits'=>Fruit::all()]);
    }
    public function store(Request $request)
    {
        Fruit::create([
            'title'=> $request->title,
            'body'=> $request->body
        ]);
        return redirect('/fruits');
    }
    public function destroy($id)
    {
        Fruit::destroy($id);
        return redirect('/fruits');
    }
}
