<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/jquery.js"></script>
</head>

<body>
    <div class="container-box">
        <div class="row">
            <div class="alert alert-danger" role="alert"></div>
            <div class="form-group">
                <form action="Load/ValidationLogin" method="post">
                    <input type="text" name="loginAdmin" id="loginAdmin" placeholder="Saisir le login" required="" autofocus="">
                    <input type="text" name="mdpAdmin" id="mdpAdmin" placeholder="Saisir le mot de passe" required="">
                    <input type="submit" id="ValidConnex" value="Connexion">
                   
                </form>
            </div>

        </div>
    </div>
</body>

</html>