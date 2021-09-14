<?php

?>
<!DOCTYPE>
<html lang="en">
<head>

    <title>opdr2</title>

    <style>
        body {
            text-align: center;
        }
        .rood {
            border: red solid 5px;
        }
    </style>
</head>
<body>

<?php
    for($i = 0; $i <= 9; $i++) {
        if($i == 3) {
            $class = "class='rood'";
        }
        else {
            $class = "";
        }
        echo "<img ".$class. "src='Images/Guardian".$i.".jpg'>";
    }
?>

</body>
</html>