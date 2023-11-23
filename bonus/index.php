<?php

// $get_max_num = (int)$_GET['number'] ?? '';
$get_max_num = isset($_GET['number']) ? (int)$_GET['number'] : '';
// var_dump($get_max_num);

$random_letter = 'abcdefghijklmnopqrstuvwxyzç@ò#à!ì0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
// var_dump($random_letter[10]);

// require __DIR__ . '/functions.php';
session_start();
require '../functions.php';

$_SESSION['passowrd'] = $password;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <main>
        <h1>Crea la tua password</h1>
        <form action="" method="GET">
            <input type="number" name="number" id="number" placeholder="Inseriesci il numero maggiore di 7">
            <button>Invia</button>
        </form>
    </main>
</body>

</html>