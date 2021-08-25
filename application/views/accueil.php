<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Mini Market</title>
</head>
<body>

<div class="bourse-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Mini Market </h1>
  <p class="lead"> Choisissez entre être un client ou d'être un Admin</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Le Client </h4>
      </div>
      <div class="card-body">
        <h3 class="card-title pricing-card-title">Entrez vos identifiants en tant que Client.</h3>
        
        <a type="button" href="client_login.jsp" class="btn btn-lg btn-block btn-success">Connexion</a>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">L'Admin</h4>
      </div>
      <div class="card-body">
        <h3 class="card-title pricing-card-title">Entrez vos identifiants en tant que Admin.</h3>

        <a type="button" href="broker_login.jsp" class="btn btn-lg btn-block btn-success">Connexion</a>
      </div>
    </div>

  </div>
</div>


</body>

</html>