<?php

$get_max_num = (int)$_GET['number'] ?? '';
// var_dump($get_max_num);

$random_letter = 'abcdefghijklmnopqrstuvwxyzç@ò#à!ì0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
// var_dump($random_letter[10]);

include 'functions.php';

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
        <form action="" method="GET">
            <input type="number" name="number" id="number" placeholder="Inseriesci il numero maggiore di 7">
            <button>Invia</button>
        </form>

        <h1>La tua password è: <?php echo $password ?></h1>
    </main>
</body>

</html>