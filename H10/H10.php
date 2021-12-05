<?php
    session_start();

    $users = array(
        array("janjaap", "1234","admin"),
        array("bert", "1235","user"),
        array("bert", "1236","user")
    );

   /* echo $users[0][2];
    echo $users[1][2];
    echo $users[2][2];*/

    ?>

<html lang="en">
    <body>
        <h1>
        </h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label for="gebruikersnaam">Login:</label>
            <input type="text" name="gebruikersnaam" value="">
        </div>
            <div>
                <label for="wachtwoord">Password</label>
                <input type="password" name="wachtwoord" value="">
            </div>
            <input type="submit" name="knop">

        </form>
    <p><a href="website.php">website</a></p>
    </body>
</html>

<?php

for ($row = 0; $row < 3; $row++){
    echo $row;
    for ($col = 0; $col < 3; $col++){
        echo $users[$row][$col];
    }
}
      if(isset($users[0][0] == $_POST["gebruikersnaam"])


       && isset($users[$_POST["gebruikersnaam"]])
      && $users[$_POST["gebruikersnaam"]] == $_POST['wachtwoord']) {
           $_SESSION["user"] = $_POST["gebruikersnaam"];
      echo "Welkom".$_SESSION["user"];
      } else {
          echo "klopt niet";
          var_dump($users);
      }

     ?>


