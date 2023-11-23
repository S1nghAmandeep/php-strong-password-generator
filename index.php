<?php


$get_max_num = (int)$_GET['number'] ?? '';
// var_dump($get_max_num);

$random_letter = 'abcdefghijklmnopqrstuvwxyzç@ò#à!ì0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
// var_dump($random_letter[10]);


function generate_pass($lenght, $letters)
{
    if ($lenght > 7) {
        $letters_lenght = strlen($letters);
        $password = '';
        for ($i = 0; $i < $lenght; $i++) {
            $password .= $letters[random_int(0, $letters_lenght - 1)];
        }
        var_dump($password);

        return $password;
    } else {
        return 'inserire il numero maggiore di 7';
    }
}

echo generate_pass($get_max_num, $random_letter);


// echo generate_pass();

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
    </main>
</body>

</html>