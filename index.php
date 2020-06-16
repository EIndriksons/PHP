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
    <header>
        <h1>
            <?php
                // standard way
                $name = htmlspecialchars($_GET['name']);
                echo "Hello $name!";

                // use htmlspecialchars() to prevent script injection
            ?>
        </h1>
    </header>
    <h1><?php echo "Hello " . htmlspecialchars($_GET['name']); // another way ?></h1>
    <h1><?= "Hello " . htmlspecialchars($_GET['name']); // shorter way ?></h1>
</body>
</html>