<?php

function generatePassword ($password_length, $array_password, $characters) {

    for ($i = 0; $i < $password_length; $i++){

        $random_character = substr($characters, rand(0, strlen($characters) - 1), 1);
        $array_password[] = $random_character;
        
    }
    // var_dump(array_password);
    // $test = implode(array_password);
    return $array_password;
}

$password = implode(generatePassword ($password_length, $array_password, $characters));
// var_dump($password);

?>