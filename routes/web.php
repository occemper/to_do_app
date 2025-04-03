<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', [
        'tasks' => \App\Models\Task::latest()->get()
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')
    ->name('tasks.create');

Route::get('/tasks/{id}', function ($id) {
    $task = \App\Models\Task::findOrFail($id);

    return view('show', ['task' => $task]);
})->name('tasks.show');

Route::post('/tasks', function (Request $request) {
    dd($request->all());
})->name('tasks.store');

Route::fallback(function () {
    return ('Still got you somewere!');
});
