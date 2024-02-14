<?php
include "database.php";

$stmt = $conn->prepare("SELECT roepnaam, tussenvoegsels, achternaam FROM student");
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <meta name="Dashboard">
</head>
<body>

<?php


//  mysql query for fetching data
// $mysql = 'SELECT student.roepnaam, student.tussenvoegsels, student.achternaam, studentopleiding.opleidingscode
//           FROM student
//           INNER JOIN studentopleiding
//            ON student.studentnr = studentopleiding.studentnr;'

$statement = 'SELECT naam FROM opleiding;';

//$statement = 'SELECT student.studentnr, student.roepnaam, studentopleiding.studentnr  FROM student INNER JOIN studentopleiding ON student.studentnr=;';//



// echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">

//       <tr>
//            <th>roepnaam</th>
//            <th>tussenvoegsel</th>
//            <th>achternaam</th>
//       </tr>';

$data = $conn->query($statement);



?>



<div class="dropdown">
    <button class="dropbtn">Opleidingen</button>
    <div class="dropdown-content">
        <?php

        foreach ($data as $row)
        {
            echo '
                <td>
                    <td><p><a>'.$row["naam"].'</a></td><br>
                    <td></td>
                </tr>';
        }
//als je erop klikt zie je een overzicht van alle studenten die deze opleiding doen
        ?>
    </div>
</div>

</body>
</html>