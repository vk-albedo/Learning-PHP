<?php

namespace App\Controllers;

use App\Core\App;

class TasksController
{
    public function index()
    {
        $tasks = App::get('database')->selectAll('todos');

        return view('tasks', compact('tasks'));
    }

    public function addTask()
    {
        App::get('database')->insertInto(
            'todos',
            ['description' => $_POST['task'],
                'completed' => 0]
        );

        return redirect('tasks');
    }
}
