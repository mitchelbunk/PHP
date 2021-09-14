<!DOCTYPE>
<html lang="en">
<head>

    <title>opdr6</title>






</head>
<body>

    <?php

// maak een array voor de zwemclubs
    $zwemclubs = array(
            "De spartelkuikens" => 25,
        "De Waterbuffels" => 32,
        "Plonsmderin" => 11,
            "Bommetje" => 23
    );

// zoek naar een image om elk 5tal aan te geven
    $zwemimage = "";
// doorloop de array met foreach
    foreach ($zwemclubs as $key => $value){
        $picnum = floor($value / 5);
        for ($i = 0; $i < $picnum; $i++) {
            $zwemimage = $zwemimage . "<img src='Images/Afbeelding1.png'>";
        }
// toon de uitkomst op het scherm
        echo $key . " " . $value . "$zwemimage" . "<br>";
        $zwemimage = "";
    }


    ?>

</body>
</html>