<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
    <title>php Todo App</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Welcome to my <img class="header_icon" src="../site_assets/php_icon.svg" alt="php icon"> Todo App</a>
        </div>
    </nav>
    <div class="todo-form">
        <form>
            <label for="name">Name: </label>
            <input class="form-control" type="text" name="name">
            <label for="date">Due Date: </label>
            <input class="form-control" type="date" name="date">
            <label for="description">Description: </label>
            <textarea class="form-control" name="description" id="todo-description" cols="30" rows="10"></textarea>
            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
    </div>

    <div class="todo-table">
        <table class="table">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Due Date</th>
                <th scope="col">Completed</th>
            </tr>
            <?php foreach ($todos as $todo) : ?>
                <tr>
                    <td><?= $todo->name; ?></td>
                    <td><?= $todo->description; ?></td>
                    <td><?= $todo->due_date; ?></td>
                    <td><input type="checkbox" <?= $todo->completed ? 'checked' : '' ?>></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>