<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Admin</title>

    <link rel="shortcut icon" href="<?php echo img_loader('fav.jpg');?>">
    <link rel="stylesheet" href="<?php echo css_loader('bootstrap.min');?>">
    <link rel="stylesheet" href="<?php echo css_loader('fontawsom-all.min');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo css_loader('style');?>" />
</head>

<body>
    <div class="container-fluid ">
        <div class="container ">
        <div class="alert alert-danger" role="alert" id='err'>
            <div id="teny"></div>
        </div>
            <div class="row cdvfdfd">
                <div class="col-lg-10 col-md-12 login-box">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 log-det">
                            <div class="small-logo">
                                <i class="fab fa-asymmetrik"></i> Login Admin
                            </div>
                            <p class="dfmn">Connectez-vous pour suivre les statistiques du marché</p>
                            <form action="Login/validationLogin" method="post">
                                <div class="text-box-cont">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="loginAdmin" id="loginAdmin" placeholder="Saisir le login" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" name="mdpAdmin" id="mdpAdmin" placeholder="Saisir le mot de passe" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group center">
                                        <button class="btn btn-danger btn-round" id="submit">Connexion</button>
                                    </div>

                                    <div class="row">
                                        <p class="small-info">Connectez-vous via les réseaux sociaux:</p>
                                    </div>
                                </div>
                            </form>

                            <div class="row">
                                <ul>
                                    <li>
                                        <a href="www.facebook.com"><i class="fab fa-facebook-f"></a></i>
                                    </li>
                                    <li>
                                        <a href="www.twitter.com"><i class="fab fa-twitter"></a></i>
                                    </li>
                                    <li>
                                        <a href="www.linkedin.com"></a><i class="fab fa-linkedin-in"></a></i>
                                    </li>
                                </ul>
                            </div>



                        </div>
                        <div class="col-lg-6 col-md-6 box-de">
                            <div class="inn-cover">
                                <div class="ditk-inf">
                                    <div class="small-logo">
                                        <i class="fab fa-asymmetrik"></i> Client
                                    </div>
                                    <h2 class="w-100">Voulez-vous faire du shopping ?</h2>
                                    <p> C'est simple, il suffit de cliquer le bouton Connexion</p>
                                    <a href="index.php">
                                        <button type="button" class="btn btn-outline-light">Connexion</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="<?php echo js_loader('jquery-3.2.1.min');?>"></script>
<script src="<?php echo js_loader('popper.min');?>"></script>
<script src="<?php echo js_loader('bootstrap.min');?>"></script>
<script src="<?php echo js_loader('script');?>">
$(document).ready(function(){
    $("#submit").click(function(){
        var user=$("#loginAdmin").val();
        var mp=$("#mdpAdmin").val();
    if (user==''||mp=='') {
        jQuery("div#err").show();
        jQuery("div#teny").html("Remplir les champs");
    }else{
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>" + "Login/validationLogin",
            data: {name: user, pwd: mp},
            cache: false,
            success: function(result){
                if(result!=0){
                    window.location.replace(result);
                }else 
                    jQuery("div#err").show();
                    jQuery("div#teny").html("Echec de Login");
            }
        });
    }
    return false;
    });
});
</script>



</html>