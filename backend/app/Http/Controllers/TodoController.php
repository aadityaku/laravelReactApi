<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    
    public function index()
    {
        return Todo::all();
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'task'=>'required'
        ]);
        if($validator->fails()){
            return "Falied";
        }
        $validated=$validator->validate();
        Todo::create($validated);
        return "Insert successfully";
    }

    
    public function show(Todo $todo)
    {
        //
    }

    
    public function edit(Todo $todo)
    {
        //
    }

    
    public function update(Request $request, Todo $todo)
    {
        //
    }

    
    public function destroy(Todo $todo)
    {
        //
    }
}
