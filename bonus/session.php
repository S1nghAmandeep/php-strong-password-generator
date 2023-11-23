<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password</title>
</head>

<body>
    <main>
        <h3>La tua password è:</h3>
        <strong><?php echo $_SESSION['passowrd'] ?></strong>
    </main>
</body>