<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'ProveIt' ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="Website for ProveIt Application">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '/styles.css') ?>">
    <script src="https://kit.fontawesome.com/c4d9db6500.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="../assets/favicon.svg" />
    <link rel="shortcut icon" href="../assets/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/apple-touch-icon.png" />
    <link rel="manifest" href="../assets/site.webmanifest" />
</head>
<body>