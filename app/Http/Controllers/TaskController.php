<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $task = new Task([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'is_completed' => false,
        ]);

        Auth::user()->tasks()->save($task);

        return redirect('/home')->with('success', 'Taerea Creada.');
    }

    public function complete(Task $task)
    {
        if(!$task->is_completed) {
            $task->is_completed = true;
            $task->save();
        }
        elseif($task->is_completed) {
            $task->is_completed = false;
            $task->save();
        }
        return redirect('/home')->with('success', 'Tarea Completada!.');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/home')->with('success', 'Tarea Eliminada!.');
    }
}
