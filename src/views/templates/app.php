<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/output.css" rel="stylesheet">
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <main>
        <?php require_once "views/{$view}.view.php"; ?>
    </main>
</body>

</html>