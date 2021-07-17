<?php

class Todo 
{
    protected $todo;
    protected $date;
    protected $description;
    protected $is_completed = false;

    function __construct($todo, $date, $description)
    {
        $this->todo = $todo;
        $this->date = $date;
        $this->description = $description;
    }

    function completed()
    {
        $this->is_completed = true;
    }
}

$todo = new Todo('Walk the dog', '3/28/2021', 'walk the dog to the park to poop.');

require('./views/index.views.php');