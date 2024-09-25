<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;


Route::view('/','home');
Route::resource('/tasks',TaskController::class);

/*
---------------------------------------------------------------------------------------------------------------------
Route::controller(TaskController::class)->group(function (){
    Route::get('/','index');
    Route::get('/create','create');
    Route::get('/{task}','show');
    Route::post('/tasks','store');
    Route::get('/{task}/edit','edit');
    Route::patch('/{task}','update');
    Route::delete('/{task}','destroy');
});
*/
//------------------------------------------------------------------------------------------------------------------
/*
Route::get('/',[TaskController::class,'index']);
Route::get('/create',[TaskController::class,'create']);
Route::get('/{task}',[TaskController::class,'show']);
Route::post('/tasks',[TaskController::class,'store']);
Route::get('/{task}/edit',[TaskController::class,'edit']);
Route::patch('/{task}',[TaskController::class,'update']);
Route::delete('/{task}',[TaskController::class,'destroy']);
*/
/*

-------------------------------------------------------------------------------------------------------------------

Route::get('/tasks', function () {
    //Con with solucionamos el problema de N+1
    $tasks=Task::with('user')->latest()->simplePaginate(5);
    return view('tasks.index', [
        'tasks'=> $tasks
    ]);
});


//create
Route::get('/tasks/create', function () {
    return view("tasks.create");
});

//show
Route::get('/tasks/{task}', function (Task $task) {
    //$task=Task::find($id);
    return view('tasks.show',['task'=> $task]);
});

//Store
Route::post('/tasks', function () {
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
});

//Formulario editar tarea
Route::get('/tasks/{task}/edit', function (Task $task) {
    //$task=Task::find($id);
    return view('tasks.edit',['task'=> $task]);
});

//update
Route::patch('/tasks/{task}', function (Task $task) {
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
});

//Destroy
Route::delete('/tasks/{task}', function (Task $task) {
    $task->delete();
    return redirect('/tasks');
});
*/
