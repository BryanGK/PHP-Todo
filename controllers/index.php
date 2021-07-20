<?php

require 'Todo.php';

$todos = $app['database']->selectAll('todos', 'Todo');

require('./views/index.view.php');
