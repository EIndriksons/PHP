<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>

</head>
<body>
    <ul>
        <!-- one method -->
        <?php foreach ($names as $name) : ?>
            <li><?= $name; ?></li>
        <?php endforeach; ?>

        <!-- second method -->
        <?php
            foreach ($names as $name) {
                echo "<li>$name</li>";
            }
        ?>
    </ul>
</body>
</html>