<?php
    $x = null;
    $y = 0;


    /*
    bij deze zin heb ik de variabele $x null gegeven. als je deze echo execute zie je dat $x niks toont.
    null is wel aangegeven dus het telt wel als een waarde. maar die waarde houdt niks in en toont daarom ook niks
    */
    echo "Hello, I am Mitchel and I am " . $x . "years old<br>";

    /*
    bij deze opdracht heb ik variabele $y de waarde 0 gegeven.
    0 is een waarde. en is wel te zien wanneer je de code execute
    */

    echo "<br>Hello, I am Mitchel and I am " . $y . " years old <br>";

    /*
    nu heb ik $z gebruikt, maar ik heb niet meegegeven dat $z een waarde heeft of variabele is.
    daarom wordt in de webpagina gezegd dat $z undefined is.
    */

    echo "<br>Hello, I am Mitchel and I am " . "<mark>" . $z . "</mark>" . "years old";

    ?>