<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <style>
        body {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>

</head>
<body>
    <h1>Task for the Day</h1>
    <ul>
        <!-- One method -->
        <?php foreach ($tasks as $task => $value) : ?>
            <li>
                <strong><?= ucwords($task); ?>: </strong> <?= $value; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <ul>
        <!-- Another method -->
            <li><strong>Title: </strong><?= $tasks['title']; ?></li>
            <li><strong>Due: </strong><?= $tasks['due']; ?></li>
            <li><strong>Assigned To: </strong><?= $tasks['assigned_to']; ?></li>
            <li><strong>Completed: </strong><?= $tasks['completed'] ? 'Complete' : 'Incomplete'; ?></li> <!-- Ternary operator for True/False -->
    </ul>
</body>
</html>