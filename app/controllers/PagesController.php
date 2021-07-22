<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Todo;

class PagesController
{
    public function home()
    {
        require 'Todo.php';

        $todos = App::get('database')->selectAll('todos', 'Todo');

        return view('index', ['todos' => $todos]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function insert()
    {
        require('Todo.php');

        App::get('database')->insert('todos', [
            'name' => $_POST['name'],
            'description' => $_POST['description'],
            'date' => $_POST['date'],
            'completed' => 0
        ]);

        redirect('');
    }
}
