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
    //$gebruiker === $mail;
}



if($mail == ""){
    //echo "je moet nog een email invullen!";
    header("location: $url");
}elseif($ww == ""){
    header("location: $url");
}else{
echo "hoi";
    //welkom
}

//header("location: $url");

//if ($_POST['email'] == "") {
//
//    echo "<br><br><a href=\"H08.html\">Terug naar het formulier</a>";
//}
//if ($_POST['wachtwoord'] == "") {
//    echo "je moet nog een wachtwoord invullen!";
//    echo "<br><br><a href=\"H08.html\">Terug naar het formulier</a>";
//}