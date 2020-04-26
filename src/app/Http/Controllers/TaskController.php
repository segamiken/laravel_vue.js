<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
	    return response()->json(['tasks' => $tasks]);
    }

    public function show($id)
    {
        $task = Task::find($id);
        return response()->json(['task' => $task]);
    }

    public function store(Request $request)
    {
        $task = Task::create($request->new_task);
        $tasks = Task::all();
    	return response()->json(['tasks' => $tasks]);
    }

    public function destroy($id)
    {
        Task::destroy($id);
	    return response()->json(['message' => 'delete successfully']);
    }

    public function update($id, Request $request)
    {
        $task = Task::find($id);
        $task->update($request->task);
        return response()->json(['task' => $task]);
    }
}
