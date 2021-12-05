<?php
$mail = $_POST['email'];
$ww = $_POST['wachtwoord'];
$url = 'http://localhost/PHP/H08/H08.html';


$gebruikers = array(
  "piet@worldonline.nl" => "doetje123",
  "klaas@carpets.nl" => "snoepje777",
  "truushendriks@wegweg.nl" => "arkiearkie201"
);

foreach ($gebruikers as $gebruiker => $wachtwoord){
    echo $gebruiker.''.$wachtwoord.'<br />';

}



if($mail == ""){
    //echo "je moet nog een email invullen!";
    header("location: $url");
}elseif($ww == ""){
    header("location: $url");
}else{
echo "hoi";

}

