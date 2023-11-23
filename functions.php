<?php
function generate_pass($lenght, $letters)
{
    if ($lenght > 7) {
        $letters_lenght = strlen($letters);
        $password = '';
        for ($i = 0; $i < $lenght; $i++) {
            $password .= $letters[random_int(0, $letters_lenght - 1)];
        }
        // var_dump($password);

        return $password;
    } else {
        return 'inserire il numero maggiore di 7';
    }
}
// echo generate_pass($get_max_num, $random_letter);

$password = generate_pass($get_max_num, $random_letter);
