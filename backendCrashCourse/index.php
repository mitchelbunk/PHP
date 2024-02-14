


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School</title>
</head>
<body>
    
<?php



$strings = "hello world" . "<br>";

echo $strings;

$int1 = 1;
$int2 = 2;
$float = $int1 - $int2;
$boolean1 = false;
$boolean2 = true;

$NULL = false;
define('DSC', 'Deep Stone Crypt ');

echo DSC."<br>";

$characters = array(
    array("Ganyu", "Cryo", "Bow"),
    array("Yoimya", "Pyro", "Bow"),
    array("Raiden", "Electro", "Polearm"),
    array("Kazuha", "Anemo", "Sword")
);

echo $characters[0][0]."'s element is ". $characters[0][1] ." and her weapon is a ".$characters[0][2]."<br><hr>";
echo $characters[1][0]."'s element is ". $characters[1][1] ." and her weapon is a ".$characters[1][2]."<br><hr>";
echo $characters[2][0]."'s element is ". $characters[2][1] ." and her weapon is a ".$characters[2][2]."<br><hr>";
echo $characters[3][0]."'s element is ". $characters[3][1] ." and her weapon is a ".$characters[3][2]."<br><hr>";
?>

</body>
</html>