<?php
    session_start();

    $users = array(
        "janjaap" => array("pwd" => "1234", "rol" => "Administrator"),
        "bert" => array("pwd" => "1235", "rol" => "Gebruiker"),
        "jans" => array("pwd" => "1236", "rol" => "Administrator"),
        "Jantienbunk@gmail" => array("pwd" => "Mikkie", "rol" => "Gebruiker"
        ,
            )
    );

    if (isset($_GET["loguit"])){
        $_SESSION = array();
        session_destroy();
    }

    if (isset($_POST['knop'])
        && isset($users[$_POST["login"]])
        && $users[$_POST["login"]]["pwd"] == $_POST['pwd']) {
            $_SESSION["user"] = array("naam" => $_POST["login"],
                                "pwd" => $users[$_POST["login"]]['pwd'],
                                "rol" => $users[$_POST["login"]]['rol']);
        $message = "welkom ".$_SESSION["user"]["naam"]." met de rol ". $_SESSION["user"]["rol"];

    } else {
        $message = "U moet nog inloggen"; 
    }
    print_r($_SESSION);
?>

<html lang="en">


    <body>
        <h1><?php echo $message; ?></h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div>
            <label for="login">Login:</label>
            <input type="text" name="login" value="">
        </div>
        <div class="form-group">
            <label for="pwd">Password</label>
            <input type="password" name="pwd" value="">
        </div>
        <input type="submit" name="knop">
    </form>
        <p><a href="website.php">website</a></p>
        <p><a href="login.php?loguit">uitloggen</a></p>
    </body>

</html>