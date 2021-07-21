<?php

class Todo
{
    public $name;
    public $due_date;
    public $description;
    public $completed = false;

    function __construct($name, $due_date, $description)
    {
        $this->name = $name;
        $this->due_date = $due_date;
        $this->description = $description;
    }

    function completed()
    {
        $this->completed = true;
    }
}
