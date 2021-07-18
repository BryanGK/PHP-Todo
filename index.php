<?php

$query = require 'bootstrap.php';

require 'Todo.php';

$todos = $query->selectAll('todos', 'Todo');

require('./views/index.views.php');