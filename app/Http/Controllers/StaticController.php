<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class StaticController extends Controller
{
    public function index()
    {
        return view('index',['fruits'=>Fruit::all()]);
    }


    public function show($id)
    {
        return view('show',['fruit'=>Fruit::find($id)]);
    }


    public function edit(int $id){
        
        return view('update', ['fruit'=>Fruit::find($id)]);
    }



    public function update(Request $request, $id) {
        $fruit = fruit::find($id);
        $fruit->title = $request->title;
        $fruit->body = $request->body;
        $fruit->save();
        return redirect('/fruit');
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
        return redirect('/fruit');
    }


    public function destroy($id)
    {
        Fruit::destroy($id);
        return redirect('/fruit');
    }

}
