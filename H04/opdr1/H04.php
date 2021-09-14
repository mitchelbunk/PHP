<?php


function moduleer3($getal) {
    if ($getal % 3 == 0){
        return true;

    }
    else {
        return false;

    }

}
echo(moduleer3(8));

echo "als er 1 staat is het true en als er niks staat is het false";
