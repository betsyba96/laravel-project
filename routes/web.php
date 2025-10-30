<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;


class Task
{
  public function __construct(
    public int $id,
    public string $title,
    public string $description,
    public ?string $long_description,   // ? denotes optional
    public bool $completed,
    public string $created_at,
    public string $updated_at
  ) {
  }
}


Route::get('/', function(){
    return redirect()->route('tasks.index');
});
Route::get('/tasks', function () {
    return view('index',[
    //    'tasks'=> \App\Models\Task::all()     // fetching all Data from DB
       'tasks'=> \App\Models\Task::latest()->where('completed',true)->get()  // latest() - get as objects to get the data need to include get()
    ]);
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id)  {
    return view('show',[
        'task'=> \App\Models\Task::findOrFail($id)
    ]);
})->name('tasks.show');

Route::get('/hello', function () {  // url can be anything ex: xxx, while using hallo route it will redirect here
    return "Hello Page";
})->name(name: 'hello');

Route::get('/hallo', function () {
    return redirect()->route('hello');
});

Route::get('/hello/{name}', function ($name) {
    return "Hello ". $name.' ! ';
});

Route::fallback(function(){
    return "Still got somewhere!";      // redirect to the common page when it the route is not exists
});
