<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Auth;

use App\Exception\ApiInvalidRequestData;
use Illuminate\Support\Facades\Validator;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        return response()->json([
            'tasks'=>$tasks
        ]);
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

        $task = Task::create($request->all());
        return $task;
        
       $request->validate([
           'name'=> 'required',
           'body'=> 'required'
       ]);
       $tasks = $request->user()->tasks()->create([
           'name'=> $request->name,
           'body'=>$request->body
       ]);

       return response()->json([
           'tasks'=>$tasks,
           'message'=>"task has been created!"
       ]);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required',
            'body'=> 'required'
        ]);
        $task = $request->user()->tasks()->whereId($id)->update($request->all());
        
        return response()->json([
            'task'=>$task,
            'message'=>"task has been updated!"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json([
            'task'=>$task,
            'message'=>"task has been deleted!"
        ]);
    }
}
