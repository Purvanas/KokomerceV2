<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Entreprise générale du BTP experts menuisiers/charpentiers"/>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Kokomerce</title>
    <!--<link rel="icon" type="image/x-icon" href="asset/image/letter-p.ico">-->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script> 
        $(function(){
            $("#header").load("asset/header.html"); 
            $("#footer").load("asset/footer.html"); 
        });
    </script>
</head>

<body>
    <div id="top" style="position: absolute; top: 0;"></div>
    
    <div id="header"></div>

    <h1><img src="asset/image/Logo_SASU_Maxime2.png" style="max-height: 300px; border-radius: 50px;" alt="Kokomerce"/></h1><br>
    
    <h2 style="margin-top: 0; text-align: center;" id="bienvenuMsg">Bienvenue sur Kokomerce !</h2>
    <div class="bg mep">
        <div id="feuille">
            <!-- Contenu ici -->
        </div>
    </div>

    <div id="footer"></div>

    <script>
        let bienvenuMsg = document.getElementById("bienvenuMsg");
        if (localStorage.getItem("userData") !== null) {
            let userDataString = localStorage.getItem("userData");
            console.log('userDataString '+ userDataString)
            let userData = JSON.parse(userDataString);
            console.log('userData '+ userData)
            let prenom = userData.prenom;
            console.log('prenom '+ prenom)

            bienvenuMsg.textContent = 'Bienvenue ' + prenom + ' sur Kokomerce !';
        }
    </script>
    
</body>
</html>
