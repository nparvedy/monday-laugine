<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>monday-laugine</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<?php
$erreur = NULL;
function login($id, $pwd, $db)
{
    foreach ($db as $user)
    {
        if ($user->get_id() == $id && $user->get_password() == $pwd)
        {
            return true;
        }
    }
    return false;
}

function formulaire($erreur){
    ?>
        <p>Registrer</p>
            <form action="index.php" method="POST">
                <p>Email : <input type="text" name="id" /></p>
                <p>Mot de passe : <input type="password" name="password" /></p>
                <input type="checkbox" name="remember" id="remember" /> 
                <label for="case">Remember me </label><br />
                <input type="submit" value="Register" /> <a href="#">Forgot your password ?</a>
                <?php if (isset($erreur)) {
                    echo '<p>' . $erreur . '</p>';
                    }?>
            </form>
    <?php
}

if ((isset($_POST["id"]) && !empty($_POST["id"])) && 
    (isset($_POST["password"]) && !empty($_POST["password"])))
    {
        require("User.php");
        
        
        $getId      =   $_POST["id"];
        $getPwd     =   sha1($_POST["password"]);
        
        $logged     =   login($getId, $getPwd, $userDatabase);

        if ($logged)
        {
            echo "<h1>OK</h1>";
        }else{
            $erreur = "Les identifiants ne sont pas bons";
            
            formulaire($erreur);
        }
    }
    else
    {
            formulaire($erreur);

    }
    ?>
    
</body>
</html>