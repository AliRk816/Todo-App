<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();
        return view('index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'todo' => 'required',
        ]);

        $task = new Todo;
        $task->todo = $request->input('todo');
        $task->save();
        return redirect('/index')->with('success', 'You have successfully added a task!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todos = Todo::find($id);
        return view('/edit')->with('todos', $todos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'todo' => 'required',
        ]);

        $task =Todo::find($id);
        $task->todo = $request->input('todo');
        $task->save();
        return redirect('/index')->with('success', 'You have successfully changed your task!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task =Todo::find($id);
        $task->delete();
        return redirect('/index');

        
    }

    public function completed($id)
    {
        $task =Todo::find($id);
        $task->completed=1;
        $task->save();
        return redirect('/index');

        
    }
}
