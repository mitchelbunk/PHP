<?php

?>

<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>opdr2</title>
</head>
<body>
<?php
  //for ($i = 1; $i<=9; $i++) {
  //    echo "<img src='Images/Guardian".$i.".jpg'>";
  //}
$personas = array("Joker_and_Violet.jpg", "Makoto_and_Minako5.jpg", "Makoto_and_Minato4.png", "Makoto_and_Yukari.png");
foreach($personas as $protagonists){
    echo "<img src=Persona/".$protagonists.">";
}

?>

</body>
</html>