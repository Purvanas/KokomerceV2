<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>Contact</title>
    <link rel="icon" type="image/x-icon" href="../asset/image/letter-p.ico">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script> 
        $(function(){
            $("#header").load("../asset/header.html"); 
            $("#footer").load("../asset/footer.html"); 
        });
    </script> 
</head>
<body>
    <div id="header"></div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $url = 'http://localhost:1337/api/auth/local';

            $data = array('identifier' => $email, 'password' => $password);
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            $response = curl_exec($ch);
            curl_close($ch);

            $responseArray = json_decode($response, true);

            if (isset($responseArray['jwt'])) {
                echo "<p>Connexion réussie!</p>";


                // Stocker les informations utilisateur dans le localStorage via JavaScript
                echo "<script>localStorage.setItem('userData', '" . addslashes(json_encode($responseArray['user'])) . "');</script>";
            } else {
                echo "<p>Échec de la connexion</p>";
            }
        }
    ?>

    <form method="post" action="">
        Email: <input type="email" name="email"><br>
        Mot de passe: <input type="password" name="password"><br>
        <input type="submit" value="Se connecter">
    </form>

    <div id="footer"></div>
</body>
</html>
