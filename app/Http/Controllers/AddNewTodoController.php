<?php

namespace App\Http\Controllers;

use App\Models\AddNewTodo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AddNewTodoController extends Controller
{


    public function create()
    {
        return Inertia::render('AddNewTodo');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(AddNewTodo $addNewTodo)
    {
        //
    }

    public function edit(AddNewTodo $addNewTodo)
    {
        //
    }

    public function update(Request $request, AddNewTodo $addNewTodo)
    {
        //
    }

    public function destroy(AddNewTodo $addNewTodo)
    {
        //
    }
}
