<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        //Con with solucionamos el problema de N+1
        $tasks=Task::with('user')->latest()->simplePaginate(5);
        return view('tasks.index', [
            'tasks'=> $tasks
        ]);
    }
    public function create(){
        return view("tasks.create");
    }
    public function show(Task $task){
        return view('tasks.show',['task'=> $task]);
    }
    public function store(){
        //Hay que poner el name del imput que se quiera validar
        request()->validate([
            'titulo'=>['required','min:3','max:30'],
            'descripcion'=>['required','min:10','max:100']
        ]);

        Task::factory()->create([
            'titulo'=>request('titulo'),
            'descripcion'=>request('descripcion')
        ]);
        return redirect('/tasks');
    }
    public function edit(Task $task){
        return view('tasks.edit',['task'=> $task]);
    }
    public function update(Task $task){
        request()->validate([
            'titulo'=>['required','min:3','max:50'],
            'descripcion'=>['required','min:10','max:150']
        ]);

        //$task=Task::findOrFail($id);

        $task->update([
            'titulo'=>request('titulo'),
            'descripcion'=>request('descripcion'),
        ]);

        return redirect('/tasks/'. $task->id);
    }
    public function destroy(Task $task){
        $task->delete();
        return redirect('/tasks');
    }
}
