<?php

require 'Todo.php';

$todos = $database->selectAll('todos', 'Todo');

require('./views/index.view.php');
