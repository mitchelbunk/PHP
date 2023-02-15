<?php
echo "loop tot 100, deelbaar door 3 en door 5 <br>";

for ($x = 1; $x <= 100; $x++) {

    if ($x % 3 === 0 and $x % 5 === 0){
        echo " DCA-ICT  <br> ";
    }
    elseif ($x % 5 === 0){
        echo " DCA <br> ";
    }
    elseif($x % 3 ===0) {
        echo "hoi <br>";
    }

    else{
        echo $x."<br>";
    }
}

?>