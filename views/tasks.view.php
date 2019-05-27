<?php require('partials/head.php'); ?>

    <h1>Task For The Day</h1>

    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description; ?></strike>
                <?php else : ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h1>Submit your task</h1>

    <form method="post" action="/tasks">

        <input name="task">
        <button type="submit">Submit</button>

    </form>

<?php require('partials/footer.php'); ?>