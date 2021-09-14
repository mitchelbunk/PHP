<?php



//

print_r($_POST['guardians']);


foreach ($_POST['guardians'] as $guardian) {
    echo "<img src='Images/".$guardian.".jpg'>";
}
echo "<br><br><a href=\"H07.html\">Terug naar het selectieformulier</a>";
