<?php

function login($email, $wachtwoord) {


$gebruikers = array(
  "piet@worldonline.nl" => "doetje123",
  "klaas@carpets.nl" => "snoepje777",
  "truushendriks@wegweg.nl" => "arkiearkie201"
);


foreach ($gebruikers as $gebruiker => $waarde){
    if ($email == $inlog &&  $wachtwoord == $waarde){
        $inlog = true;
        echo "welkom gebruiker";
    }


}
return ($inlog);
}
login($_POST['email'], $_POST ['wachtwoord']);

//echo $gebruiker[$wachtwoord].'<br />';
//$gebruiker === $mail;

//if($mail == ""){
//    //echo "je moet nog een email invullen!";
//    header("location: $url");
//}elseif($ww == ""){
//    header("location: $url");
//}else{
//echo "hoi";
//    //welkom
//}
//
////header("location: $url");
//
////if ($_POST['email'] == "") {
////
////    echo "<br><br><a href=\"H08.html\">Terug naar het formulier</a>";
////}
////if ($_POST['wachtwoord'] == "") {
////    echo "je moet nog een wachtwoord invullen!";
////    echo "<br><br><a href=\"H08.html\">Terug naar het formulier</a>";
////}