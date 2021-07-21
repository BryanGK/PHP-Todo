<?php require('views/partials/head.php'); ?>

<div class="todo-form">
    <form method="POST" action="/todo">
        <label for="name">Name: </label>
        <input class="form-control" type="text" name="name">
        <label for="due_date">Due Date: </label>
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

<?php require('views/partials/footer.php');
