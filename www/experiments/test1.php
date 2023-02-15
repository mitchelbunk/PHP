<?php



/*
$password = $_POST['password'];

$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;*/

#zorg dat deze variabele gehast is

$wachtwoord = 'Welkom01';
$hash = hash('sha512', $wachtwoord);

$gebruikerinvoer = 'Welkom01';


function inloggen(){
    echo "Inlog geslaagd";
}

#deze vergelijking moet uiteraard blijven werken, eventueel in gewijzigde vorm
if($hash === hash('sha512', $gebruikerinvoer)) {
    inloggen();
} else {
    throw new Exception('Wachtwoord onjuist');
    exit;
}



?>