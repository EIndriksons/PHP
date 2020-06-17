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
    </ul>
    <ul>
        <!-- second method -->
        <?php
            foreach ($names as $name) {
                echo "<li>$name</li>";
            }
        ?>
    </ul>
    <ul>
        <!-- associative array method -->
        <?php foreach ($person as $key => $val) : ?>
            <li><strong><?= $key; ?></strong> <?= $val; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>