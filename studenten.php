<?php
require "database.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Studenten</title>
        <meta name="Studenten">
        <link rel="stylesheet" href="css/studenten.css">
    </head>
    <body>



        <form action="functions/addStudent.php" method="post">
            studentnr:      <br><input type="number"    name="studentnr"><br>
            roepnaam:       <br><input type="text"      name="roepnaam"><br>
            voorletters:    <br><input type="text"      name="voorletters"><br>
            tussenvoegsels: <br><input type="text"      name="tussenvoegsels"><br>
            achternaam:     <br><input type="text"      name="achternaam"><br>
            adress:         <br><input type="text"      name="adress"><br>
            postcode:       <br><input type="text"    name="postcode"><br>
            woonplaats:     <br><input type="text"      name="woonplaats"><br>

            geslacht:       <br><select                 name="geslacht">
                                    <option value="M">Man</option>
                                    <option value="V">Vrouw</option>
                                </select>
                            <br>
            telefoon:       <br><input type="number"    name="telefoon"><br>
            geboortedatum:  <br><input type="date"      name="geboortedatum"><br>
            uitgeschreven:  <br><input type="date"      name="uitgeschreven"><br>
            schoolgeld:     <br><input type="number"    name="schoolgeld"><br>
            betaald:        <br><input type="number"    name="betaald"><br>


            <input type="submit" value="Submit" name="insertUserData">
        </form>
        <h3><a href="index.html">back</a></h3>
    </body>
</html>
