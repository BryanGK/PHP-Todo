<?php

require('Todo.php');

$app['database']->insert('todos', [
    'name' => $_POST['name'],
    'description' => $_POST['description'],
    'date' => $_POST['date'],
    'completed' => 0
]);

header('Location: /');